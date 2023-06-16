@extends('layouts.template')
@section('title', 'Pembayaran')
@section('content')

    <x-header></x-header>
    <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
        <div class="px-4 pt-8">
            <p class="text-xl font-medium">Order Summary</p>
            <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
            <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                    <img class="m-2 h-24 w-28 rounded-md border object-cover object-center"
                        src='/image/undangan/{{ $undangan->image }}' alt="{{ $undangan->name }}" />
                    <div class="flex w-full flex-col px-4 py-4">
                        <span class="font-semibold">{{ $undangan->name }}</span>
                        <span class="float-right text-gray-400">{{ $undangan->kategori }} - {{ $undangan->paket }}</span>
                        <p class="text-lg font-bold">Rp.{{ number_format($undangan->price, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>

            <p class="mt-8 text-lg font-medium">Payment Methods VA</p>
            <form class="mt-5 flex gap-6" action="{{ route('buy') }}" method="POST">
                @csrf
                <div class="relative w-auto">
                    <input class="peer hidden" id="radio_1" type="radio" name="bank" value="bni" />
                    <span
                        class="peer-checked:border-gray-700 absolute left-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                    <label
                        class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                        for="radio_1">
                        <img class="w-14 h-14 ml-8 object-contain"
                            src="https://dashboard.laznasdewandakwah.or.id/storage/galleries/2022/3/1646109122bni%20va%20kotak.png">
                    </label>
                </div>
                <div class="relative w-auto">
                    <input class="peer hidden" id="radio_2" type="radio" name="bank" value="bca" />
                    <span
                        class="peer-checked:border-gray-700 absolute left-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                    <label
                        class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                        for="radio_2">
                        <img class="w-14 h-14 ml-8 object-contain"
                            src="https://dashboard.laznasdewandakwah.or.id/storage/galleries/2022/3/1646109577va%20bca%20kotak..jpg">
                    </label>
                </div>
                <div class="relative w-auto">
                    <input class="peer hidden" id="radio_3" type="radio" name="bank" value="bri" />
                    <span
                        class="peer-checked:border-gray-700 absolute left-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                    <label
                        class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                        for="radio_3">
                        <img class="w-14 h-14 ml-8 object-contain"
                            src="https://1.bp.blogspot.com/-n940AeGgVIQ/YIKuXf0yrsI/AAAAAAAAYbc/ieNLVA5zPo0PSSBskzHYhO1qYeR_vsaDQCLcBGAsYHQ/s632/briva.png">
                    </label>
                </div>
                <div class="relative w-auto">
                    <input class="peer hidden" id="radio_4" type="radio" name="bank" value="mandiri" />
                    <span
                        class="peer-checked:border-gray-700 absolute left-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                    <label
                        class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                        for="radio_4">
                        <img class="w-14 h-14 ml-8 object-contain"
                            src="https://dashboard.laznasdewandakwah.or.id/storage/galleries/2022/3/1646110410mandiri%20va.png">
                    </label>
                </div>
        </div>
        <div class="mt-10 bg-gray-50 px-4 pt-8 pb-10 lg:mt-0">
            <p class="text-xl font-medium">Payment Details</p>
            <p class="text-gray-400">Complete your order by providing your payment details.</p>
            <div class="">
                <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
                <div class="relative">
                    <input type="text" id="email" name="email"
                        class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="your.email@gmail.com" />
                    <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </div>
                </div>
                <label for="card-holder" class="mt-4 mb-2 block text-sm font-medium">Nama</label>
                <div class="relative">
                    <input type="text" id="nama" name="nama"
                        class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm uppercase shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Your full name here" />
                    <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                        </svg>
                    </div>
                </div>
                <!-- Total -->
                <div class="mt-6 border-t border-b py-2">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Subtotal</p>
                        <p class="font-semibold text-gray-900">Rp. {{ number_format($undangan->price, 0, ',', '.') }},00
                        </p>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-between">
                    <p class="text-sm font-medium text-gray-900">Total</p>
                    <p class="text-2xl font-semibold text-gray-900">Rp.
                        {{ number_format($undangan->price, 0, ',', '.') }},00</p>
                </div>
            </div>
            <input type="hidden" name="id_undangan" value="{{ $undangan->id }}">
            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
            {{-- get the radio value --}}
            <button type="submit"
                class="mt-6 w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold p-3 rounded-md">Pay
                Now</button>
            </form>
        </div>
    </div>

    <x-foot></x-foot>
    <!-- a little JS for the mobile nav button -->
    <script>
        if (document.getElementById('nav-mobile-btn')) {
            document.getElementById('nav-mobile-btn').addEventListener('click', function() {
                if (this.classList.contains('close')) {
                    document.getElementById('nav').classList.add('hidden');
                    this.classList.remove('close');
                } else {
                    document.getElementById('nav').classList.remove('hidden');
                    this.classList.add('close');
                }
            });
        }
    </script>

@endsection
