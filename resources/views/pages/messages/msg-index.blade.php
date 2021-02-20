<x-guest-layout>
    @php echo '<script type="text/javascript"> changeTitleTo("Messages")</script>' @endphp

    <x-slot name="navbar">
        @include('pages._navbar', $events)
    </x-slot>

    <h1>Ini messages index</h1>
</x-guest-layout>
