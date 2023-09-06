<x-guest-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md text-center">
            <br> <br> <br>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="text-center">
                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mx-auto mt-1 w-full max-w-xs"
                                        type="email"
                                        name="email"
                                        :value="old('email')"
                                        required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mx-auto mt-1 w-full max-w-xs"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

<<<<<<< HEAD
                    <x-primary-button>
                        {{ __('Log in') }}
                    </x-primary-button>

                    <!-- Forgot Password and Login Button -->
                    <div class="mb-4">
                        <br>
                        <div class="inline-flex items-center"">
                            <div class="mb-4">
                                <div class="flex justify-center">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                                        {{ __('No account? Sign up for free!') }}
                                    </a>
                                </div>
                            </div>
                            
=======
                    <!-- Forgot Password and Login Button -->
                    <div class="mb-4">
                        <div class="inline-flex items-center"">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            <x-primary-button>
                                {{ __('Log in') }}
                            </x-primary-button>
>>>>>>> 138eb05afa6639a9f91ca9c762b9516dd89875a0
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<<<<<<< HEAD
</x-guest-layout>
=======
</x-guest-layout>
>>>>>>> 138eb05afa6639a9f91ca9c762b9516dd89875a0
