@extends('layout')

@section('content')

    <div class=" text-gray-900 tracking-wider">
        <div class="mb-3 ml-3 font-extrabold">
            <h3>Tabel Buku</h3>
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
