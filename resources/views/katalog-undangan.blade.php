@extends('layouts.template')
@section('title', 'Katalog Undangan')
@section('content')

    <x-header></x-header>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

            <!-- Undangan Pertama -->
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Undangan Basic</h2>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @for($i = 0; $i < 1; $i++)
                <div class="group relative">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiDn7yw7IIJ2_Vc5IPsS8kmcVuwCgARY-KAd01iFnTmnMvlNzxSBgirbKePd1SPv3wP9zGGmCnjlLv3hkBAvzbqTH0lYpERae7I9pE9sXS3H-flMCU0UdDC4GFfOHm55EpYEB0Y_aF0shjtcYyLfK7c6ZKG0vuBadG4s7QNSpELa0IuNUwO5bgjfkDN/s1680/product-page-01-related-product-08.jpg"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="undangan/1">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Undangan Basic 1
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">White</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$10</p>
                    </div>
                </div>

                <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgO21o5bhYKFnvNnXKuzrxW2Jr5GH6ACKFa7kt-OiUpMCnshnBHhYOVsu9ZD3XlqP_O5-CBYy-FScDHpY8RMFYAWHNwy3Kgads26JX9T-UWYULNeRgB8qOLw7u0vpox4277CR_Jlaywl4-03Myi1wPXmRnqNFMlnlVLKqvlY42I6xgm5Uy97sBb3_hx/s1600/canva-wedding-invitation-qKHSAJAr-GI.jpgg"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="undangan/2">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Undangan Basic 2
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">White</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$10</p>
                    </div>
                </div>

                <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjaG7bdG7OwalujjP3l9HbtVokpOn5L0dzAYpv1jJjNsq1VeKffPMlMI__C0zm3I4_Wx3kVbafSwv31BuLZd9ORCW_DOeumnVatMPTV6hiui4js2TrlIlLcr5zNsmULlDumEcY4fq_IbH2YRfnfeqR3aPTUfeLPxsHIQyn4qv-LzQLlF5tNu6J9uuB8/s1600/canva-white-purple-modern-wedding-invitation-Ukibc0GJRW8.jpg"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="undangan/2">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">White</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$10</p>
                    </div>
                </div>

                

            
                
                @endfor
                <!-- More products... -->
            </div>

            

        </div>

        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    
                <!-- Undangan Kedua -->
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Undangan Reguler</h2>
    
                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @for($i = 0; $i < 1; $i++)
                    <div class="group relative">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgvoCG0aOu5M4ei2J5FBI0iLp5YqjtEJnuqGRtEgx2vBuh2W6wRJzBNL7OoJg0Hb5HmQiePi0my8Ces-udLlIRpL8ATOnyXzQuYIMRtxoVvdpGldgYiI7Q5Rs3ccUiVdptcf6vxCAY8IvPvWxj_XqNbeXHwbyPITR60dICNHt8_B_JqbMEe80SCkpin/s1680/product-page-01-related-product-02.jpg"
                                alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="undangan/1">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Black</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                    </div>
    
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="undangan/2">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">White</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$40</p>
                        </div>
                    </div>
    
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="undangan/2">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">White</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$40</p>
                        </div>
                    </div>
    
                    
    
                
                    
                    @endfor
                    <!-- More products... -->
                </div>
    
                
    
            </div>

            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        
                    <!-- Undangan Ketiga -->
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Undangan Basic</h2>
        
                    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        @for($i = 0; $i < 1; $i++)
                        <div class="group relative">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="undangan/1">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>
        
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="undangan/2">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">White</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$40</p>
                            </div>
                        </div>
        
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="undangan/2">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">White</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$40</p>
                            </div>
                        </div>
        
                        
        
                    
                        
                        @endfor
                        <!-- More products... -->
                    </div>
        
                    
        
                </div>

    </div>
