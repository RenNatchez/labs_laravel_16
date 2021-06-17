<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}" />
    <link rel="stylesheet" href="{{asset('css/auth.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
        integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal	">

    {{-- headerlink --}}
    <nav id="header" class="bg-gray-900 fixed w-full z-10 top-0 shadow  relative">


        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
            <div class="w-1/2 pl-2 md:pl-0">
                <a class="my-4" href="/">
                    <img class="ml-5  py-5" src="{{asset('image/logo.png')}}" alt="logo">
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">
                    <div class="relative text-sm text-gray-100 hidden lg:flex">
                        <p class="my-auto mx-5">Hello {{Auth::user()->prenom}} {{Auth::user()->nom}}</p>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                class="flex bg_fuchsia items-center justify-between px-5 py-2 text-sm font-medium leading-5 text-white border border-transparent rounded-lg"><i
                                    class="fas fa-sign-out-alt mr-5"></i> Deconexion</button>
                        </form>
                        <div id="userMenu"
                            class="bg-gray-900 rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                        </div>
                    </div>


                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle"
                            class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>


            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-900 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('dashboard')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-green-800">
                            <i class="fas fa-home fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('carousel.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-pink-400">
                            <i class="fas fa-images fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Carousel</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('service.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-blue-700">
                            <i class="fas fa-server mr-3"></i><span class="pb-1 md:pb-0 text-sm">Services</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('video.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-red-600">
                            <i class="fab fa-youtube mr-3"></i><span class="pb-1 md:pb-0 text-sm">Vidéo</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('testimonial.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-yellow-800">
                            <i class="fas fa-quote-left mr-3"></i><span class="pb-1 md:pb-0 text-sm">testimonial</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('contact.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-indigo-300">
                            <i class="fas fa-address-book mr-3"></i><span class="pb-1 md:pb-0 text-sm">Contact</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('newsletter.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-yellow-300">
                            <i class="fas fa-newspaper mr-3"></i><span class="pb-1 md:pb-0 text-sm">Newsletter</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('googlemaps.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-gray-300">
                            <i class="fas fa-map-marked-alt mr-3"></i><span class="pb-1 md:pb-0 text-sm">Google maps</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('articles.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-indigo-900">
                            <i class="fas fa-newspaper mr-3"></i><span class="pb-1 md:pb-0 text-sm">Articles</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('contenu.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-green-200">
                            <i class="fas fa-clone mr-3"></i><span class="pb-1 md:pb-0 text-sm">Contenus</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('verif.index')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-red-200">
                            <i class="fas fa-check-double mr-3"></i><span class="pb-1 md:pb-0 text-sm">Validate</span>
                        </a>
                    </li>
            </ul>
            </div>

        </div>
    </nav>
    {{-- headerlink end --}}
    @yield('content')
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }

    </script>

</body>

</html>
