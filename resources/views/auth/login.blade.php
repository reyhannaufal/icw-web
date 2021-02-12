<x-guest-layout>
    <div class="min-h-screen bg-white flex">
    <div
            class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24"
    >
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <img
                        class="h-12 w-auto"
                        src="{{'assets/img/logo_indicor.png'}}"
                        alt="icw-logo"
                />
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Sign in to your account
                </h2>
                <p class="mt-2 text-sm text-gray-600 max-w">
                    Or
                    <!-- space -->
                    <a
                            href="{{route('register')}}"
                            class="font-medium text-indigo-600 hover:text-indigo-500"
                    >
                        register your account now!
                    </a>
                </p>
            </div>

            <div class="mt-8">
                <div class="mt-6">
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf
                        <div>
                            <x-jet-label for="email"  class="block text-sm font-medium text-gray-700" value="{{ __('Email') }}"/>
                            <div class="mt-1">
                                <x-jet-input id="email"
                                             class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="email" name="email" :value="old('email')"
                                             required autofocus
                                />
                            </div>
                        </div>
                        <div class="space-y-1">
                            <x-jet-label
                                    for="password"
                                    class="block text-sm font-medium text-gray-700"
                                    value="{{ __('Password') }}"
                            >
                                Password
                            </x-jet-label>
                            <div class="mt-1">
                                <x-jet-input
                                        id="password"
                                        name="password"
                                        type="password"
                                        autocomplete="current-password"
                                        required=""
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                />
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember"/>
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a class="text-sm text-indigo-600 hover:text-indigo-900 hover:underline"
                                   href="{{ route('password.request') }}">
                                    {{ __('Forget Password?') }}
                                </a>
                            @endif
                        </div>

                        <div>
                            <button
                                    type="submit"
                                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                {{ __('Sign In') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
        <img
                class="absolute inset-0 h-full w-full object-cover"
                src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1908&amp;q=80"
                alt=""
        />
    </div>
</div>
</x-guest-layout>