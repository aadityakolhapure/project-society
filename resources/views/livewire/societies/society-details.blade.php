<div class="mt-12 p-0">
    <div class="">
        <div class="mb-4 border-gray-200 dark:border-gray-700">


            <ul
                class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                <li class="me-2">
                    <button aria-current="page"
                        class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">Society
                        Dashboard</button>
                </li>
                <li class="me-2">
                    <button
                        class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300"
                        wire:click="seeMembers({{ $society->id }})">See Members</button>
                </li>
                <li class="me-2">
                    <button aria-current="page"
                        class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300"
                        wire:click="seeMaintenanceBills({{ $society->id }})">Maintenance Bill</button>
                </li>

            </ul>

        </div>
        <div class="p-3">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                <div
                    class="flex flex-col items-center justify-center h-24 w-full rounded bg-gray-50 dark:bg-gray-800 border">
                    <div class="text-center p-3">
                        <p class="text-1xl font-medium text-gray-900 dark:text-white">Total Receivable</p>
                    </div>
                    <div class="text-center pb-2">
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">Rs
                            {{ number_format($receivableAmount, 2) }} /-</p>
                    </div>
                </div>

                <div
                    class="flex flex-col items-center justify-center h-24 w-full rounded bg-gray-50 dark:bg-gray-800 border">
                    <div class="text-center p-3">
                        <p class="text-1xl font-medium text-gray-900 dark:text-white">Total Payable</p>
                    </div>
                    <div class="text-center pb-2">
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">Rs 12456/-</p>
                    </div>
                </div>

                <div
                    class="flex flex-col items-center justify-center h-auto col-span-1 sm:col-span-2 lg:col-span-2 rounded bg-gray-50 dark:bg-gray-800 border">
                    <div class="flex flex-wrap items-center justify-around w-full">
                        <div class="flex flex-col items-center p-4">
                            <p class="text-2xl font-bold text-gray-900 dark:text-white pb-2">{{$advance}}</p>
                            <p class="text-1xl font-medium text-gray-900 dark:text-white">Advance/No Dues</p>
                        </div>
                        <div class="flex flex-col items-center p-4">
                            <p class="text-2xl font-bold text-gray-900 dark:text-white pb-2">{{ $currentBill }}</p>
                            <p class="text-1xl font-medium text-gray-900 dark:text-white">Current Bill</p>
                        </div>
                        <div class="flex flex-col items-center p-4">
                            <p class="text-2xl font-bold text-gray-900 dark:text-white pb-2">{{ $billDues }}</p>
                            <p class="text-1xl font-medium text-gray-900 dark:text-white">Bill Dues</p>
                        </div>
                        <div class="flex flex-col items-center p-4">
                            <p class="text-2xl font-bold text-gray-900 dark:text-white pb-2">{{ $neverPaid }}</p>
                            <p class="text-1xl font-medium text-gray-900 dark:text-white">Never Paid</p>
                        </div>
                    </div>
                </div>
            </div>




            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-4">
                <div class="flex-col items-center justify-center bg-gray-50 h-auto dark:bg-gray-800 border"
                    style="border-radius: 9px">
                    <div class="align-center flex flex-col items-center bg-slate-400">
                        <p class="text-lg font-bold text-gray-900 dark:text-white p-3">Society Details</p>
                    </div>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 border-b dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Society
                                    Name:</span> {{ $society->name }} </p>

                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Phone
                                    Number:</span> {{ $society->phone }} </p>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 border-b dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Address:</span>
                                {{ $society->address }} </p>

                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Bank
                                    Name:</span> {{ $society->bank_name }} </p>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 border-b dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Bank IFSC
                                    Code:</span>
                                {{ $society->bank_ifsc_code }} </p>
                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Bank Account
                                    Number:</span>
                                {{ $society->bank_account_number }} </p>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 border-b dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Member
                                    Count:</span>
                                {{ $society->member_count }} </p>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 border-b dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">President
                                    Name:</span>
                                {{ $society->president_name }} </p>
                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Vice President
                                    Name:</span>
                                {{ $society->vice_president_name }} </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 ">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Treasurer
                                    Name:</span>
                                {{ $society->treasurer_name }} </p>
                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Secretary
                                    Name:</span>
                                {{ $society->secretary_name }} </p>
                        </div>
                    </div>

                </div>




                <div
                    class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-800 border rounded-lg p-4">
                    <div class="w-full bg-slate-400 py-3 rounded-t-lg">
                        <p class="text-lg font-bold text-gray-900 dark:text-white text-center">Bank & Cash Summary</p>
                    </div>
                    <div class="relative overflow-x-auto w-full mt-4">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-medium">Total Balance as of {{ now()->format('d F Y') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">Rs
                                        {{ $society->updated_balance }}/-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        CashBook</th>
                                    <td class="px-6 py-4">00.00</td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        PhonePay</th>
                                    <td class="px-6 py-4">00.00</td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $society->bank_name }}</th>
                                    <td class="px-6 py-4">Rs 23456/-</td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Cheque</th>
                                    <td class="px-6 py-4">00.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>



        </div>
    </div>
