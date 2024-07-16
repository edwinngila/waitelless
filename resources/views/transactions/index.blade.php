@extends('layouts.app')

@section('content')

       <!-- Table Section -->
       <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

              <!-- Header -->
              <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                    <div>
                      <h2 class="text-xl font-semibold text-gray-800">
                        Transactions
                      </h2>
                      <p class="text-sm text-gray-600">
                        get to see what your staff has done
                      </p>
                    </div>

                    <div>
                      <div class="inline-flex gap-x-2">

                      </div>
                    </div>
                  </div>
                  <!-- End Header -->

                <!-- Table -->
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>

                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                              Id
                            </span>
                          </div>
                        </th>

                      <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Name
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Status
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Actions
                          </span>
                        </div>
                      </th>
                    </tr>
                  </thead>

                  <tbody class="divide-y divide-gray-200">
                    <tr class="bg-white hover:bg-gray-50">
                      <td class="size-px whitespace-nowrap align-top">
                        <a class="block p-6" href="#">
                              <span class="block text-xl font-semibold text-gray-800">Data 1</span>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td class="size-px whitespace-nowrap align-top">
                        <a class="block p-6" href="#">
                          <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800">Data 2</span>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td class="h-px w-72 min-w-72 align-top">
                        <a class="block p-6" href="#">
                          <span class="block text-sm text-gray-500">Data 3</span>
                        </a>
                      </td>
                      <td class="size-px whitespace-nowrap">
                          <div class="px-6 py-1.5 flex gap-x-5">
                            <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline font-medium" href="profile">
                              Edit
                            </a>
                            <svg class="size-5" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17 4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7V2H17V4ZM9 9V17H11V9H9ZM13 9V17H15V9H13Z"></path>
                          </svg>
                          </div>
                        </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->
      </div>
    <!-- End Table Section -->

@endsection
