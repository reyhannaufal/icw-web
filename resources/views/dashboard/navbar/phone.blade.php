<!-- Responsive Navigation Menu -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-jet-responsive-nav-link>

        <!-- Only viewable by admins -->
        @if (auth()->user()->isAdmin())
            @if (auth()->user()->isMaster())
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-responsive-nav-link href="/message" :active="request()->routeIs('message.index')">
                        {{ __('Pesan') }}
                        <span class="ml-1.5 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded-full">
                                {{ $messages_count  }}
                            </span>
                    </x-jet-responsive-nav-link>
                </div>
            @endif

            @if (isset($event))
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-responsive-nav-link href="{{ route('verification', Str::slug($event->name, '-')) }}" :active="request()->routeIs('verification')">
                        {{ __('Verifikasi Peserta') }}
                        <span class="ml-1.5 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded-full">
                                {{ $event->countRowsOnStatus('pending')  }}
                            </span>
                    </x-jet-responsive-nav-link>
                </div>

                @if ($event->name == 'Paper Competition')
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-responsive-nav-link href="{{ route('paper.index') }}"
                                        :active="request()->routeIs('paper.index')">
                            Paper
                            <span class="ml-1.5 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded-full">
                                {{ $ungraded_paper_count }}
                            </span>
                        </x-jet-responsive-nav-link>
                    </div>
                @endif
            @endif

            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-responsive-nav-link href="/announcement" :active="request()->routeIs('announcement.index')">
                    {{ __('Pengumuman') }}
                </x-jet-responsive-nav-link>
            </div>

            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-responsive-nav-link href="/message" :active="request()->routeIs('partner.index')">
                    {{ __('Partner') }}
                </x-jet-responsive-nav-link>
            </div>
        @else
            <!-- Your events  -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-responsive-nav-link href="{{ route('events.index') }}" :active="request()->routeIs('events.index')">
                    {{ __('Event Anda') }}
                </x-jet-responsive-nav-link>
            </div>
        @endif
    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">
        <div class="flex items-center px-4">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="flex-shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                         alt="{{ Auth::user()->name }}"/>
                </div>
            @endif

            <div>
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
        </div>

        <div class="mt-3 space-y-1">
        @if (auth()->user()->isAdmin())
            <x-jet-responsive-nav-link href="/guide" :active="request()->routeIs('guide.index')">
                {{ __('Petunjuk') }}
            </x-jet-responsive-nav-link>
        @endif

        <!-- Account Management -->
            <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                                       :active="request()->routeIs('profile.show')">
                {{ __('Profile') }}
            </x-jet-responsive-nav-link>

            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                                           :active="request()->routeIs('api-tokens.index')">
                    {{ __('API Tokens') }}
                </x-jet-responsive-nav-link>
        @endif

        <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-jet-responsive-nav-link>
            </form>
        </div>
    </div>
</div>
