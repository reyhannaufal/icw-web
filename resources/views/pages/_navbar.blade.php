<div x-data="{ mobileMenuOpen: false }" class="relative bg-bgnav-0 z-50">
    <div id="header" class="flex justify-between items-center  max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
        <div class="flex justify-start lg:w-0 lg:flex-1">
            <a {{ (Route::current()->uri() != '/') ? "href=" . "/" : "onclick=" . "_scrollTo(this, 'header')" }}>
                <span class="sr-only">Workflow</span>
                <img class="cursor-pointer h-8 w-auto sm:h-10" src="{{ asset('assets/img/logo_indicor.png') }}" alt="logo-indicor">
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
    @include('pages._mobile-navbar-link', $events)
</div>
