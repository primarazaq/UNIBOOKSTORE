@extends('layout')

@section('content')
    <div class=" text-gray-900 tracking-wider">
        <!--Container-->
        <div class="container w-full md:w-4/5 xl:w-11/12 mx-auto px-2">

            <!--Card-->
            <div id='recipients' class="p-8 lg:mt-0 rounded-lg shadow-lg bg-white border-2">
                <table id="TBtaskComplt" class="stripe hover text-center w-full"
                    style="padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">No</th>
                            <th data-priority="2">ID Buku</th>
                            <th data-priority="3">Kategori</th>
                            <th data-priority="4">Nama Buku</th>
                            <th data-priority="5">Harga</th>
                            {{-- <th data-priority="6">TANGGAL MULAI</th> --}}
                            <th data-priority="7">Stok</th>
                            <th data-priority="8">Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listbuku as $data)
                            <tr class="bg-white border-b ">

                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                {{-- <td class="py-4 px-6 text-red-600  font-semibold">
                                {{ $date = date('D, d M Y, H.i A',strtotime($data->t_due_date)) }}
                                
                            </td> --}}
                                <td class="py-4 px-6">
                                    {{ $data->id_buku }}
                                </td>
                                <td class="py-4 px-6">

                                </td>
                                <td class="py-4 px-6 text-left" style="width:22%">

                                </td>
                                <td class="py-4 px-6">

                                </td>
                                {{-- <td class="py-4 px-6">
                                {{ $date = date('D, d M Y, H.i A',strtotime($data->created_at)) }}
                            </td> --}}
                                <td class="py-4 px-6" style="width:12%">

                                </td>
                                <td class="py-4 px-6">
                                    <a href="/admin/home/dashboard/">
                                        <button
                                            class="block w-full md:w-auto rounded-lg text-lg mx-auto text-center font-medium text-mainclr dark:text-teal-500 hover:underline"
                                            type="button">
                                            Detail
                                        </button>
                                    </a>
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
