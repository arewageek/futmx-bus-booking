<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paystack extends Controller
{
    public function verify ($ref, $amount) {
        $curl = curl_init();
  
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$ref,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".env('PAYSTACK_API'),
            "Cache-Control: no-cache",
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        
        if ($err) {
            return response()->json([
                'status' => 404,
                'message' => "Payment not found"
            ], 200);
        } else {
            $data = json_decode($response, false);

            // return $data;

            if($data -> data -> amount == $amount){

                if($data -> data -> status){
                    return response()->json([
                        'status' => 200,
                        'message' => $data
                    ], 200);
                }
                else{
                    return response()->json([
                        'status' => 200,
                        'message' => "Payment not successful"
                    ], 200);
                }
            }

            else{
                // echo $data -> data -> amount. "<br>";
                // echo $amount;
                return response()->json([
                    'status' => 400,
                    'message' => "Incorrect amount paid"
                ], 200);
            }

        }
        
        
        
    }
}
