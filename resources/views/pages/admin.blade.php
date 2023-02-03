@extends('layout')

@section('content')
    {{-- breadcrumb --}}
    <nav class="flex bg-white mb-4 text-blue-700 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/home" class="text-sm text-blue-700 hover:text-gray-900 inline-flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="mr-2 bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    Admin
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    {{-- <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium dark:text-gray-500">Admin</span> --}}
                </div>
            </li>
        </ol>
    </nav>
    <div class="flex items-center w-screen min-h-screen mt-14" style="font-family: 'Muli', sans-serif;">
        <div class="container ml-auto mr-auto -mt-96 flex flex-wrap items-start">
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white shadow-xl rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <a href="admin/kelolabuku">
                        <figure class="-mb-1">
                            <img src="buku.jpg" alt="" class="h-64 ml-auto mr-auto" />
                        </figure>
                        <div class="rounded-lg p-4 bg-blue-300 flex flex-col">
                            <div>
                                <h5 class="text-white text-2xl font-bold leading-none">
                                    Data Buku
                                </h5>
                                <span class="text-xs text-white leading-none">Kelola data buku anda untuk Create,
                                    Edit,</span>
                                <span class="text-xs text-white leading-none">dan Delete pada data</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white shadow-xl rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <a href="admin/kelolapenerbit">
                        <figure class="-mb-1">
                            <img src="penerbit.jpg" alt="" class="h-64 ml-auto mr-auto" />
                        </figure>
                        <div class="rounded-lg p-4 bg-orange-200 flex flex-col">
                            <div>
                                <h5 class="text-white text-2xl font-bold leading-none">
                                    Data Penerbit
                                </h5>
                                <span class="text-xs text-white leading-none">Kelola data penerbit anda untuk Create,
                                    Edit,</span>
                                <span class="text-xs text-white leading-none">dan Delete pada data</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
