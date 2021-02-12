<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo/>
        </x-slot>


        <x-jet-validation-errors class="mb-4 text-center"/>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                             required autofocus/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}"/>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                             autocomplete="current-password"/>
            </div>

            <div class="flex justify-between mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember"/>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat aku') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-900 hover:underline"
                       href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                @endif
            </div>

            <div class="flex justify-start mt-5">

                <x-jet-button class="">
                    <a href="{{ route('register') }}">
                        {{ __('Daftar sekarang') }}
                    </a>
                </x-jet-button>

                <x-jet-button class="ml-4">
                    {{ __('Masuk') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
