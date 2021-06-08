<x-guest-layout>
    <x-auth-card>
        <div class="lg:px-20 lg:w-8/12 w-full flex items-center justify-center text-center md:px-16 px-5 z-0"
            style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center bg_register">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <img src="{{asset('image/big-logo.png')}}" class="m-auto" alt="logo_labs">
                <div class="divide-y divide-white-300 divide-opacity-25">
                    <div class="py-5">
                        <h1 class=" text-5xl text-center">Crée votre compte !</h1>
                    </div>
                    <div class="py-5">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="flex justify-around my-3">
                                <div class="w-5/12">
                                    <!-- nom -->
                                    <div class="my-2">
                                        <x-label for="nom" />
                                        <x-input placeholder='Nom' id="nom"
                                            class="block mt-1 w-full bg-gray-800 border-gray-500 text_input" type="text"
                                            name="nom" :value="old('nom')" />
                                    </div>
                                    <!-- Prenom -->
                                    <div class="my-2">
                                        <x-label for="prenom" />
                                        <x-input placeholder='Prenom' id="prenom"
                                            class="block mt-1 w-full bg-gray-800 border-gray-500 text_input" type="text"
                                            name="prenom" :value="old('prenom')" />
                                    </div>
                                    <!-- mail -->
                                    <div class="my-2">
                                        <x-label for="email" />
                                        <x-input placeholder='Email' id="email"
                                            class="block mt-1 w-full  bg-gray-800 border-gray-500 text_input"
                                            type="email" name="email" :value="old('email')" required />
                                    </div>
                                    <!-- password -->
                                    <div class="my-2">
                                        <x-label for="password" />
                                        <x-input placeholder='Mot de passe' id="password"
                                            class="block mt-1 w-full bg-gray-800 border-gray-500 text_input"
                                            type="password" name="password" required autocomplete="new-password" />
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="my-2">
                                        <x-label for="password_confirmation" />
                                        <x-input placeholder='Confirmer le mot de passe' id="password_confirmation"
                                            class="block mt-1 w-full bg-gray-800 border-gray-500 text_input"
                                            type="password" name="password_confirmation" required />
                                    </div>
                                </div>
                                <div class="w-5/12">
                                    {{-- description --}}
                                    <div class="my-2 ">
                                        <x-label for="description" />
                                        <textarea placeholder='Description' id="description" style="height: 142px;"
                                            class="block mt-1 w-full bg-gray-800 border-gray-500 text_input  rounded-lg"
                                            type="text" name="description" required></textarea>
                                    </div>
                                    {{-- photo --}}
                                    <div class="my-2">
                                        <x-label for="photo" />
                                        <select name="poste_id" id="poste_id" class="rounded-lg  block mt-1 w-full bg-gray-800 border-gray-500 text_input">
                                            @foreach ($poste as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="photo"
                                            class=" sm:w-full m-auto h-10 flex flex-col items-center justify-center px-4 bg_green text-gray-800 rounded-lg shadow-lg tracking-wide uppercase border border-green-700 cursor-pointer hover:text-white">
                                            <h2 class="text-xs">Sélectionner une photo</h2>
                                        </label>
                                        <input type="file" class="hidden" id="photo" name="photo" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pt-5 flex justify-between my-3">
                        <div class="flex items-center justify-end mt-4">
                            <a class=" text-sm text-white hover:text-gray-400" href="/">
                                {{ __('Retourner sur le site') }}
                            </a>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a class=" text-sm text-white hover:text-gray-400" href="{{ route('login') }}">
                                {{ __('Vous avez déjà un compte ?') }}
                            </a>

                            <x-button class="ml-4 text-2xl btn_send">
                                {{ __("S'inscrire") }}
                            </x-button>
                        </div>
                    </div>
                </div>
                </form>

            </div>
        </div>
        </div>
        </div>
    </x-auth-card>
</x-guest-layout>
