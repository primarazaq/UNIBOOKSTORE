<!-- component -->

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<div x-data="{ addPenerbit: false }">
    <div class="inline-flex mr-16">
        <button @click="addPenerbit =!addPenerbit"
            class="bg-blue-700 w-48 -mr-16 p-1 justify-self-end rounded-full hover:bg-blue-500 text-white">
            Tambah Penerbit
        </button>
    </div>

    <div x-show="addPenerbit"
        class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center"
        aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div
            class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div x-cloak @click="addPenerbit = false" x-show="addPenerbit"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-60" aria-hidden="true"></div>

            <div x-cloak x-show="addPenerbit" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                <div class="flex items-center justify-between space-x-4">
                    <div class="bg-blue-700 w-48 p-1 rounded-full text-white mb-3 mr-4 flex">
                        <div class="font-extrabold">
                            <p> + Tambah Penerbit</p>
                        </div>
                    </div>
                    <button @click="addPenerbit = false"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-mainclr rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form method="post" action="/admin/aturbuku">
                    @csrf
                    <div class="p-5">
                        <div>
                            <label for="id_penerbit"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">ID
                                Penerbit</label>
                            <input type="text" id="id_penerbit" name="id_penerbit"
                                class="@error('id_penerbit') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr "
                                autofocus required>
                            @error('id_penerbit')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="nama"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="@error('nama') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr "
                                autofocus required>
                            @error('nama')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="alamat"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                            <input type="text" id="alamat" name="alamat"
                                class="@error('alamat') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr "
                                autofocus required>
                            @error('alamat')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="kota"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Kota</label>
                            <input type="text" id="kota" name="kota"
                                class="@error('kota') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr "
                                autofocus required>
                            @error('kota')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="telepon"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Telepon</label>
                            <input type="text" id="telepon" name="telepon"
                                class="@error('telepon') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr"
                                required>
                            @error('telepon')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200  dark:border-gray-600">
                        <button type="submit"
                            class="text-white mx-auto bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-blue-500">Create</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
