<!-- dash.blade.php -->

@extends('layouts.app') <!-- Assuming 'layouts.app' is your main layout file -->

@section('content')
<!-- Content -->
<div>
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <!-- Card - Total Customers Served Today -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Total Customers Served Today
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                            {{ $totalCustomersServedToday }}
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card - Total cancelled Customers -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Total cancelled Customers
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                            {{ $totalCancelledCustomers }}
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card - Waiting in line -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Waiting in line
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                            {{ $waitingInLine }}
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card - Active Tellers -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Active Tellers
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                            {{ $activeTellers }}
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->

        <div class="grid lg:grid-cols-2 gap-4 sm:gap-6">
            <!-- Card - Weekly Served Customers -->
            <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl">
                <!-- Header -->
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-sm text-gray-500">
                            Weekly Served Customers
                        </h2>
                        <p class="text-xl sm:text-2xl font-medium text-gray-800">
                            {{ $weeklyServedCustomers }}
                        </p>
                    </div>

                    <div>
                        <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800">
                            <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"/><path d="m19 12-7 7-7-7"/></svg>
                            25%
                        </span>
                    </div>
                </div>
                <!-- End Header -->

                <div id="hs-multiple-bar-charts"></div>
            </div>
            <!-- End Card -->

            <!-- Card - Monthly Customers -->
            <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl">
                <!-- Header -->
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-sm text-gray-500">
                            Monthly Customers
                        </h2>
                        <p class="text-xl sm:text-2xl font-medium text-gray-800">
                            {{ $monthlyCustomers }}
                        </p>
                    </div>

                    <div>
                        <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-red-100 text-red-800">
                            <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"/><path d="m19 12-7 7-7-7"/></svg>
                            2%
                        </span>
                    </div>
                </div>
                <!-- End Header -->

                <div id="hs-single-area-chart"></div>
            </div>
            <!-- End Card -->
        </div>
    </div>
</div>
@endsection
<!-- End Content -->
