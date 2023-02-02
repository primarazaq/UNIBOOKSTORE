@extends('layout')

@section('content')
<div class="flex items-center w-screen min-h-screen -mt-16" style="font-family: 'Muli', sans-serif;">
    <div class="container ml-auto mr-auto -mt-96 flex flex-wrap items-start">
      <div class="w-full pl-5 lg:pl-2">
        <h1 class="text-lg text-gray-700 font-extrabold">
          Kelola Admin
        </h1>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
        <div class="bg-white shadow-xl rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
          <div class="rounded-lg p-4 bg-blue-700 flex flex-col">
            <div>
              <h5 class="text-white text-2xl font-bold leading-none">
                Data Buku
              </h5>
              <span class="text-xs text-white leading-none">Kelola data buku anda untuk Create, Edit,</span>
              <span class="text-xs text-white leading-none">dan Delete pada data</span>
            </div>
            <div class="flex items-center">
              <a href="admin/kelolabuku"><button href="javascript:;" class="rounded-full bg-white text-blue-700 hover:bg-blue-700 hover:text-white hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </a>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
        <div class="bg-white shadow-xl rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
          <div class="rounded-lg p-4 bg-blue-400 flex flex-col">
            <div>
              <h5 class="text-white text-2xl font-bold leading-none">
                Data Penerbit
              </h5>
              <span class="text-xs text-white leading-none">Kelola data penerbit anda untuk Create, Edit,</span>
              <span class="text-xs text-white leading-none">dan Delete pada data</span>
            </div>
            <div class="flex items-center">
              <a href="admin/kelolapenerbit"><button href="javascript:;" class="rounded-full bg-white text-blue-400 hover:bg-blue-400 hover:text-white hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Datatables -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script>
      $(document).ready(function() {

          var table = $('#TBtaskComplt').DataTable({
                  responsive: true
              })
              .columns.adjust()
              .responsive.recalc();
      });
  </script>   
@endsection