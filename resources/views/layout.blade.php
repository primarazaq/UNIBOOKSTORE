<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">

@include('components\head')

<body>
    <div class="fixed z-50 shadow-xl border">
        @include('components\sidebar')
    </div>
    <div class="fixed h-screen w-screen pl-64">
        @include('components\toast')
        <div class="w-full h-full p-4 m-8 overflow-y-auto">
            <div class="w-auto animate-fade mr-10">
                <main class="w-auto">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>
