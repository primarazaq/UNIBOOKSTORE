<style>
    .active {
        color: white;
        background-color: blue;
        opacity: 80%;
        fill: white;
    }
</style>

<div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white shadow-lg">
    <a href="/home">
        <h2 class="text-2xl font-semibold text-center text-blue-800">UNIBOOKSTORE</h2>
    </a>
    <div class="flex flex-col justify-between mt-6">
        <aside>
            <ul>
                <li>
                    <a href="/home"
                        class="{{ Request::is('home') ? 'active hover:bg-blue-700' : '' }} hover:transition ease-in-out duration-300 flex items-center px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="mx-4 font-medium">Home</span>
                    </a>
                </li>

                <li>
                    <a href="/admin"
                        class="{{ Request::is('admin*') ? 'active hover:bg-blue-700' : '' }} hover:transition ease-in-out duration-300 flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>

                        <span class="mx-4 font-medium">Admin</span>
                    </a>
                </li>

                <li>
                    <a href="/pengadaan"
                        class="{{ Request::is('pengadaan') ? 'active hover:bg-blue-700' : '' }} hover:transition ease-in-out duration-300 flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                        </svg>


                        <span class="mx-4 font-medium">Pengadaan</span>
                    </a>
                </li>
            </ul>

        </aside>

    </div>
</div>
