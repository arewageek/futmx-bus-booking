<x-app-layout>

    <div class="py-5 px-4 w-full">
        <div class="p-3 font-bold text-lg text-gray-200">
            Recent Tickets
        </div>
        <div class="flex justify-start flex-wrap">
            <div class="w-full md:w-1/3 p-3">
                <div class="bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="p-3 bg-red-400 rounded-lg font-bold shadow-lg">
                        Pending
                    </div>

                    <div class="p-5">
                        <table class="text-left text-sm text-gray-100">
                            <tr>
                                <th class="px-2 py-2">Destination:</th>
                                <td class="px-2 py-2">80 mins</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">No. of Passengers:</th>
                                <td class="px-2 py-2">20</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Travel Time:</th>
                                <td class="px-2 py-2">100</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Travel Date:</th>
                                <td class="px-2 py-2"></td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Car Type</th>
                                <td class="px-2 py-2"></td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Booking Status</th>
                                <td class="px-2 py-2"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-3">
                <div class="bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="p-3 bg-yellow-400 rounded-lg font-bold shadow-lg">
                        Approved
                    </div>

                    <div class="p-5">
                        <table class="text-left text-sm text-gray-100">
                            <tr>
                                <th class="px-2 py-2">Destination:</th>
                                <td class="px-2 py-2">80 mins</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">No. of Passengers:</th>
                                <td class="px-2 py-2">20</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Travel Time:</th>
                                <td class="px-2 py-2">100</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Travel Date:</th>
                                <td class="px-2 py-2"></td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Car Type</th>
                                <td class="px-2 py-2"></td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Booking Status</th>
                                <td class="px-2 py-2"></td>
                            </tr>
                        </table>

                        <div>
                            <button onclick="pay('{{Auth() -> user() -> email}}', 2000, 'b6g12')" class="text-xs font-bold text-slate-100 bg-slate-950 shadow-md px-3 py-3 rounded-lg hover:bg-slate-900 hover:shadow-lg transition hover:text-slate-200">
                                Proceed to Payment
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-3">
                <div class="bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="p-3 bg-green-400 rounded-lg font-bold shadow-lg">
                        Approved
                    </div>

                    <div class="p-5">
                        <table class="text-left text-sm text-gray-100">
                            <tr>
                                <th class="px-2 py-2">Destination:</th>
                                <td class="px-2 py-2">80 mins</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">No. of Passengers:</th>
                                <td class="px-2 py-2">20</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Travel Time:</th>
                                <td class="px-2 py-2">100</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Travel Date:</th>
                                <td class="px-2 py-2"></td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Car Type</th>
                                <td class="px-2 py-2"></td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Booking Status</th>
                                <td class="px-2 py-2"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-3">
                <div class="bg-gray-800 rounded-lg shadow-lg h-full">
                    <div class="p-3 bg-yellow-400 rounded-lg font-bold shadow-lg">
                        Approved
                    </div>

                    <div class="p-5">
                        <table class="text-left text-sm text-gray-100">
                            <tr>
                                <th class="px-2 py-2">Destination:</th>
                                <td class="px-2 py-2">80 mins</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">No. of Passengers:</th>
                                <td class="px-2 py-2">20</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Travel Time:</th>
                                <td class="px-2 py-2">100</td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Travel Date:</th>
                                <td class="px-2 py-2"></td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Car Type</th>
                                <td class="px-2 py-2"></td>
                            </tr>

                            <tr>
                                <th class="px-2 py-2">Booking Status</th>
                                <td class="px-2 py-2"></td>
                            </tr>
                        </table>

                        <div>
                            <button onclick="pay('{{Auth() -> user() -> email}}', 2000, 'b6g12')" class="text-xs font-bold text-slate-100 bg-slate-950 shadow-md px-3 py-3 rounded-lg hover:bg-slate-900 hover:shadow-lg transition hover:text-slate-200">
                                Proceed to Payment
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-3">
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