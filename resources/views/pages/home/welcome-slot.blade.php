<x-guest-layout>
    @php echo '<script type="text/javascript"> changeTitleTo("Home")</script>' @endphp
    <x-slot name="navbar">
        @include('pages._navbar', $events)
    </x-slot>

    <div class="font-body overflow-hidden">
        <main class="bg-bgsection-0">
            <!-- Hero section -->
            @include('pages.home._hero-section')

            <!-- Logo Cloud -->
            @include('pages.home._sponsor-logo')
        </main>

        <!-- What is ICW and ICW Goal -->
        @include('pages.home._introduction')

        <!-- Start : Competition Event -->
        <section id="events" class="w-full bg-bgsection-0 py-24 px-14 sm:px-24 md:px-40">
            @include('pages.home._event-section', [
                'events' => $events->where('type', 'competition'),
                'title' => 'Competition Event',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, officia?'
            ])
        </section>
        <!-- END : Competition Event -->

        <!-- Start : Non-Competition Event -->
        <section class="w-full bg-bgsection-0 py-6 px-10 sm:px-24 md:px-24">
            @include('pages.home._event-section', [
                'events' => $events->where('type', 'non-competition'),
                'title' => 'Non-Competition Event',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, officia?'
            ])
        </section>
        <!-- END : Non-Competition Event -->

        <!-- Start : Our Last Recap -->
        @include('pages.home._recap')
    </div>
        <style>
            iframe {
                width: 75%;
                aspect-ratio:16/ 9;
            }
        </style>
</x-guest-layout>
