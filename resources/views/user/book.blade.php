<x-app-layout>

    <div class="w-full flex justify-center items-center p-4">
        <div class="w-full md:w-1/3 bg-slate-800 shadow-md rounded-lg">
            <div class="w-full flex justify-between items-center py-2 px-4 rounded-lg bg-slate-700 shadow-lg text-slate-200 font-bold">
                <div class="p-3 bg-slate-900 cursor-pointer rounded-md shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
                        <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4-1v1h1v-1zm1 3v-1H4v1zm7 0v-1h-1v1zm-1-2h1v-1h-1zm-6 3H4v1h1zm7 1v-1h-1v1zm-7 1H4v1h1zm7 1v-1h-1v1zm-8 1v1h1v-1zm7 1h1v-1h-1z"/>
                    </svg>
                </div>

                <div>
                    Book A Ride
                </div>
            </div>

            <script>
                function handleSubmit (){
                    
                    try{
                        
                        const formData = $('.booking-form').serializeArray();

                        $.ajax({
                            url: '/api/booking/new',
                            data: formData,
                            method: 'get',
                            success: res => {
                                alert(res.message)
                                console.log(res)
                            }
                        })

                        return null
                    }
                    catch(e){
                        console.log(e)
                    }
                }


                $('.submit-btn').click(() => {
                    handleSubmit();
                })
                        
                $('.booking-form').submit(() => {
                    return null
                })
            </script>
            
            <div class="p-5">
                <form method="post" class="booking-form">
                    @csrf

                    <div class="w-full p-3">
                        <label for="name" class="font-bold text-xs text-slate-400">Passenger Name(s)</label>
                        <input id="name" name="name" type="text" class="w-full rounded-lg bg-slate-700 shadow border-0 text-slate-200 placeholder:text-slate-400" placeholder="Enter your name" />
                    </div>

                    <div class="w-full p-3">
                        <label for="tel" class="font-bold text-xs text-slate-400">Phone Number</label>
                        <input type="tel" id="tel" name="tel" class="w-full rounded-lg bg-slate-700 shadow border-0 text-slate-200 placeholder:text-slate-400" placeholder="Enter your Phone Number" />
                    </div>

                    <div class="w-full p-3 flex justify-between items-center space-x-2">
                        <div class="w-1/2 flex flex-col space-y-2">
                            <label for="destination" class="font-bold text-xs text-slate-400">Destination</label>
                            <select id="destination" name="destination" class="w-full rounded-lg bg-slate-700 shadow border-0 text-slate-200">
                                <option value="gk2bosso">GK to Bosso</option>
                                <option value="bosso2gk">Bosso to GK</option>
                            </select>
                        </div>
                        
                        <div class="w-1/2 flex flex-col space-y-2">
                            <label for="passengersCount" class="font-bold text-xs text-slate-400">Number of Passengers</label>
                            <select id="passengersCount" name="passengersCount" class="w-full rounded-lg bg-slate-700 shadow border-0 text-slate-200">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>

                    <div class="w-full p-3 flex justify-between items-center space-x-2">
                        <div class="w-1/2 flex flex-col space-y-2">
                            <label for="time" class="font-bold text-xs text-slate-400">Departure TT</label>
                            <input id="time" name="time" type="time" class="w-full rounded-lg bg-slate-700 shadow border-0 text-slate-200 placeholder:text-slate-400" />
                        </div>
                        
                        <div class="w-1/2 flex flex-col space-y-2">
                            <label for="date" class="font-bold text-xs text-slate-400">Departure TT</label>
                            <input id="date" name="date" type="date" class="w-full rounded-lg bg-slate-700 shadow border-0 text-slate-200 placeholder:text-slate-400" placeholder="Enter your Phone Number" />
                        </div>
                    </div>

                    <div class="w-full p-3">
                        <label for="car" class="font-bold text-xs text-slate-400">Car Type</label>
                        <select id="car" name="car" class="w-full rounded-lg bg-slate-700 shadow border-0 text-slate-200">
                            <option>Sharon</option>
                            <option>18 Seaters</option>
                            <option>32 Seaters</option>
                            <option>Marcopolo</option>
                        </select>
                    </div>

                    <div class="w-full p-3">
                        <button type="button" onclick="handleSubmit()" class="submit-btn px-3 py-2 rounded-lg font-bold text-sm text-slate-300 hover:text-slate-100 hover:bg-slate-900 bg-slate-950 shadow-lg transition">
                            Book a ride
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

</x-app-layout>