@extends('layouts.template')
@section('content')
<x-layouts.user>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }} <span class="text-sm text-gray-500">({{ Auth::user()->name }})</span>
            </h2>
            {{-- <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button> --}}
        </div>
    </x-slot>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($undangans as $undangan)
        <div class="group relative">
            <div
                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src='{{ $undangan->image }}'
                    alt="{{ $undangan->image_alt }}"
                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="{{ route('undangan.detail', $undangan->id) }}">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{ $undangan->name }}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $undangan->description }}</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{ $undangan->price }}</p>
            </div>
        </div>
        @endforeach
        <!-- More products... -->
    </div>
</x-layouts.user>
