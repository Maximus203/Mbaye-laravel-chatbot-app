{{-- views/livewire/header/navigation.blade.php --}}
<div>
    <nav class="bg-gray-50 text-black/50 dark:bg-dark-primary-600 dark:text-white/50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}"
                class="flex items-center space-x-3 rtl:space-x-reverse  transition-transform transition-opacity duration-300 ease-in-out transform hover:scale-125 opacity-100"
                aria-current="page">
                <span
                    class="material-symbols-outlined
                    {{ Request::routeIs('home')
                        ? ' text-blue-700 md:text-blue-700 hover:text-blue-600 md:dark:text-blue-600'
                        : 'text-gray-700 md:text-gray-700 md:dark:text-gray-200 hover:text-blue-700 dark:hover:text-blue-500 ' }} rounded md:p-0 ">
                    home
                </span>
            </a>

            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">{{ __('Open main menu') }}</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
                    @auth
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="block py-2 px-3 text-gray-900 rounded md:border-0 hover:bg-gray-100 md:hover:bg-gray-50 md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:bg-dark-primary-400 md:dark:hover:text-blue-500  dark:hover:text-white dark:hover:md:bg-dark-primary-600  transition-transform transition-opacity duration-300 ease-in-out transform hover:scale-125 opacity-100">
                                <span
                                    class="material-symbols-outlined {{ Request::routeIs('dashboard')
                                        ? ' text-blue-700 md:text-blue-700 hover:text-blue-600 md:dark:text-blue-600'
                                        : 'text-gray-700 md:text-gray-700 md:dark:text-gray-200 hover:text-blue-700 dark:hover:text-blue-500 ' }} ">
                                    dashboard
                                </span></a>
                        </li>

                        <li>
                            <a wire:click="logout"
                                class="block py-2 px-3 text-gray-900 rounded md:border-0 hover:bg-gray-100 md:hover:bg-gray-50 md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:bg-dark-primary-400 md:dark:hover:text-blue-500  dark:hover:text-white dark:hover:md:bg-dark-primary-600 cursor-pointer transition-transform transition-opacity duration-300 ease-in-out transform hover:scale-125 opacity-100">
                                <span
                                    class="material-symbols-outlined {{ Request::routeIs('dashboard')
                                        ? ' text-red-700 md:text-red-700 hover:text-red-600 md:dark:text-red-600'
                                        : 'text-gray-700 md:text-red-700 md:dark:text-gray-200 hover:text-red-700 dark:hover:text-red-500 ' }} ">
                                    logout
                                </span></a>
                        </li>
                    @endauth
                    @if (Route::has('login'))
                        @guest
                            <li>
                                <a href="{{ route('login') }}"
                                    class="block py-2 px-3 text-gray-900 rounded md:border-0 hover:bg-gray-100 md:hover:bg-gray-50 md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:bg-dark-primary-400 md:dark:hover:text-blue-500  dark:hover:text-white dark:hover:md:bg-dark-primary-600">
                                    {{ __('header.login') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="block py-2 px-3 text-gray-900 rounded md:border-0 hover:bg-gray-100 md:hover:bg-gray-50 md:hover:text-blue-700 md:p-0 dark:text-white  dark:hover:bg-dark-primary-400 md:dark:hover:text-blue-500  dark:hover:text-white dark:hover:md:bg-dark-primary-600">
                                        {{ __('header.register') }}</a>
                                </li>
                            @endif
                        @endguest
                    @endif
                    <li>
                        <a wire:click="toggleDarkMode"
                            class="block py-2 px-3 text-gray-900 rounded md:border-0 hover:bg-gray-100 md:hover:bg-gray-50 md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:bg-dark-primary-400 md:dark:hover:text-blue-500  dark:hover:text-white dark:hover:md:bg-dark-primary-600">
                            @if (session()->has('dark'))
                                <span
                                    class="material-symbols-outlined cursor-pointer transition-transform transition-opacity duration-300 ease-in-out transform hover:scale-125 opacity-100">
                                    toggle_off
                                </span>
                            @else
                                <span
                                    class="material-symbols-outlined cursor-pointer transition-transform transition-opacity duration-300 ease-in-out transform hover:scale-125 opacity-100">
                                    toggle_on
                                </span>
                            @endif
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</div>
