<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">

@include('components\head')

<body>
    <div class="fixed z-50 shadow-xl border">
        @include('components\sidebar')
    </div>
    <div class="fixed h-screen w-full pl-64">
        {{-- @include('components\navbar') --}}
        <div class="w-full h-full p-4 m-8 overflow-y-auto">
            <div class="flex animate-fade">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>
