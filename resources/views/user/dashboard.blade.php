<x-layouts.user>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }} <span class="text-sm text-gray-500">({{ Auth::user()->name }})</span>
            </h2>
        </div>
    </x-slot>


    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("Halo ")  }} <b>{{ Auth::user()->name }} </b> {{ __(", Selamat Datang di Dashboard")  }}
    </div>


</x-layouts.user>
