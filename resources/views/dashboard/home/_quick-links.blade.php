<section aria-labelledby="quick-links">
    <div class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
        <h2 class="sr-only" id="quick-links-title">Quick links</h2>

        @foreach ($events as $event)
            @if ($loop->odd && $loop->last)
                <div class="text-center rounded-bl-lg  w-full relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset col-start-1 col-end-3 focus-within:ring-cyan-500">
                    <x-event.quick-link-body :event="$event"/>
                </div>
            @else
                <div class="text-justify rounded-tl-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
                    <x-event.quick-link-body :event="$event"/>
                </div>
            @endif
        @endforeach
    </div>
</section>
