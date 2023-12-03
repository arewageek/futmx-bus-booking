<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class Bookings extends Controller
{
    public function create (Request $request){
        try{
            $user = Auth() -> user() -> email;
            $passenger_name = $request -> name;
            $passenger_tel = $request -> tel;
            $destination = $request -> destination;
            $numberOfPassengers = $request -> passengersCount;
            $time = $request -> time;
            $date = $request -> date;
            $carType = $request -> car;
            $bookingId = $this -> idGenerator(6);
            

            $booking = new Booking();
            $booking -> user = $user;
            $booking -> passenger = $passenger_name;
            $booking -> phone_number = $passenger_tel;
            $booking -> destination = $destination;
            $booking -> numberOfPassengers = $numberOfPassengers;
            $booking -> departure_time = $time;
            $booking -> departure_date = $date;
            $booking -> booking_id = $bookingId;
            $booking -> car_type = $carType;
            
            $booking -> save();

            return response()->json([
                'status' => 201,
                'message' => "New Booking has been created"
            ], 200);
        }
        catch(\Throwable $th){
            // return $th;
            return response()->json([
                'status' => 500,
                'messages' => "An error occurred while creating your order"
            ], 200);
        }
    }

    private function idGenerator($limit){
        $range = '1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m Q W E R T Y U I O P A S D F G H J K L Z X C V B N M';
        $elements = explode(' ', $range);

        $id = '';
        
        for($index = 0; $index <= $limit; $index ++){
            $picked = $elements[rand(0, count($elements)-1)];
            $id .= $picked;
        }

        return $id;
    }

    public function confirmRequest($id){
        try{
            Booking::where(['booking_id' => $id]) -> update(['status' => 'approved']);
            return response()->json([
                'status' => 200,
                'message' => "Payment approved"
            ], 200);
        }
        catch(\Throwable $th){
            return response()->json([
                'status' => 'Unable to approve the booking request'
            ], 200);
        }
    }

    public function confirmPayment ($id){
        try{
            $findOrder = Booking::where(['booking_id' => $id]) -> count();

            if($findOrder < 1){
                return response()->json([
                    'status' => 404,
                    'message' => "Booking code does not exist",
                ], 200);
            }
            else{
                Booking::where(['booking_id' => $id]) -> update([
                    'status' => 'paid'
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Payment was successful"
                ], 200);
            }
        }
        catch(\Throwable $th){
            // return $th;
            return response()->json([
                'status' => 500,
                'message' => "Could not confirm payment for the selected order"
            ], 200);
        }
    }

    public function list (){
        $reqs = Booking::where(['user' => Auth() -> user() -> email]) -> orderBy('id', 'desc') -> get();
        return $reqs;
    }
}
