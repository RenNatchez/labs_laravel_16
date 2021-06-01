<x-guest-layout>
    <x-auth-card>
        <div class="lg:flex w-4/12 hidden relative items-center bg_register">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Simplifié vous<br> la vie</h1>
                <p class="text-3xl my-4">Avec nos méthodes et notre expérience de manière unique.</p>
            </div>
        </div>
        <div class="lg:px-20 lg:w-8/12 w-full flex items-center justify-center text-center md:px-16 px-5 z-0"
            style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center bg_register">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20  bg-green-">
                <img src="{{asset('image/big-logo.png')}}" class="m-auto" alt="logo_labs">
                <div class="divide-y divide-white-300 divide-opacity-25">
                    <div class="py-5">
                        <h1 class=" text-5xl text-center">Reset du password !</h1>
                    </div>
                    <div class="py-5">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                
                            <!-- Email Address -->
                            <div>
                                <x-label for="email"/>
                
                                <x-input placeholder='Email' id="email" class="block mt-1 w-full  bg-gray-800 border-gray-500 text_input" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>
                
                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password"/>
                
                                <x-input  placeholder='Nouveau mot de passe' id="password" class="block mt-1 w-full text_input bg-gray-800 border-gray-500" type="password" name="password" required />
                            </div>
                
                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation" />
                
                                <x-input placeholder='Confirmer le mot de passe' id="password_confirmation" class="block mt-1 w-full text_input bg-gray-800 border-gray-500"
                                                    type="password"
                                                    name="password_confirmation" required />
                            </div>
                
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="btn_send">
                                    {{ __('Reset Password') }}
                                </x-button>
                            </div>
                        </form>
                                    </div>
                </div>
            </div>
        </div>

    </x-auth-card>
</x-guest-layout>
