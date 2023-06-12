@extends('layouts.template')
@section('title', 'Home')
@section('content')
    <x-header></x-header>
    
    <!-- BEGIN HERO SECTION -->
    <div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
        <div
            class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
            <div
                class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8">Buat Website
                    Undangan Digital</h1>
                <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20">Undangan digital diera yang
                    serba digital</p>
                <a href="/templates"
                    class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-red-600 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0 transition-all transition duration-100 duration-300 bg-red-700 rounded shadow-md fold-bold lg:bg-red-700 lg:shadow-none hover:shadow-xl">Buat
                    Undangan</a>
                <!-- Integrates with section -->
                <div class="flex-col hidden mt-12 sm:flex lg:mt-24">
                    <p class="mb-4 text-sm font-medium tracking-widest text-gray-500 uppercase">Supported By</p>
                    <div class="flex">
                        <h1
                            class="mr-4 text-l cursor-default font-playfair font-bold leading-tight duration-100 transition-colors text-gray-300 hover:text-gray-400">
                            Kelompok 1</h1>
                    </div>
                </div>
                <svg class="absolute left-0 max-w-md mt-24 -ml-64 left-svg" viewBox="0 0 423 423"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <linearGradient x1="100%" y1="0%" x2="4.48%" y2="0%" id="linearGradient-1">
                            <stop stop-color="red" offset="0%" />
                            <stop stop-color="red" offset="100%" />
                        </linearGradient>
                        <filter x="-9.3%" y="-6.7%" width="118.7%" height="118.7%" filterUnits="objectBoundingBox"
                            id="filter-3">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" in="shadowBlurOuter1" />
                        </filter>
                        <rect id="path-2" x="63" y="504" width="200" height="300"
                            rx="40" />
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                        opacity=".99">
                        <g id="Desktop-HD" transform="translate(-0 -531)">
                            <g id="Hero" transform="translate(43 83)">
                                <g id="Rectangle-6" transform="rotate(21 213 654)">
                                    <use fill="#000" filter="url(#filter-3)" xlink:href="#path-2" />
                                    <use fill="url(#linearGradient-1)" xlink:href="#path-2" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="relative z-30 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
                <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                    <img src="{{ asset('image/mockup-mobile.png') }}" alt="mockup mobile"
                        class="w-1/2 h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-0">
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->

    <!-- BEGIN FEATURES SECTION -->
    <div id="features" class="relative w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <h2 class="my-5 text-base font-medium tracking-tight text-red-500 uppercase">Our Features</h2>
            <h3
                class="max-w-2xl px-5 mt-2 text-3xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
                Built and Designed with you in Mind</h3>
            <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 377 340"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M342.8 3.7c24.7 14 18.1 75 22.1 124s18.6 85.8 8.7 114.2c-9.9 28.4-44.4 48.3-76.4 62.4-32 14.1-61.6 22.4-95.9 28.9-34.3 6.5-73.3 11.1-95.5-6.2-22.2-17.2-27.6-56.5-47.2-96C38.9 191.4 5 151.5.9 108.2-3.1 64.8 22.7 18 61.8 8.7c39.2-9.2 91.7 19 146 16.6 54.2-2.4 110.3-35.6 135-21.6z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 1 -->
                        <h4 class="relative mt-6 text-lg font-bold">All Events</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Implementasikan undangan digital untuk
                            semua keperluan acara anda mulai dari pernikahan hingga ulang tahun</p>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 358 372"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 2 -->

                        <h4 class="relative mt-6 text-lg font-bold">Easy for Use</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Dibuat dan dirancang untuk kemudahan
                            tuan rumah dalam pembuatan undangan digital</p>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 378 410"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M305.9 14.4c23.8 24.6 16.3 84.9 26.6 135.1 10.4 50.2 38.6 90.3 43.7 137.8 5.1 47.5-12.8 102.4-50.7 117.4-37.9 15.1-95.7-9.8-151.7-12.2-56.1-2.5-110.3 17.6-130-3.4-19.7-20.9-4.7-82.9-11.5-131.2C25.5 209.5-3 174.7 1.2 147c4.2-27.7 41-48.3 75-69.6C110.1 56.1 141 34.1 184 17.5c43.1-16.6 98.1-27.7 121.9-3.1z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 3 -->

                        <h4 class="relative mt-6 text-lg font-bold">Send via WhatsApp</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Kirim undangan anda dengan aplikasi
                            chat yang umum dan sudah banyak digunakan oleh banyak orang.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- TUTORIALS -->
    <div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-50">
        <div
            class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
            <div
                class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                <h1 class="relative mb-2 text-2xl font-black leading-tight text-red-700 sm:text-3xl xl:mb-5">Cara Membuat Undangan Kamu</h1>
               

                

        

                <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl mb-4 mx-auto text-center">
                    <blockquote
                        class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 mt-16 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                        <div class="flex flex-col pr-7">
                            <div class="relative pl-10">
                                   
                                <p class="mt-2 text-base text-gray-600">
                                1. Registrasi untuk membuat akun undangan kamu </p>
                                <p class="mt-2 text-base text-gray-600">
                                2. Isi Info Acara & Profile dan juga upload foto/gallery. Customize undangan kamu.</p>
                                <p class="mt-2 text-base text-gray-600">
                                3. Pilih Preset / Template. </p>
                                <p class="mt-2 text-base text-gray-600">
                                4. Aktifkan/lakukan pembayaran, dan undangan kamu siap untuk di sebarkan.</p>
                            </div>
                            <p class="mt-1 text-sm leading-2 text-gray-500 truncate"></p>
                        </div>
                        <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                            src="https://global-uploads.webflow.com/6100d0111a4ed76bc1b9fd54/6343bd802e9da71be2e29c20_metode%20user%20research%201.jpg"
                            alt="">

                            
                    </blockquote>
                </div>

                {{-- <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl mb-4 mx-auto text-center">

                
                    <blockquote
                        class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 mt-16 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                        <div class="flex flex-col pr-7">
                            <div class="relative pl-10">
                                   
                                <p class="mt-2 text-base text-gray-600">
                                3. Pilih Preset / Template. </p>
                                <p class="mt-2 text-base text-gray-600">
                                4. Aktifkan/lakukan pembayaran, dan undangan kamu siap untuk di sebarkan.</p>
                            </div>

                            <p class="mt-1 text-sm leading-2 text-gray-500 truncate"></p>
                        </div>
                        <img class="flex-shrink-0 object-cover w-24 h-24 mb-5 bg-gray-300 rounded-full md:mb-0"
                            src="https://www.playbookux.com/wp-content/uploads/2020/05/2901_main-image-scaled.jpg"
                            alt="">

                            
                    </blockquote>
                </div> --}}
            </div>
            <div class="relative z-30 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
                <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                    <img src="{{ asset('image/invite.png') }}" alt="mockup mobile"
                        class="w-1/2 h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-0">
                </div>
            </div>
        </div>
    </div>
    <!-- TUTORIALS END -->

    <!-- FOOTER -->
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
