<x-guest-layout>
    @php echo '<script type="text/javascript"> changeTitleTo("About")</script>' @endphp

    <x-slot name="navbar">
        @include('pages._navbar', $events)
    </x-slot>

    <div class="font-body overflow-hidden bg-bgsection-0">
        <p class="text-center text-white">
            Page ini adalah page
            <br>
            <strong>
                About Us
            </strong>
        </p>
    </div>
</x-guest-layout>
