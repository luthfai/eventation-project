@extends('layouts.template')

@section('title', 'Undangan 1')

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
           <h1>ini adalah undangan 1</h1>
           {{-- compact('event', 'guest')); --}}
           {{-- dd guest and events --}}
           @dd($event, $guest)
        </div>
    </div>

