<style>
    .active{
       color: white;
       background-color: blue;
       opacity: 80%;
       fill: white;
    }
 </style>

<div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white shadow-lg">
    <a href="/home"><h2 class="text-2xl font-semibold text-center text-blue-800">UNIBOOKSTORE</h2></a>
    <div class="flex flex-col justify-between mt-6">
        <aside>
            <ul>
                <li>
                    <a href="/home" class="{{ Request::is('home') ? 'active hover:bg-blue-700' : '' }} hover:transition ease-in-out duration-300 flex items-center px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="mx-4 font-medium">Home</span>
                    </a>
                </li>

                <li>
                    <a href="/admin" class="{{ Request::is('admin*') ? 'active hover:bg-blue-700' : '' }} hover:transition ease-in-out duration-300 flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"> <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> </svg>
                                <span class="mx-4 font-medium">Admin</span>
                    </a>
                </li>

                <li>
                    <a href="/pengadaan" class="{{ Request::is('pengadaan') ? 'active hover:bg-blue-700' : '' }} hover:transition ease-in-out duration-300 flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16"> <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/> </svg>

                        <span class="mx-4 font-medium">Pengadaan</span>
                    </a>
                </li>
            </ul>

        </aside>

    </div>
</div>
