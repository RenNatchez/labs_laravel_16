    <!--Container-->
    <div class="container w-full mx-auto">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg_green"><i
                                        class="fas fa-birthday-cake fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Création du site</h5>
                                <h3 class="font-bold text-3xl text-gray-600">152 days</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-indigo-600"><i
                                        class="fas fa-user-friends fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Membres</h5>
                                <h3 class="font-bold text-3xl text-gray-600">{{$membre->count()}}</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-purple-600  veri"><i
                                        class="fas fa-file-alt fa-2x fa-fw fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Articles</h5>
                                <h3 class="font-bold text-3xl text-gray-600">{{$blog->count()}}</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>
            <hr class="border-b-2 border-gray-600 my-8 mx-4">
            <!-- This is an example component -->

            <div class="h-full">

                <div class="block md:flex">

                    <div class="w-full md:w-4/12 p-4 sm:p-6 lg:p-8 bg-gray-900 shadow-md">
                        <div class="flex justify-between">
                            <span class="text-xl text-gray-600 font-semibold block">{{Auth::user()->role->nom}} Profile</span>
                            <a href="#"
                                class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">Edit</a>
                        </div>

                        <div class="w-full p-8 mx-2 flex justify-center">
                            <img id="showImage" class="max-w-xs items-center "
                                src={{asset('image/'. Auth::user()->photo)}} alt="">
                        </div>
                    </div>

                    <div class="w-full md:w-8/12 p-8 bg-gray-900 lg:ml-4 shadow-md  flex  items-center">
                        <div class="">
                            <h1 class="text-3xl text-gray-600"><span class="text_green">{{Auth::user()->nom}} {{Auth::user()->prenom}} | | </span>{{Auth::user()->poste->nom}}</h1>
                            <div class="px-20 my-5">
                                <p class="text-white  text-xl">Email</p><hr class="my-3">
                                <p class="text-gray-500">{{Auth::user()->email}}</p>
                            </div>
                            <div class="px-20 my-5">
                                <p class="text-white  text-xl">Description</p><hr class="my-3">
                                <p class="text-gray-500">{{Auth::user()->description}}</p>
                            </div>
                            @if (Auth::user()->validate  ==  0)
                                <h3 class="text-right text-gray-800 text-xs mt-10"><i class="mr-5  fas  fa-exclamation-triangle"></i>Profil non  validé</h3>
                            @else
                            <h3 class="text-right text-gray-800 text-xs mt-10"><i class="mr-5  fas fa-check-double"></i>Profil validé</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container end-->
