<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'K UI') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div x-data="mainState" :class="{ dark: isDarkMode }" x-on:resize.window="handleWindowResize" x-cloak>
        <div class="min-h-screen text-gray-900 bg-gray-100 dark:bg-dark-eval-0 dark:text-gray-200">
            <!-- Sidebar -->
            <x-sidebar.overlay />

            <aside class="fixed inset-y-0 z-20 flex flex-col py-4 space-y-6 bg-white shadow-lg dark:bg-dark-eval-1"
                :class="{
                    'translate-x-0 w-64': isSidebarOpen || isSidebarHovered,
                    '-translate-x-full w-64 md:w-16 md:translate-x-0': !isSidebarOpen && !isSidebarHovered,
                }"
                style="transition-property: width, transform; transition-duration: 150ms;"
                x-on:mouseenter="handleSidebarHover(true)" x-on:mouseleave="handleSidebarHover(false)">
                <x-sidebar.header />

                {{-- sidebar content --}}
                <x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

                    <x-sidebar.link title="Dashboard" href="/dashboard" :isActive="request()->routeIs('user.dash')">
                        <x-slot name="icon">
                            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                        </x-slot>
                    </x-sidebar.link>
                    <x-sidebar.link title="Undanganku" href="/user/dashboard/event" :isActive="request()->routeIs('user.event')">
                        <x-slot name="icon">
                            <x-heroicon-o-clipboard-list class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                        </x-slot>
                    </x-sidebar.link>
                    <x-sidebar.link title="Transaksi" href="/user/dashboard/transaksi" :isActive="request()->routeIs('user.transaksi')">
                        <x-slot name="icon">
                            <x-heroicon-o-user-group class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                        </x-slot>
                    </x-sidebar.link>
                    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">



                </x-perfect-scrollbar>


                <x-sidebar.footer />
            </aside>

            <!-- Page Wrapper -->
            <div class="flex flex-col min-h-screen"
                :class="{
                    'lg:ml-64': isSidebarOpen,
                    'md:ml-16': !isSidebarOpen
                }"
                style="transition-property: margin; transition-duration: 150ms;">

                <!-- Navbar -->
                <x-navbar />

                <!-- Page Heading -->
                <header>
                    <div class="p-4 sm:p-6">
                        {{ $header }}
                    </div>
                </header>

                <!-- Page Content -->
                <main class="px-4 sm:px-6 flex-1">
                    {{ $slot }}
                </main>

                <!-- Page Footer -->
                <x-foot />
            </div>
        </div>
    </div>
</body>

</html>
