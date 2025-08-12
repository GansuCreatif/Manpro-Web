<div class="flex justify-between items-center mb-4">
    <!-- Search bar kecil -->
    <div class="relative w-full max-w-xs">
        <!-- Icon Search -->
        <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-400">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
            </svg>
        </span>

        <!-- Input -->
        <input id="tableSearch" type="text" placeholder="Search..."
            class="w-full pl-8 pr-2 py-1.5 border border-gray-300 rounded text-xs text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <div class="flex items-center gap-2">
        <!-- Export CSV -->
        <button type="button"
            class="p-2 bg-green-500 hover:bg-green-600 text-white rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-green-400"
            title="Export CSV">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v4H4zm0 8h16v8H4z" />
            </svg>
        </button>

        <!-- Export Excel -->
        <button type="button"
            class="p-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-emerald-400"
            title="Export Excel">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4z" />
            </svg>
        </button>

        <!-- Export PDF -->
        <button type="button"
            class="p-2 bg-red-500 hover:bg-red-600 text-white rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-red-400"
            title="Export PDF">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
        </button>
    </div>
</div>
<div class="grid grid-cols-2 gap-5 bg-blue-100">
    <!-- General -->
    <div class="bg-blue-50 rounded-lg mb-4">
        <div class="p-5">
            <h5
                class="inline-block border-b-2 border-blue-500 pb-1 mb-2 text-2xl font-bold tracking-tight text-blue-900">
                General</h5>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-black-500 bg-white">
                <tbody>
                    <tr>
                        <td class="py-2 px-4">Project Code</td>
                        <td class="py-2 px-4">: 20424</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Description</td>
                        <td class="py-2 px-4">: KAI Terrace Ahmad Palembang</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Unit</td>
                        <td class="py-2 px-4">: PPC</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Finance -->
    <div class="bg-blue-50 rounded-lg mb-4">
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-900">Finance</h5>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-black-500 bg-white">
                <tbody>
                    <tr>
                        <td class="py-2 px-4">Paymen Type</td>
                        <td class="py-2 px-4">: Termin</td>
                        <td class="py-2 px-4">PPN</td>
                        <td class="py-2 px-4">: 11%</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Bank</td>
                        <td class="py-2 px-4">: Mandiri</td>
                        <td class="py-2 px-4">Virtual Account</td>
                        <td class="py-2 px-4">: 1234-5678-9012-1234</td>
                    </tr>
                </tbody>
            </table>
            <div class="w-full overflow-x-auto lg:overflow-x-visible">
                <table class="min-w-full table-auto text-sm text-left bg-white">
                    <thead class="bg-amber-500 text-white">
                        <tr>
                            <th class="py-2 px-4">No</th>
                            <th class="py-2 px-4">Period</th>
                            <th class="py-2 px-4">Percentage</th>
                            <th class="py-2 px-4">Total</th>
                            <th class="py-2 px-4">Date Plan</th>
                            <th class="py-2 px-4">Date Actual</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">Down Payment</td>
                            <td class="py-2 px-4">10%</td>
                            <td class="py-2 px-4 whitespace-nowrap">Rp.244.530.590</td>
                            <td class="py-2 px-4 whitespace-nowrap">5 Jan 2025</td>
                            <td class="py-2 px-4 whitespace-nowrap">5 Jan 2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<div class="grid grid-cols-3 gap-5 bg-blue-100">
    <!-- Bar Charts Vertical -->
    <div class="max-w-sm mx-auto bg-blue-100 rounded-lg shadow-sm dark:bg-gray-800 p-4 md:p-6 mb-4">
        <div class="flex justify-between border-gray-200 border-b dark:border-gray-700 pb-3">
            <dl>
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Profit</dt>
                <dd class="leading-none text-3xl font-bold text-gray-900 dark:text-white">$5,405</dd>
            </dl>
            <div>
                <span
                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13V1m0 0L1 5m4-4 4 4" />
                    </svg>
                    Profit rate 23.5%
                </span>
            </div>
        </div>

        <div class="grid grid-cols-2 py-3">
            <dl>
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Income</dt>
                <dd class="leading-none text-xl font-bold text-green-500 dark:text-green-400">$23,635</dd>
            </dl>
            <dl>
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Expense</dt>
                <dd class="leading-none text-xl font-bold text-red-600 dark:text-red-500">-$18,230</dd>
            </dl>
        </div>

        <div id="bar-chart"></div>
        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
            <div class="flex justify-between items-center pt-5">
                <!-- Button -->
                <button id="dropdownButton2" data-dropdown-toggle="lastDaysdropdown2"
                    data-dropdown-placement="bottom"
                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                    type="button">
                    Last 6 months
                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="lastDaysdropdown2"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                7 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                30 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                90 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                6 months</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                year</a>
                        </li>
                    </ul>
                </div>
                <a href="#"
                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                    Revenue Report
                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- Bar Charts Horizontal -->
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-sm dark:bg-gray-800 p-4 md:p-6 mb-4">
        <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center">
                <div class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                    <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                        <path
                            d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                        <path
                            d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                    </svg>
                </div>
                <div>
                    <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">3.4k</h5>
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Leads generated per week</p>
                </div>
            </div>
            <div>
                <span
                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13V1m0 0L1 5m4-4 4 4" />
                    </svg>
                    42.5%
                </span>
            </div>
        </div>

        <div class="grid grid-cols-2">
            <dl class="flex items-center">
                <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Money spent:</dt>
                <dd class="text-gray-900 text-sm dark:text-white font-semibold">$3,232</dd>
            </dl>
            <dl class="flex items-center justify-end">
                <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Conversion rate:</dt>
                <dd class="text-gray-900 text-sm dark:text-white font-semibold">1.2%</dd>
            </dl>
        </div>

        <div id="column-chart"></div>
        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
            <div class="flex justify-between items-center pt-5">
                <!-- Button -->
                <button id="dropdownButton" data-dropdown-toggle="lastDaysdropdown1" data-dropdown-placement="bottom"
                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                    type="button">
                    Last 7 days
                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="lastDaysdropdown1"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                7 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                30 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                90 days</a>
                        </li>
                    </ul>
                </div>
                <a href="#"
                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                    Leads Report
                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- Bar Charts Vertical -->
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-sm dark:bg-gray-800 p-4 md:p-6 mb-4">
        <div class="flex justify-between border-gray-200 border-b dark:border-gray-700 pb-3">
            <dl>
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Profit</dt>
                <dd class="leading-none text-3xl font-bold text-gray-900 dark:text-white">Rp.5,405</dd>
            </dl>
            <div>
                <span
                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13V1m0 0L1 5m4-4 4 4" />
                    </svg>
                    Profit rate 23.5%
                </span>
            </div>
        </div>

        <div class="grid grid-cols-2 py-3">
            <dl>
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Income</dt>
                <dd class="leading-none text-xl font-bold text-green-500 dark:text-green-400">Rp.23,635</dd>
            </dl>
            <dl>
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Expense</dt>
                <dd class="leading-none text-xl font-bold text-red-600 dark:text-red-500">Rp.-18,230</dd>
            </dl>
        </div>

        <div id="bar-chart-kedua"></div>
        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
            <div class="flex justify-between items-center pt-5">
                <!-- Button -->
                <button id="dropdownDefaultButton2" data-dropdown-toggle="lastDaysdropdown"
                    data-dropdown-placement="bottom"
                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                    type="button">
                    Last 6 months
                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="lastDaysdropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                7 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                30 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                90 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                6 months</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                year</a>
                        </li>
                    </ul>
                </div>
                <a href="#"
                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                    Revenue Report
                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
