<section aria-labelledby="quick-links">
    <div class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
        <h2 class="sr-only" id="quick-links-title">Quick links</h2>

        <div class="rounded-tl-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
            <x-event.quick-link-body :event="$events[0]"/>
        </div>

        <div class="rounded-tr-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
            <x-event.quick-link-body :event="$events[1]"/>
        </div>

        <div class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
            <x-event.quick-link-body :event="$events[2]"/>
        </div>

        <div class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
            <x-event.quick-link-body :event="$events[3]"/>
        </div>

        <div class="rounded-bl-lg  relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
            <x-event.quick-link-body :event="$events[4]"/>
        </div>

        <div class="rounded-br-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
            <x-event.quick-link-body :event="$events[4]"/>
        </div>
    </div>
</section>
