<div x-data="{ mobileMenuOpen: false }" class="relative bg-bgnav-0">
    <div id="header" class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
        <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="/" onclick="{{ (Route::current()->uri() != '/') ?: "_scrollTo(this, 'header')" }}">
                <span class="sr-only">Workflow</span>
                <img class="h-8 w-auto sm:h-10" src="{{ asset('assets/img/logo_indicor.png') }}" alt="logo-indicor">
            </a>
        </div>
        <div class="-mr-2 -my-2 md:hidden">
            <button @click="mobileMenuOpen = true" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <span class="sr-only">Open menu</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <nav class="hidden md:flex space-x-10">
            <div @click.away="flyoutMenuOpen = false" x-data="{ flyoutMenuOpen: false }" class="relative">
                <button type="button" @click="flyoutMenuOpen = !flyoutMenuOpen" x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': flyoutMenuOpen, 'text-gray-500': !flyoutMenuOpen }" class="group rounded-md text-gray-500 inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="font-bold text-black hover:text-gray-700">Events</span>
                    <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500" x-bind:class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <transition enter-active-class="transition ease-out duration-200" enter-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1"><div x-description="'Solutions' flyout menu, show/hide based on flyout menu state." x-show="flyoutMenuOpen" class="absolute z-10 -ml-4 mt-3 transform w-screen max-w-md lg:max-w-2xl lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">

                            @forelse ($events as $event)
                                <x-event.quick-link-navbar :event="$event"/>
                            @empty
                                No data (check database)
                            @endforelse

                        </div>
                    </div>
                    </div>
                </transition>
            </div>
                <a href="/about" class="text-base font-bold text-black hover:text-gray-700">
                    About Us
                </a>
                <a href="/contact" class="text-base font-bold text-black hover:text-gray-700">
                    Contact Us
                </a>
        </nav>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="{{ route('login') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                    Sign in
                </a>
                <a href="{{ route('register') }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gray-700 border-2 border-solid  hover:from-purple-700 hover:to-indigo-700">
                    Sign up
                </a>
            </div>
    </div>
    {{--mobile menu--}}
    <transition enter-active-class="duration-200 ease-out" enter-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95"><div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen" class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="{{'assets/img/logo_indicor.png'}}" alt="Workflow">
                        </div>
                        <div class="-mr-2">
                            <button @click="mobileMenuOpen = false" type="button" class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid grid-cols-1 gap-7">

                            <a onclick="_scrollTo(this, 'events')" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/inbox" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                    </svg>
                                </div>
                                <div class="ml-4 text-base font-bold text-black hover:text-gray-900">
                                    Events
                                </div>
                            </a>

                            <a href="/about" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/annotation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4 text-base font-bold text-black hover:text-gray-900">
                                    About Us
                                </div>
                            </a>

                            <a href="/contact" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/chat-alt-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4 text-base font-bold text-black hover:text-gray-900">
                                    Contact Us
                                </div>
                            </a>

                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5">
                    <div class="mt-6">
                        <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                            Sign up
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-gray-900">
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div></transition>
</div>
