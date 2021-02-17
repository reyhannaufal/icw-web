<x-guest-layout>
    @php echo '<script type="text/javascript"> changeTitleTo("Info Event")</script>' @endphp


    <x-slot name="navbar">
        @include('pages._navbar', $events)
    </x-slot>

    <div class="font-body overflow-hidden bg-bgsection-0">
        <p class="text-center text-white">
            Page ini berisi informasi mengenai event
            <br>
            <strong>
                {{ $event->name }}
            </strong>
        </p>
    </div>

</x-guest-layout>
