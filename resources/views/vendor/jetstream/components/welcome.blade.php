<div class="min-h-screen bg-gray-100">
    <main class="-mt-24 pb-8">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="sr-only">Profile</h1>
            <!-- Main 3 column grid -->
            <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
                <!-- Left column -->
                <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                    <!-- Welcome panel -->
                    <section aria-labelledby="profile-overview-title">
                        <div class="rounded-lg bg-white overflow-hidden shadow">
                            <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
                            <div class="bg-white p-6">
                                <div class="sm:flex sm:items-center sm:justify-between">
                                    <div class="sm:flex sm:space-x-5">
                                        <div class="flex-shrink-0">
{{--                                            <img class="mx-auto h-20 w-20 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">--}}
                                            <div class="mx-auto h-20 w-20 rounded-full bg-indigo-900"></div>
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

                    <!-- Actions panel -->
                    @include('dashboard.components.quick-links', $events)
                </div>

                <!-- Right column -->
                <div class="grid grid-cols-1 gap-4">
                    <!-- Announcements -->
                    @include('dashboard.components.announcements', $announcements)
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
