@extends('layout')

@section('content')
{{-- breadcrumb --}}
<nav class="flex bg-white mb-4 text-blue-700 py-3 px-5 rounded-lg dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
      <li class="inline-flex items-center">
        <a href="/pengadaan" class="text-sm text-blue-700 hover:text-gray-900 inline-flex items-center dark:text-gray-400 dark:hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2 bi bi-book" viewBox="0 0 16 16"> <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/> </svg>

            Pengadaan
        </a>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          {{-- <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium dark:text-gray-500">Admin</span> --}}
        </div>
      </li>
    </ol>
  </nav>
  <div class=" text-gray-900">
    <div class="flex justify-between">
        <div class="mb-3 ml-3 font-extrabold">
            <h3>Laporan Buku yang perlu segera dibeli</h3>
        </div>
    </div>
    <!--Container-->
    <div class="container w-full xl:w-auto mx-auto px-2">

        <!--Card-->
        <div id='recipients' class="p-8 lg:mt-0 rounded-lg shadow-lg bg-white border-2">
            <table id="TBtaskComplt" class="stripe hover text-center w-full "
                style="padding-top: 1em;  padding-bottom: 1em; width: 100%; ">
                <thead>
                    <tr>
                        <th data-priority="1">No</th>
                        <th data-priority="2">Judul Buku</th>
                        <th data-priority="3">Nama Penerbit</th>
                        <th data-priority="4">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listbuku as $data)
                        <tr class="bg-white border-b ">
                            <th scope="row" class="py-4 px-6">
                                {{ $loop->iteration }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $data->nama_buku }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $data->penerbit->nama }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $data->stok }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>  
@endsection