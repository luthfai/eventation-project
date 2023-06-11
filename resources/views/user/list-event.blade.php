<x-layouts.user>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }} <span class="text-sm text-gray-500">({{ Auth::user()->name }})</span>
            </h2>
        </div>
    </x-slot>
    <div>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight dark:text-white text-gray-900">Daftar Acara</h2>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($events as $event)
                <div class="group relative">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src='/image/undangan/{{ $event->image }}'
                            alt="{{ $event->name }}"
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="/user/dashboard/event/view/{{ $event->slug }}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $event->title }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">{{ $event->event_date }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- More products... -->
            </div>
        </div>
    </div>

</x-layouts.user>
