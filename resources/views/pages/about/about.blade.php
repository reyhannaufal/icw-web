<x-guest-layout>
    @php echo '<script type="text/javascript"> changeTitleTo("About")</script>' @endphp

    @include('pages.about._about-intro')

    @include('pages.about._about-people')


    @include('pages.about._about-team')
</x-guest-layout>
