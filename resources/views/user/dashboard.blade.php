<x-app-layout>

    <div class="py-5 px-4 w-full">
        <div class="p-3 font-bold text-lg text-gray-200">
            Recent Tickets
        </div>

        <script>
            function fetchData(){
                $.get('/api/booking/list', res => {
                    console.log(res)
                    $('.trxs').html('')

                    res.map(trx => {
                        $('.trxs').append(`
                            <div class="w-full md:w-1/3 p-3">
                                <div class="bg-gray-800 rounded-lg shadow-lg h-full">
                                    <div class="capitalize p-3 bg-${trx.status == 'paid' ? 'green': (trx.status == 'approved' ? 'yellow' : 'red')}-500 rounded-lg font-bold shadow-lg">
                                        ${trx.status}
                                    </div>
        
                                    <div class="p-5">
                                        <table class="text-left text-sm text-gray-100 pb-4">
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
                                        <div class="${trx.status === 'approved' ? 'block' : 'hidden'}">
                                            <button onclick="pay('${trx.user}', '${400 * trx.numberOfPassengers}', '${trx.booking_id}')" class="text-xs font-bold text-slate-100 bg-slate-950 shadow-md px-3 py-3 rounded-lg hover:bg-slate-900 hover:shadow-lg transition hover:text-slate-200">
                                                Proceed to Payment
                                            </button>
                                        </div>

                                        <div class="py-3">
                                            <div class="${trx.status === 'paid' ? 'block' : 'hidden'}">
                                                <button onclick="javascript: $('.qr-${trx.booking_id}').toggle()" class="text-xs font-bold text-slate-100 bg-slate-950 shadow-md px-3 py-3 rounded-lg hover:bg-slate-900 hover:shadow-lg transition hover:text-slate-200">
                                                    Reveal QR Code
                                                </button>
                                            </div>
                                        </div>
                                    
                                        <div class="w-full flex justify-center qr-${trx.booking_id} hidden">
                                            <div class="p-2 shadow-lg w-auto">
                                                {{
                                                    QrCode::size(200) -> generate('Successful Payment: ${trx.booking_id}')
                                                }}
                                            </div>
                                        </div>
                                </div>
                            </div>
                        `)
                    })

                    $('.trxs').append(`
                        <a href='/booking' class="w-full md:w-1/3 p-3 min-h-[100pt]">
                            <div class="rounded-lg shadow-lg h-full border-dashed border-4 border-gray-600 hover:text-gray-400 hover:bg-[#0002] hover:border-gray-400 transition cursor-pointer text-gray-600">
                                <div class="p-5 h-full flex justify-center items-center">
                                    <div class="text-5xl font-bold">
                                        +
                                    </div>
                                </div>
                            </div>
                        </a>
                    `)
                })
            }
            fetchData()
        </script>
        
        <div class="flex justify-start flex-wrap trxs">
            <div class="w-full md:w-1/3 p-3 min-h-[100pt]">
                <div class="rounded-lg shadow-lg h-full border-dashed border-4 border-gray-600 hover:text-gray-400 hover:bg-[#0002] hover:border-gray-400 transition cursor-pointer text-gray-600">
                    <div class="p-5 h-full flex justify-center items-center">
                        <div class="text-5xl font-bold">
                            +
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>