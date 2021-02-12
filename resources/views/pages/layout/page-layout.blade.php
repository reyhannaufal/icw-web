<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <header>
        <div x-data="{ mobileMenuOpen: false }" class="relative bg-bgnav-0">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                    <span class="sr-only">Workflow</span>
                    <img class="h-8 w-auto sm:h-10" src="{{'assets/img/logo_indicor.png'}}" alt="logo-indicor">
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
                        <span>Events</span>
                        <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500" x-bind:class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <transition enter-active-class="transition ease-out duration-200" enter-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1"><div x-description="'Solutions' flyout menu, show/hide based on flyout menu state." x-show="flyoutMenuOpen" class="absolute z-10 -ml-4 mt-3 transform w-screen max-w-md lg:max-w-2xl lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" x-description="Heroicon name: outline/inbox" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Paper Competition
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Lorem ipsum dolor sit amet.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" x-description="Heroicon name: outline/annotation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Oil Rig Competition
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Speak directly to your customers in a more meaningful way.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" x-description="Heroicon name: outline/chat-alt-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Oil Rig Competition
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Your customers' data will be safe and secure.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" x-description="Heroicon name: outline/question-mark-circle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-medium text-gray-900">
                                                Oil Rig Competition
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Connect with third-party tools that you're already using.
                                            </p>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </transition>
                </div>

                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    About Us
                </a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Contact Us
                </a>
            </nav>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="{{ route('login') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                    Sign in
                </a>
                <a href="{{ route('register') }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
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

                                <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/inbox" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4 text-base font-medium text-gray-900">
                                        Events
                                    </div>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/annotation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4 text-base font-medium text-gray-900">
                                        About Us
                                    </div>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/chat-alt-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4 text-base font-medium text-gray-900">
                                        Contact Us
                                    </div>
                                </a>

                            </nav>
                        </div>
                    </div>
                    <div class="py-6 px-5">
                        <div class="grid grid-cols-2 gap-4">

                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                                Pricing
                            </a>

                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                                Partners
                            </a>

                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                                Company
                            </a>

                        </div>
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
    </header>


    <div class="antialiased">
        @yield('content')
    </div>


    <footer class="bg-bgnav-0">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
            <nav
                    class="-mx-5 -my-2 flex flex-wrap justify-center"
                    aria-label="Footer"
            >
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Home
                    </a>
                </div>

                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        About Us
                    </a>
                </div>

                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Contact Us
                    </a>
                </div>

                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Events
                    </a>
                </div>

            </nav>
            <div class="mt-8 flex justify-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg
                            class="h-6 w-6"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                    >
                        <path
                                fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"
                        ></path>
                    </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg
                            class="h-6 w-6"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                    >
                        <path
                                fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"
                        ></path>
                    </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg
                            class="h-6 w-6"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                    >
                        <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                        ></path>
                    </svg>
                </a>

            </div>
            <p class="mt-8 text-center text-base text-gray-400">
                © 2021 Indonesian Corrosion Week, Inc. All rights reserved.
            </p>
        </div>
    </footer>



</body>
<style>
    *{
        font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
    }
</style>
</html>