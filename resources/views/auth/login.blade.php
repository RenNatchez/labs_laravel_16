<x-guest-layout>
    <x-auth-card>
        <div class="lg:px-20 lg:w-8/12 w-full flex items-center justify-center text-center md:px-16 px-5 z-0"
            style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center bg_register">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20  bg-green-">
                <div class="divide-y divide-white-300 divide-opacity-25">
                    <div class="py-5">
                        <h1 class=" text-5xl text-center">Connectez-vous !</h1>
                    </div>
                    <div class="py-5">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="text_input">
                                <x-label for="email" />

                                <x-input id="email"  placeholder="Email" class="block mt-1 w-full text_input" type="email" name="email" class="block mt-1 w-full bg-gray-800 border-gray-500"
                                    :value="old('email')" required />
                            </div>
                        <div  class="flex  justify-between  my-5">
                            <!-- Password -->
                            <div class="mt-4 sm:w-9/12  w-6/12 text_input">
                                <x-label for="password" />

                                <x-input id="password"  placeholder="Mot de passe" class="text_input block mt-1 w-full" type="password" name="password"  class="block mt-1 w-full bg-gray-800 border-gray-500"
                                    required autocomplete="current-password" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4 flex content-center">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class=" rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="remember">
                                    <span class="pl-5 text-sm text-white hover:text-gray-400">{{ __('Se souvenir de moi') }}</span>
                                </label>
                            </div>
                        </div>
                            <div class="flex justify-between pt-5">
                                <div class="flex items-center justify-end mt-4">
                                    <a class=" text-sm text-white hover:text-gray-400"
                                        href="/">
                                        {{ __('Retourner sur le site') }}
                                    </a>
                                </div>
                                <div>
                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                        <a class="text-sm text-white hover:text-gray-400"
                                            href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublier  ?') }}
                                        </a>
                                        @endif
        
                                        <x-button class="ml-4 text-2xl btn_send">
                                            {{ __('Connexion') }}
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
