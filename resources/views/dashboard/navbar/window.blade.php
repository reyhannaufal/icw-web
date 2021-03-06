<!-- Primary Navigation Menu -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
        <div class="flex">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    {{--                        <x-jet-application-mark class="block h-9 w-auto" />--}}
                    <img class="h-10 w-auto block" src="{{URL::to('assets/img/logo_indicor.png')}}" alt="logo_icw"/>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-jet-nav-link>
            </div>

            <!-- Only viewable by admins -->
            @if(auth()->user()->isAdmin())
                @if(auth()->user()->isMaster())
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="/message" :active="request()->routeIs('message.index')">
                            {{ __('Pesan') }}
                            <span
                                class="ml-1.5 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded-full">
                            {{ $messages_count  }}
                        </span>
                        </x-jet-nav-link>
                    </div>
                @endif

                @if (isset($event))
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ route('verification', Str::slug($event->name, '-')) }}"
                                        :active="request()->routeIs('verification')">
                            Verifikasi peserta
                            <span class="ml-1.5 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded-full">
                                {{ $event->countRowsOnStatus('pending')  }}
                            </span>
                        </x-jet-nav-link>
                    </div>

                    @if ($event->name == 'Paper Competition')
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-jet-nav-link href="{{ route('paper.index') }}"
                                            :active="request()->routeIs('paper.index')">
                                Paper
                                <span class="ml-1.5 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded-full">
                                <p class="papers-badget">{{ $ungraded_paper_count  }}</p>
                            </span>
                            </x-jet-nav-link>
                        </div>
                    @endif
                @endif

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="/announcement" :active="request()->routeIs('announcement.index')">
                        {{ __('Pengumuman') }}
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="/partner" :active="request()->routeIs('partner.index')">
                        {{ __('Partner') }}
                    </x-jet-nav-link>
                </div>
            @else
                <!-- Your events  -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('events.index') }}" :active="request()->routeIs('events.index')">
                        {{ __('Event Anda') }}
                    </x-jet-nav-link>
                </div>
            @endif
        </div>

        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <!-- Settings Dropdown -->
            <div class="ml-3 relative">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover"
                                     src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        @if (auth()->user()->isAdmin())
                            <!-- Dokumentasi -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Dokumentasi') }}
                                </div>

                                <x-jet-dropdown-link href="/guide" :active="request()->routeIs('guide.index')">
                                    {{ __('Petunjuk') }}
                                </x-jet-dropdown-link>
                        @else
                            <!-- Admin tidak dapat mengakses menu profil  -->
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>
                        @endif

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>
        </div>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</div>
