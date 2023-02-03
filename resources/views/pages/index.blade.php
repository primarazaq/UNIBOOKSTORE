@extends('layout')

@section('content')
    {{-- breadcrumb --}}
    <nav class="flex bg-white mb-4 text-blue-700 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/home" class="text-sm text-blue-700 hover:text-gray-900 inline-flex items-center ">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Home
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
    <div class=" text-gray-900">
        <div class="mb-3 ml-3 font-extrabold">
            <h3>Tabel Buku</h3>
        </div>
        <!--Container-->
        <div class="container w-full mx-auto px-2">

            <!--Card-->
            <div id='recipients' class="p-8 lg:mt-0 rounded-lg shadow-lg bg-white border-2 ">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listbuku as $data)
                            <tr class="bg-white border-b ">

                                <th class="py-4 px-6">
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--/Card-->
        </div>
    </div>
@endsection
