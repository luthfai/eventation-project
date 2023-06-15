@extends('layouts.template')
@section('title', 'You have no access')
@section('content')

{{-- uh oh seems like you have no access to this page --}}
{{-- center vertically--}}
<div class="flex flex-col justify-center items-center h-screen">
    <div class="flex flex-col justify-center items-center h-screen m-auto">
        <x-heroicon-o-shield-exclamation class="w-24 h-24 text-gray-400" />
        <h1 class="text-2xl text-gray-400">Uh oh!</h1>
        <h1 class="text-2xl text-gray-400">Seems like you have no access to this page</h1>
        <a href="/" class="mt-4 px-4 py-2 text-blue-400 rounded-md">Go back to home</a>
    </div>
@endsection
