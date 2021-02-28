<div class="min-h-screen ">
    <main class="-mt-24 pb-8">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="sr-only">Profile</h1>
            <!-- Main 3 column grid -->
            <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
                <!-- Left column -->
                <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                    <!-- Welcome panel.blade.php -->

                    <section aria-labelledby="profile-overview-title">
                        <div class="rounded-lg bg-white overflow-hidden shadow">
                            <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                            <div class="bg-white p-6">

                                <div class="sm:flex sm:items-center sm:justify-between">
                                    <div class="sm:flex sm:space-x-5">
                                        <div class="flex-shrink-0">
                                            {{--                                            <img class="mx-auto h-20 w-20 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">--}}
                                        </div>
                                        <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                            <p class="text-sm font-medium text-gray-600">Welcome Back,</p>
                                            <p class="text-xl mt-1 font-bold text-gray-900 sm:text-2xl">{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="mt-5 flex justify-center sm:mt-0">
                                        <a href="{{ route('profile.show') }}"
                                           class="flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                            View profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Actions panel.blade.php -->
                    @include('dashboard.home._quick-links', $events)
                </div>

                <!-- Right column -->
                <div class="grid grid-cols-1 gap-4">
                    <!-- Announcements -->
                    @include('dashboard.home._announcements', $announcements)
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="border-t border-gray-200 py-8 text-sm text-gray-500 text-center sm:text-left"><span
                        class="block sm:inline">© 2021 Indonesian Corrosion Week.</span> <span class="block sm:inline">All rights reserved.</span>
            </div>
        </div>
    </footer>
</div>

todo
1. rapihin jadi bagus


{{--<div class="font-body max-w-5xl min-w-min mx-auto pb-10 mt-16">--}}
{{--    <section class="flex flex-col xlplus:px-0 px-10 my-8">--}}
{{--        <div--}}
{{--                class="flex flex-row justify-center md:justify-between overflow-hidden bg-dashboard-0 rounded-lg w-auto z-10 relative shadow-md">--}}
{{--            <div class="flex flex-col text-gray-700 md:px-8 py-4 w-full md:text-left text-center">--}}

{{--                <h1 class="font-bold py-2  text-xl md:text-lg">--}}
{{--                    Hello, {{\Illuminate\Support\Facades\Auth::user()->name}}--}}
{{--                </h1>--}}

{{--                <div class="font-medium text-lg md:text-base">--}}
{{--                    <p class="mt-1">Semoga harimu menyenangkan!</p>--}}
{{--                </div>--}}

{{--                <div class="mt-5 flex justify-start sm:mt-0">--}}
{{--                    <a href="{{ route('profile.show') }}"--}}
{{--                       class="flex justify-start mt-2 items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">--}}
{{--                        View profile--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <img src="{{ \Illuminate\Support\Facades\URL::to('assets/img/dash.png') }}" alt="dash"--}}
{{--                 class="absolute w-0 md:relative md:w-2/4 ">--}}

{{--        </div>--}}
{{--    </section>--}}

{{--</div>--}}
{{--<div class="grid grid-cols-1 max-w-5xl mx-auto gap-4 lg:col-span-2">--}}
{{--    <!-- Actions panel.blade.php -->--}}

{{--    <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">--}}
{{--    </div>--}}
{{--    @include('dashboard.home._quick-links', $events)--}}

{{--    <div class="grid grid-cols-1 gap-4">--}}
{{--        <!-- Announcements -->--}}
{{--        @include('dashboard.home._announcements', $announcements)--}}
{{--    </div>--}}
{{--</div>--}}
