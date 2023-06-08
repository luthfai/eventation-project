@extends('layouts.template')
@section('title', 'Katalog Undangan')
@section('content')

    <x-header></x-header>
   
    <div id="pembayaran"
      
          
                <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
                <h2
                        class="text-4xl font-bold leading-8 tracking-tight text-gray-500 sm:text-3xl sm:leading-none md:text-2xl lg:text-3xl xl:text-2xl">
                        YANG HARUS DIBAYAR</h2>
                    <h2
                        class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-2xl lg:text-5xl xl:text-2xl">
                        Rp456.00,00</h2>
                   

                </div>
                <div class="flex flex-col items-center justify-center max-w-2xl py-8 mx-auto xl:flex-row xl:max-w-full">
                    <div class="w-full xl:w-1/2 xl:pr-8">
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    
                                </div>

                                <h3 class="pl-12 mt-3 text-base justify-center font-medium leading-5 text-gray-800 truncate">Transfer Bank <h3>
                                        <img src="https://manocodes.com/wp-content/uploads/2020/07/Semua-Logo-Pembayaran-Transparant.png">
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                          
                                
                                </div>
                                
                         
                    </div>
                </div>


            </div>
        </div>
    </div>

        </div>
    </div>

    <div class="flex flex-col items-center justify-center max-w-2xl py-8 mx-auto xl:flex-row xl:max-w-full">
                    <div class="w-full xl:w-1/2 xl:pr-8">
                        <blockquote
                            class="flex flex-col-reverse items-center justify-between w-full col-span-1 p-6 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left hover:bg-white hover:shadow ease">
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    
                                </div>

                                <h3 class="pl-12 mt-3 text-base justify-center font-medium leading-5 text-gray-800 truncate">E-Wallet/QRIZ <h3>
                                        <img src="https://utbk.masukkampus.com/img/pembayaran_logo.png">
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                          
                                
                                </div>
                                
                         
                    </div>
                </div>


            </div>
        </div>
    </div>

        </div>
    </div>

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
