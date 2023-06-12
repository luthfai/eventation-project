<x-sidebar.overlay />

<aside class="fixed inset-y-0 z-20 flex flex-col py-4 space-y-6 bg-white shadow-lg dark:bg-dark-eval-1"
    :class="{
        'translate-x-0 w-64': isSidebarOpen || isSidebarHovered,
        '-translate-x-full w-64 md:w-16 md:translate-x-0': !isSidebarOpen && !isSidebarHovered,
    }"
    style="transition-property: width, transform; transition-duration: 150ms;" x-on:mouseenter="handleSidebarHover(true)"
    x-on:mouseleave="handleSidebarHover(false)">
    <x-sidebar.header />

    {{-- sidebar content --}}
    <x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

        <x-sidebar.link title="Dashboard" href="/dashboard" :isActive="request()->routeIs('super.dash')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
        <x-sidebar.link title="Admin list" href="/super/dashboard/admin" :isActive="request()->routeIs('super.admin')">
            <x-slot name="icon">
                <x-icons.menu-fold-right class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
        <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">

    </x-perfect-scrollbar>


    <x-sidebar.footer />
</aside>
