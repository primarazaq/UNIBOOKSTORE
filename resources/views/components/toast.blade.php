<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
<script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>

<!-- page -->



@if (session()->has('success'))
    <main x-data="app"class="animate-fade">
        <!-- toast -->
        <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms
            class="fixed transition top-4 right-4 z-50 rounded-md bg-green-500 px-4 py-2 text-white hover:bg-green-600">
            <div class="flex items-center space-x-2">
                <span class="text-3xl"><i class="bx bx-check"></i></span>
                <p class="">{{ session('success') }}</p>
            </div>
        </button>
    </main>
@elseif (session()->has('failed'))
    <main x-data="app" class="animate-toast">
        <!-- toast -->
        <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms
            class="fixed transition top-4 right-4 z-50 rounded-md bg-red-500 px-4 py-2 text-white hover:bg-red-600">
            <div class="flex items-center space-x-2">
                <span class="text-3xl"><i class="bx bx-x"></i></span>
                <p class="">{{ session('failed') }}</p>
            </div>
        </button>
    </main>
@endif

<script>
    let timer;

    document.addEventListener("alpine:init", () => {
        Alpine.data("app", () => ({
            open: true,

            openToast() {
                if (this.open) return;
                this.open = true;

                // reset time to 0 second
                clearTimeout(timer);

                // auto close toast after 5 seconds
                timer = setTimeout(() => {
                    this.open = false;
                }, 5000);
            },

            closeToast() {
                this.open = false;
            },
        }));
    });
</script>
