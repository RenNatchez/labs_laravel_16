<x-guest-layout>
    <x-auth-card>
        <div class="lg:px-20 lg:w-8/12 w-full flex items-center justify-center text-center md:px-16 px-5 z-0"
            style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center bg_register">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20  bg-green-">
                <img src="{{asset('image/big-logo.png')}}" class="m-auto" alt="logo_labs">
                <div class="divide-y divide-white-300 divide-opacity-25">
                    <div class="py-5">
                        <h1 class=" text-5xl text-center">Réniatiliser le mot de passe !</h1>
                    </div>
                    <div class="py-5">
        <div class="mb-4 text-sm text-white">
            {{ __("Mot de passe oublié? Aucun problème. Faites-nous simplement savoir votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.") }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" />

                <x-input id="email" placeholder='Email' class="block text_input mt-1 w-full bg-gray-800 border-gray-500" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="flex justify-between">
                <div class="flex items-center justify-end mt-4">
                    <a class=" text-sm text-white hover:text-gray-400"
                        href="/">
                        {{ __('Retourner sur le site') }}
                    </a>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4 text-2xl btn_send">
                        {{ __('Envoyer') }}
                    </x-button>
                </div>
            </div>
        </form>

                    </div>
                </div>
            </div>
        </div>


    </x-auth-card>
</x-guest-layout>
