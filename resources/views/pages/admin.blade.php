@extends('layout')

@section('content')
    {{-- breadcrumb --}}
    <nav class="flex bg-white mb-4 text-blue-700 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/home" class="text-sm text-blue-700 hover:text-gray-900 inline-flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
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
    <div class="flex flex-col">


        <div class=" text-gray-900 mb-5">
            <div class="flex justify-between">
                <div class="mb-3 ml-3 font-extrabold">
                    <h3>Tabel Buku</h3>
                </div>
                @include('components.addBuku')
            </div>
            <!--Container-->
            <div class="container w-fit xl:w-auto mx-auto px-2">

                <!--Card-->
                <div id='recipients' class="p-8 lg:mt-0 rounded-lg shadow-lg bg-white border-2">
                    <table id="TBtaskComplt" class="stripe hover text-center w-full "
                        style="padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="2">ID Buku</th>
                                <th data-priority="3">Kategori</th>
                                <th data-priority="4">Nama Buku</th>
                                <th data-priority="5">Harga</th>
                                <th data-priority="6">Stok</th>
                                <th data-priority="7">Penerbit</th>
                                <th data-priority="8">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listbuku as $data)
                                <tr class="bg-white border-b ">

                                    <th scope="row" class="py-4 px-6">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $data->id_buku }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $data->kategori }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $data->nama_buku }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $data->harga }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $data->stok }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $data->penerbit->nama }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex mx-auto justify-center">
                                            @include('components.editBuku')
                                            @include('components.delBuku')
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--/Card-->
            </div>
        </div>
        <hr>
        <div class=" text-gray-900 mt-5">
            <div class="flex justify-between">
                <div class="mb-3 ml-3 font-extrabold">
                    <h3>Tabel Penerbit</h3>
                </div>
                @include('components.addPenerbit')
            </div>
            <!--Container-->
            <div class="container w-full xl:w-auto mx-auto px-2">

                <!--Card-->
                <div id='recipients' class="p-8 lg:mt-0 rounded-lg shadow-lg bg-white border-2">
                    <table id="TBtaskComplt2" class="stripe hover text-center w-full "
                        style="padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="2">ID Penerbit</th>
                                <th data-priority="3">Nama</th>
                                <th data-priority="4">Alamat</th>
                                <th data-priority="5">Kota</th>
                                <th data-priority="6">Telepon</th>
                                <th data-priority="7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listpenerbit as $data)
                                <tr class="bg-white border-b ">

                                    <th scope="row" class="py-4 px-6">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $data->id_penerbit }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $data->nama }}
                                    </td>
                                    <td class="py-4 px-6 text-left" style="width:22%">
                                        {{ $data->alamat }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $data->kota }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $data->telepon }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex mx-auto justify-center">
                                            @include('components.editPenerbit')
                                            @include('components.delPenerbit')
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="flex items-center w-screen min-h-screen mt-14" style="font-family: 'Muli', sans-serif;">
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
    </div> --}}
@endsection
