<div class="mt-16">
    <div class="mt-14 w-full p-6 bg-white border align-middle border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        style="border-radius: 9px; width: 100%;">
        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-2">Welcome, </h3>
        <p class="text-lg text-gray-700 dark:text-gray-400 mb-1">{{ Auth::user()->name }}</p>
        <h5 class="mb-3 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
            You are member of {{ $member->society->name }} society
        </h5>
        <div class="text-gray-700 dark:text-gray-400 mb-2">
            <span class="font-semibold">Room Number:</span> {{ $member->room_number }}
        </div>
        <div class="text-gray-700 dark:text-gray-400">
            <span class="font-semibold">Ownership Status:</span> {{ $member->is_rented ? 'Rented' : 'Owned' }}
        </div>
    </div>

    <div class="mt-4 p-0">
        <div class="">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-4">
                <div class="flex flex-col items-center justify-center bg-gray-100 dark:bg-gray-700 border rounded-lg p-4 shadow-md hover:shadow-lg">
                    <div class="w-full bg-mygreen dark:bg-mygreen py-3 rounded-t-lg mt-2">
                        <p class="text-lg font-bold text-gray-900 dark:text-white text-center">Member Details</p>
                    </div>
                    <div class="relative overflow-x-auto w-full mt-4">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Parking Charges
                                    </th>
                                    <td class="px-6 py-4">Rs {{ number_format($member->society->parking_charges, 2) }}</td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Service Charges
                                    </th>
                                    <td class="px-6 py-4">Rs {{ number_format($member->society->service_charges, 2) }}</td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Maintenance Charges
                                    </th>
                                    <td class="px-6 py-4">Rs {{ number_format($maintenance, 2) }}</td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Total Charges
                                    </th>
                                    <td class="px-6 py-4">Rs {{ number_format($totalPayable, 2) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="flex-col items-center justify-center bg-gray-100 dark:bg-gray-700 border shadow-md hover:shadow-lg hover:bg-gray-200 dark:hover:bg-gray-600 h-auto"
                    style="border-radius: 9px;">
                    <div class="align-center flex flex-col items-center bg-mygreen dark:bg-mygreen rounded-t-lg">
                        <p class="text-lg font-bold text-gray-900 dark:text-white p-3">Society Details</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 border-b dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Society
                                    Name:</span> {{ $member->society->name }}</p>
                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Phone
                                    Number:</span> {{ $member->society->phone }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 border-b dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Address:</span>
                                {{ $member->society->address }}</p>
                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Bank
                                    Name:</span> {{ $member->society->bank_name }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 border-b dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Bank IFSC
                                    Code:</span> {{ $member->society->bank_ifsc_code }}</p>
                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Bank
                                    Account
                                    Number:</span> {{ $member->society->bank_account_number }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 border-b dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">President
                                    Name:</span> {{ $member->society->president_name }}</p>
                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Vice
                                    President
                                    Name:</span> {{ $member->society->vice_president_name }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Treasurer
                                    Name:</span> {{ $member->society->treasurer_name }}</p>
                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">Secretary
                                    Name:</span> {{ $member->society->secretary_name }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">UPI ID:</span>
                                {{ $member->society->upi_id }}</p>
                        </div>
                        <div class="p-3 flex-row">
                            <p class="text-base text-gray-900 dark:text-white"><span class="font-medium">UPI
                                    number:</span> {{ $member->society->upi_number }}</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
