<x-guest-layout>
    @php echo '<script type="text/javascript"> changeTitleTo("Form Event")</script>' @endphp

    <div class="font-body overflow-hidden bg-bgsection-0">
        <p class="text-center text-white">
            Page ini berisi form event
            <br>
            <strong>
                {{ $event->name }}
            </strong>
        </p>
    </div>

</x-guest-layout>
