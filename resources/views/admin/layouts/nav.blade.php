<div class="flex h-screen bg-gray-50 bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
        <div class="py-4 dark:text-gray-400">
            <a href="/">
                <img  class="ml-5" src="{{asset('image/logo.png')}}" alt="logo">
            </a>
            <ul class="mt-6 text_green">
                <li class="relative px-6 py-3">
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                        href="{{route('dashboard')}}">
                        <span class="ml-4"><i class="fas fa-home mr-3"></i>Home</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                        href="{{route('carousel.index')}}">
                        <span class="ml-4"><i class="fas fa-clone mr-3"></i>Carousel</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <button
                        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                        @click="togglePagesMenu" aria-haspopup="true">
                        <span class="inline-flex items-center">
                            <span class="ml-4"><i class="fas fa-font mr-3" style="user-select: auto;"></i> Contenu</span>
                        </span>
                        <i class="fas fa-chevron-down pr-3"></i>                        </button>
                    <template x-if="isPagesMenuOpen">
                        <ul x-transition:enter="transition-all ease-in-out duration-300"
                            x-transition:enter-start="opacity-25 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-xl"
                            x-transition:leave="transition-all ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 max-h-xl"
                            x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                            aria-label="submenu">
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/login.html">Home</a>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Services
                                </a>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/404.html">Blog</a>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/blank.html">Contact</a>
                            </li>
                        </ul>
                    </template>
                </li>

            </ul>
            <div class="px-6 my-6">
                <button
                    class="flex bg_green items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150  border border-transparent rounded-lg hover:bg-gray-400 focus:outline-none focus:shadow-outline-purple">
                    Créer un article
                    <span class="ml-2" aria-hidden="true">+</span>
                </button>
            </div>
        </div>
    </aside>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu">
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <ul class="mt-6 text_green">
                <li class="relative px-6 py-3">
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                        href="index.html">
                        <span class="ml-4"><i class="fas fa-home mr-3"></i>Home</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <button
                        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-400"
                        @click="togglePagesMenu" aria-haspopup="true">
                        <span class="inline-flex items-center">
                            <span class="ml-4"><i class="fas fa-font mr-3" style="user-select: auto;"></i> Contenu</span>
                        </span>
                        <i class="fas fa-chevron-down pr-3"></i>                        </button>
                    <template x-if="isPagesMenuOpen">
                        <ul x-transition:enter="transition-all ease-in-out duration-300"
                            x-transition:enter-start="opacity-25 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-xl"
                            x-transition:leave="transition-all ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 max-h-xl"
                            x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                            aria-label="submenu">
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/login.html">Home</a>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/create-account.html">
                                    Services
                                </a>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/404.html">Blog</a>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="pages/blank.html">Contact</a>
                            </li>
                        </ul>
                    </template>
                </li>

            </ul>
            <div class="px-6 my-6">
                <button
                    class="flex bg_green items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150  border border-transparent rounded-lg hover:bg-gray-400 focus:outline-none focus:shadow-outline-purple">
                    Créer un article
                    <span class="ml-2" aria-hidden="true">+</span>
                </button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                                        <button class="mt-5 flex bg_fuchsia items-center justify-left px-5 py-2 text-sm font-medium leading-5 text-white border border-transparent rounded-lg w-full"><i class="fas fa-sign-out-alt mr-5"></i> Deconexion</button>
                </form>     
            </div>       
        </div>
    </aside>
    <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white md:bg-grey800 dark:bg-gray-800 flex justify-around pr-10">
            <div
                class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                <!-- Mobile hamburger -->
                <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple felx"
                    @click="toggleSideMenu" aria-label="Menu">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>        
                </button>
                <!-- Search input -->
            </div>
            <div  class="md:flex hidden">
                <h2 class="flex text-white w-64 items-center justify-between">Hello {{Auth::user()->prenom}} {{Auth::user()->nom}} </h2>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                                        <button class="flex bg_fuchsia items-center justify-between px-5 py-2 text-sm font-medium leading-5 text-white border border-transparent rounded-lg"><i class="fas fa-sign-out-alt mr-5"></i> Deconexion</button>
                </form>
            </div>
            <img  class="ml-5  md:hidden" src="{{asset('image/logo.png')}}" alt="logo">
        </header>
        <main class="h-full overflow-y-auto">
            @yield('content')

        </main>
    </div>
</div>
