@extends('layout')

@section('content')
{{-- breadcrumb --}}
<nav class="flex bg-white mb-4 text-blue-700 py-3 px-5 rounded-lg dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
      <li class="inline-flex items-center">
        <a href="/admin" class="text-sm text-blue-700 hover:text-gray-900 inline-flex items-center dark:text-gray-400 dark:hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2 bi bi-person-fill" viewBox="0 0 16 16"> <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> </svg>
          Admin
        </a>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium dark:text-gray-500">Kelola Buku</span>
        </div>
      </li>
    </ol>
  </nav>
    <div class=" text-gray-900 tracking-wider">
        <div class="flex justify-between">
            <div class="mb-3 ml-3 font-extrabold">
                <h3>Tabel Buku</h3>
            </div>
            @include('components.addBuku')
        </div>
        <!--Container-->
        <div class="container w-full xl:w-auto mx-auto px-2">

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
                            {{-- <th data-priority="6">TANGGAL MULAI</th> --}}
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
                                <td class="py-4 px-6 text-left" style="width:22%">
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
@endsection
