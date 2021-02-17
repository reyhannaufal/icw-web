<a href="{{ route('event-info', Str::slug($event->tname, '-')) }}"  class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white sm:h-12 sm:w-12">
        <svg class="h-6 w-6" x-description="Heroicon name: outline/inbox" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
        </svg>
    </div>
    <div class="ml-4">
        <p class="text-base font-medium text-gray-900">
            {{ $event->name }}
        </p>
        <p class="mt-1 text-sm text-gray-500">
            {{ $event->description }}
        </p>
    </div>
</a>
