<x-auth-layout>
    <div class="min-h-screen bg-white flex">
        <div
                class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24"
        >
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <a href="/">
                        <img
                                class="h-12 w-auto"
                                src="{{'assets/img/logo_indicor.png'}}"
                                alt="icw-logo"
                        />
                    </a>

                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        Sign Up Now!
                    </h2>
                    <p class="pt-4 text-gray-700">Create your account by filling up the form below.</p>
                </div>

                <div class="mt-8">
                    <div class="mt-6">
                        <x-jet-validation-errors class="space-y-6" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                <x-jet-label  class="block text-sm font-medium text-gray-700" for="name" value="{{ __('Name') }}" />
                                <x-jet-input id="name"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="email" class="block text-sm font-medium text-gray-700" value="{{ __('Email') }}" />
                                <x-jet-input id="email"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="phone_number" class="block text-sm font-medium text-gray-700" value="{{ __('Phone Number') }}" />
                                <x-jet-input id="phone_number"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                             type="tel"
                                             placeholder="+62"
                                             pattern="(\+62 ((\d{3}([ -]\d{3,})([- ]\d{4,})?)|(\d+)))|(\(\d+\) \d+)|\d{3}( \d+)+|(\d+[ -]\d+)|\d+"
                                             oninvalid="setCustomValidity('Input tidak sesuai dengan format. Contoh: 0858123456')"
                                             oninput="setCustomValidity('')" name="phone_number" :value="old('phone_number')" required />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="institution" class="block text-sm font-medium text-gray-700" value="{{ __('Institution') }}" />
                                <x-jet-input id="institution"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="text" name="institution" :value="old('institution')" required />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" class="block text-sm font-medium text-gray-700" value="{{ __('Password') }}" />
                                <x-jet-input id="password"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password_confirmation"  class="block text-sm font-medium text-gray-700" value="{{ __('Confirm Password') }}" />
                                <x-jet-input id="password_confirmation"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="flex-col items-center justify-end mt-4">
                                <button class="w-full flex  justify-center py-3 px-4 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600">
                                    {{ __('Sign Up') }}
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
</x-auth-layout>
