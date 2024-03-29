@php
    $start_at = $event->getDate('start_at', 'day');
    $end_at = $event->getDate('end_at', 'day');

    $text =  $start_at . ( ($start_at == $end_at) ? '' :  ' - ' . $end_at );

    // Disabled == true if event is expired
    $disabled = (!$event->notExpired());
@endphp
<!-- If disabled, give opacity-50 -->
<div class="{{ (!$disabled) ?: 'opacity-50' }}">
    <div class="mt-6 mb-2">
        <div class="mb-4">
            <h3 class="text-lg font-medium">
                <a {{ ($disabled) ?: 'href=' . route('event-register', Str::slug($event->name, '-')) }}
                   class="focus:outline-none">
                    <!-- Extend touch target to entire panel.blade.php -->
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    {{ $event->name }}
                </a>
            </h3>
            <p class="text-xs">
                {{ $text }}
            </p>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            {{ $event->description }}
        </p>
    </div>
    <span class="absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
          aria-hidden="true">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
           viewBox="0 0 24 24">
      <path
          d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z"></path>
      </svg>
    </span>
</div>
