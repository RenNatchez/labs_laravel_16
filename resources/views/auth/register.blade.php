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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="flex justify-between my-3">
                                <!-- Name -->
                                <div class="w-5/12">
                                    <x-label for="nom" />
                                    <x-input placeholder='Nom' id="nom"
                                        class="block mt-1 w-full bg-gray-800 border-gray-500 text_input" type="text"
                                        name="nom" :value="old('nom')" />
                                </div>
                                <!-- Prenom -->
                                <div class="w-5/12">
                                    <x-label for="prenom" />
                                    <x-input placeholder='Prenom' id="prenom"
                                        class="block mt-1 w-full bg-gray-800 border-gray-500 text_input" type="text"
                                        name="prenom" :value="old('prenom')" />
                                </div>
                            </div>
                            <div class="flex justify-between my-3">
                                <div class="w-5/12">
                                    <x-label for="email" />
                                    <x-input placeholder='Email' id="email"
                                        class="block mt-1 w-full  bg-gray-800 border-gray-500 text_input" type="email"
                                        name="email" :value="old('email')" required />
                                </div>
                                <div class="w-5/12">
                                    <x-label for="photo" />
                                    <x-input placeholder='photo' id="photo"
                                        class="block mt-1 w-full bg-gray-800 border-gray-500 text_input" type="text"
                                        name="photo" :value="old('photo')" />
                                </div>
                            </div>
                            <div class="w-full my-3">
                                <x-label for="description" />
                                <textarea placeholder='Description' id="description"
                                    class="block mt-1 w-full bg-gray-800 border-gray-500 text_input  h-24" type="text"
                                    name="description" required></textarea>
                            </div>
                            <div class="flex justify-between">
                                <div class="w-5/12">
                                    <x-label for="password" />
                                    <x-input placeholder='Mot de passe' id="password"
                                        class="block mt-1 w-full bg-gray-800 border-gray-500 text_input" type="password"
                                        name="password" required autocomplete="new-password" />
                                </div>
                                <!-- Confirm Password -->
                                <div class="w-5/12">
                                    <x-label for="password_confirmation" />
                                    <x-input placeholder='Confirmer le mot de passe' id="password_confirmation"
                                        class="block mt-1 w-full bg-gray-800 border-gray-500 text_input" type="password"
                                        name="password_confirmation" required />
                                </div>
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
