<x-admin-layout>

    <div class="py-5 px-4 w-full">
        <div class="p-3 font-bold text-lg text-gray-200">
            Recent Tickets
        </div>

        <script>
            function fetchData () {
                $.get('/api/admin/bookings', res => {
                    console.log(res)

                    if(res.status == 200){
                        const pending = res.message.pending
                        const unpaid = res.message.unpaid
                        const recent = res.message.recent

                        $('.trxs .pending').html('')
                        $('.trxs .unpaid').html('')
                        $('.trxs .recent').html('')

                        console.log(pending)
                        
                        pending.map(trx => {
                            $('.trxs .pending').append(`
                                <div class="w-full md:w-1/3 p-3">
                                    <div class="bg-gray-800 rounded-lg shadow-lg h-full">
                                        <div class="capitalize p-3 bg-red-500 rounded-lg font-bold shadow-lg">
                                            ${trx.status}
                                        </div>
            
                                        <div class="p-5">
                                            <table class="text-left text-sm text-gray-100 pb-4">
                                                <tr>
                                                    <th class="px-2 py-2">Name:</th>
                                                    <td class="px-2 py-2">${trx.user}</td>
                                                </tr>

                                                <tr>
                                                    <th class="px-2 py-2">Matric Number:</th>
                                                    <td class="px-2 py-2">${trx.matric}</td>
                                                </tr>

                                                <tr>
                                                    <th class="px-2 py-2">Phone Number:</th>
                                                    <td class="px-2 py-2">${trx.phone_number}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th class="px-2 py-2">Destination:</th>
                                                    <td class="px-2 py-2">${trx.destination == 'gk2bosso' ? "GK to Bosso" : "Bosso to GK" }</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">No. of Passengers:</th>
                                                    <td class="px-2 py-2">${trx.numberOfPassengers}</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">Departure Time:</th>
                                                    <td class="px-2 py-2">${trx.departure_time}</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">Departure Date:</th>
                                                    <td class="px-2 py-2">${trx.departure_date}</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">Car Type</th>
                                                    <td class="px-2 py-2">${trx.car_type}</td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="p-5 flex space-x-3 items-center">
                                            <div class="${trx.status === 'pending' ? 'block' : 'hidden'}">
                                                <button onclick="confirmReq('${trx.booking_id}')" class="text-xs font-bold text-slate-100 bg-slate-950 shadow-md px-3 py-3 rounded-lg hover:bg-slate-900 hover:shadow-lg transition hover:text-slate-200">
                                                    Confirm Request
                                                </button>
                                            </div>

                                            <div class="${trx.status === 'pending' ? 'block' : 'hidden'}">
                                                <button onclick="cancelReq('${trx.booking_id}')" class="text-xs font-bold text-red-100 bg-red-600 shadow-md px-3 py-3 rounded-lg hover:bg-red-700 hover:shadow-lg transition hover:text-red-200">
                                                    Cancel Request
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `)
                        })

                        unpaid.map(trx => {
                            $('.trxs .unpaid').append(`
                                <div class="w-full md:w-1/3 p-3">
                                    <div class="bg-gray-800 rounded-lg shadow-lg h-full">
                                        <div class="capitalize p-3 bg-yellow-500 rounded-lg font-bold shadow-lg">
                                            ${trx.status}
                                        </div>
            
                                        <div class="p-5">
                                            <table class="text-left text-sm text-gray-100 pb-4">
                                                <tr>
                                                    <th class="px-2 py-2">Name:</th>
                                                    <td class="px-2 py-2">${trx.user}</td>
                                                </tr>

                                                <tr>
                                                    <th class="px-2 py-2">Matric Number:</th>
                                                    <td class="px-2 py-2">${trx.matric}</td>
                                                </tr>

                                                <tr>
                                                    <th class="px-2 py-2">Phone Number:</th>
                                                    <td class="px-2 py-2">${trx.phone_number}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th class="px-2 py-2">Destination:</th>
                                                    <td class="px-2 py-2">${trx.destination == 'gk2bosso' ? "GK to Bosso" : "Bosso to GK" }</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">No. of Passengers:</th>
                                                    <td class="px-2 py-2">${trx.numberOfPassengers}</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">Departure Time:</th>
                                                    <td class="px-2 py-2">${trx.departure_time}</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">Departure Date:</th>
                                                    <td class="px-2 py-2">${trx.departure_date}</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">Car Type</th>
                                                    <td class="px-2 py-2">${trx.car_type}</td>
                                                </tr>

                                            </table>
                                            <div class="${trx.status === 'pending' ? 'block' : 'hidden'}">
                                                <button onclick="pay('${trx.user}', '${500 * trx.numberOfPassengers}', '${trx.booking_id}')" class="text-xs font-bold text-slate-100 bg-slate-950 shadow-md px-3 py-3 rounded-lg hover:bg-slate-900 hover:shadow-lg transition hover:text-slate-200">
                                                    Proceed to Payment
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `)
                        })

                        recent.map(trx => {
                            $('.trxs .recent').append(`
                                <div class="w-full md:w-1/3 p-3">
                                    <div class="bg-gray-800 rounded-lg shadow-lg h-full">
                                        <div class="capitalize p-3 bg-green-500 rounded-lg font-bold shadow-lg">
                                            ${trx.status}
                                        </div>
            
                                        <div class="p-5">
                                            <table class="text-left text-sm text-gray-100 pb-4">
                                                <tr>
                                                    <th class="px-2 py-2">Name:</th>
                                                    <td class="px-2 py-2">${trx.user}</td>
                                                </tr>

                                                <tr>
                                                    <th class="px-2 py-2">Matric Number:</th>
                                                    <td class="px-2 py-2">${trx.matric}</td>
                                                </tr>

                                                <tr>
                                                    <th class="px-2 py-2">Phone Number:</th>
                                                    <td class="px-2 py-2">${trx.phone_number}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th class="px-2 py-2">Destination:</th>
                                                    <td class="px-2 py-2">${trx.destination == 'gk2bosso' ? "GK to Bosso" : "Bosso to GK" }</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">No. of Passengers:</th>
                                                    <td class="px-2 py-2">${trx.numberOfPassengers}</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">Departure Time:</th>
                                                    <td class="px-2 py-2">${trx.departure_time}</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">Departure Date:</th>
                                                    <td class="px-2 py-2">${trx.departure_date}</td>
                                                </tr>
            
                                                <tr>
                                                    <th class="px-2 py-2">Car Type</th>
                                                    <td class="px-2 py-2">${trx.car_type}</td>
                                                </tr>

                                            </table>
                                            <div class="${trx.status === 'pending' ? 'block' : 'hidden'}">
                                                <button onclick="pay('${trx.user}', '${500 * trx.numberOfPassengers}', '${trx.booking_id}')" class="text-xs font-bold text-slate-100 bg-slate-950 shadow-md px-3 py-3 rounded-lg hover:bg-slate-900 hover:shadow-lg transition hover:text-slate-200">
                                                    Proceed to Payment
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `)
                        })
                    }
                })
            }

            fetchData()
        </script>

        <div class="flex justify-start flex-wrap flex-col space-y-2 trxs">
            <div class="pending p-5 flex flex-wrap"></div>
            <div class="unpaid p-5 flex flex-wrap"></div>
            <div class="recent p-5 flex flex-wrap"></div>
        </div>
        
    </div>
</x-admin-layout>