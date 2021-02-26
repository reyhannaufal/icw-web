<x-auth-layout>
    @section('title', 'Forget Password')
    @section('description', 'Forget Password')
    <div
            class="min-h-screen bg-white flex flex-col justify-center py-3 sm:px-6 lg:px-8"
            style="font-family: 'Poppins', sans-serif"
    >

        <div class="sm:mx-auto sm:w-full sm:max-w-md p-5">
            <a href="{{ route('home') }}">
                <img
                    class="mx-auto"
                    src="{{'assets/img/logo_indicor.png'}}"
                    alt="logo-ILITS"
                    width="300" height="300"
                />
            </a>
            <h2 class="text-center text-xl mt-5 leading-9 font-extrabold text-gray-900">
                Forget your password?
            </h2>
        </div>

        <div class=" sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-yellow-100 py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <div class="mb-4 text-sm text-black">
                    {{ __('Mohon isi email anda agar kami dapat mengirim link untuk mereset password anda.') }}
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="block">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" style="padding: 0.5rem" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <x-jet-validation-errors class="mb-4" />
                    @if (session('status'))
                        <div class="mt-1 mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="flex items-center justify-end mt-4">
                        <button class="ml-8 whitespace-nowrap inline-flex bg-gray-700 items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white">
                            {{ __('Send me a link') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-auth-layout>

