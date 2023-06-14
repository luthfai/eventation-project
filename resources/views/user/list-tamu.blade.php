<x-layouts.user>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }} <span class="text-sm text-gray-500">({{ Auth::user()->name }})</span>
            </h2>
        </div>
    </x-slot>


    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Tamu List') }}
            </h2>
            {{-- <x-button href="{{ route('user.tamu.create') }}" variant="warning" class="justify-center max-w-xs gap-2">
                <span class="w-6 h-6" aria-hidden="true">+</span>
                <span>Create Tamu</span>
            </x-button> --}}
        </div>
        {{-- list all of tamu with crud --}}
        <table class="table-auto w-full mt-4 overflow-auto bg-white border rounded-md dark:bg-dark-eval-1">
            <thead class="bg-gray-50 dark:bg-dark-eval-2">
                <tr class="text-xs font-medium tracking-wider text-left text-gray-500 uppercase border-b dark:border-dark-eval-2">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Role</th>
                    <th class="px-4 py-3 w-1/5">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-dark-eval-2">
                @dd($guests->
            </tbody>
        </table>
    </div>


</x-layouts.user>
