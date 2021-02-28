<a href="{{ route('event-info', Str::slug($event->name, '-')) }}"
   class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
>
    <div class="ml-4">
        <p class="text-base font-semibold text-gray-900">
            {{ $event->name }}
        </p>
        <p class="mt-1 text-sm text-gray-500">
            {{ $event->description }}
        </p>
    </div>
</a>
