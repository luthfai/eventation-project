    <!-- Header Section -->
    <header class="relative z-50 w-full h-24 shadow-md">
        <div class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                <span class="ml-3 font-playfair tracking-widest text-3xl text-gray-800">Eventation<span
                        class="text-red-700">.</span></span>
            </a>

            <nav id="nav"
                class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-[17px] md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative"
                aria-label="secondary">
                <a href="/"
                    class="ml-0 mr-0  font-playfair font-medium duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-red-600{{ request()->is('/') ? ' text-red-600' : '' }}">Home</a>
                <a href="/templates"
                    class="mr-0 font-medium font-playfair duration-100 md:mr-3 lg:mr-8 transition-color hover:text-red-600{{ request()->is('templates') ? ' text-red-600' : '' }}">Templates</a>
                <a href="/portofolio"
                    class="mr-0 font-medium font-playfair duration-100 md:mr-3 lg:mr-8 transition-color hover:text-red-600{{  request()->is('portofolio') ? ' text-red-600' : ''  }}">Portofolio</a>
                <a href="/about"
                    class="font-medium font-playfair duration-100 transition-color hover:text-red-600{{  request()->is('about') ? ' text-red-600' : ''  }}">About</a>
                @auth
                    <div class="w-full items-center font-medium border-t border-gray-200 md:hidden">
                        <a href="{{ route('dashboard') }}"
                            class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-red-700 fold-bold">Dashboard</a>
                    </div>
                @else
                    <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                        <a href="{{ route('login') }}" class="w-full py-2 font-medium text-center text-pink-500">Login</a>
                        <a href="{{ route('register') }}"
                            class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-red-700 fold-bold">Register</a>
                    </div>
                @endauth
            </nav>
            @auth
                <div aria-label="secondary" x-data="{ open: false }"
                    class="hidden gap-3 sticky top-0 z-99 flex items-center justify-between px-4 py-4 sm:px-6 transition-transform duration-500 bg-white dark:bg-dark-eval-1 md:w-auto md:flex-row md:h-24 lg:text-[17px] md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative"
                    :class="{
                        '-translate-y-full': scrollingDown,
                        'translate-y-0': scrollingUp,
                    }"x-data="{ open: false }"
                    class="sticky top-0 z-10 flex items-center justify-between px-4 py-4 sm:px-6 transition-transform duration-500 bg-white dark:bg-dark-eval-1"
                    :class="{
                        '-translate-y-full': scrollingDown,
                        'translate-y-0': scrollingUp,
                    }">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center p-2 text-sm font-medium text-gray-500 rounded-md transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none focus:ring focus:ring-purple-500 focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark-eval-1 dark:text-gray-400 dark:hover:text-gray-200">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content" class="z-10">
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Dashboard') }}
                            </x-dropdown-link>
                            <!-- Profile -->
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @else
                <div
                    class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                    <a href="{{ route('login') }}"
                        class="relative z-40 px-3 py-2 mr-0 text-sm font-medium text-red-700  md:px-5 lg:red-700  sm:mr-3 md:mt-0">Login</a>
                    <a href="{{ route('register') }}"
                        class="relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-medium leading-none text-white  transition-all transition duration-100 duration-300 bg-red-700 rounded shadow-md fold-bold lg:bg-red-700 lg:white sm:w-full lg:shadow-none hover:shadow-xl">Sign
                        up</a>
                </div>
            @endauth
            <div id="nav-mobile-btn"
                class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>
        </div>
    </header>
    <!-- End Header Section-->
