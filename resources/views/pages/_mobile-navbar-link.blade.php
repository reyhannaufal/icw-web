<transition enter-active-class="duration-200 ease-out" enter-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
            leave-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
    <div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen"
         class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="{{ asset('assets/img/logo_indicor.png') }}" alt="logo_icw">
                    </div>
                    <div class="-mr-2">
                        <button @click="mobileMenuOpen = false" type="button"
                                class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid grid-cols-1 gap-7">

                        <a href="/"
                           onclick="_scrollTo(this, 'events')"
                           class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                            <div
                                    class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/inbox"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                            </div>
                            <div class="ml-4 text-base font-bold text-black hover:text-gray-900">
                                Event
                            </div>
                        </a>

                        <a href="/about" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                            <div
                                    class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/annotation"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 text-base font-bold text-black hover:text-gray-900">
                                Tentang Kami
                            </div>
                        </a>

                        <a href="/contact" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                            <div
                                    class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/chat-alt-2"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 text-base font-bold text-black hover:text-gray-900">
                                Jadilah Partner Kami
                            </div>
                        </a>

                    </nav>
                </div>
            </div>
            <div class="py-6 px-5">
                <div class="mt-6">
                    @if ( !empty(auth()->user()) )
                        <a href="{{ route('login') }}"
                           class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('register') }}"
                           class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                            Daftar
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="text-gray-900">
                                Masuk
                            </a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</transition>
