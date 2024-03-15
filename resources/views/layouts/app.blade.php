<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-100 text-gray-950 scroll-smooth">
    <header
        class="bg-gray-50 flex items-center justify-between box-border px-4 border-b border-gray-300 h-10 md:h-16 fixed top-0 left-0 right-0 z-50">
        <p>Test</p>
        <nav class="flex items-center justify-around gap-5">
            @guest
                <x-nav-link :active="request()->routeIs('login')" href="{{ route('login') }}">Login</x-nav-link>
                <x-nav-link :active="request()->routeIs('register')" href="{{ route('register') }}">Register</x-nav-link>
            @endguest
            @auth
                <x-nav-link :active="request()->routeIs('skill')" href="{{ route('skills') }}">Skills</x-nav-link>
                <a href="{{ route('user') }}"
                    class="hover:underline hover:fill-gray-50 hover:text-gray-50 hover:bg-gray-950 hover:outline-gray-200 outline-transparent outline outline-4 fill-gray-950 flex items-center py-1 px-3 border border-gray-300 rounded-md">
                    <svg class="max-w-4 max-h-4">
                        <use xlink:href="{{ asset('') }}/sprite.svg#user"></use>
                    </svg>
                    <p class="ml-2">User</p>
                </a>
                <livewire:auth.logout />
            @endauth
        </nav>
    </header>

    <main class="grid gap-y-4 md:gap-y-8 p-4 box-border place-items-center min-h-[100vh] mt-14 md:mt20">
        {{ $slot }}
    </main>

    <footer class="bg-gray-50 box-border py-3 px-4 border-t border-gray-300">
        <p class="text-xs text-center">&copy; Ilham Rahmat Akbar 2024 . All rights reserved</p>
    </footer>
    @livewireScripts
</body>

</html>
