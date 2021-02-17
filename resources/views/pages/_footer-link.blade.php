@php
    if(str_contains($route, 'scrollTo:')) {
        $scrollTo = explode(" ", $route)[1];
        $route = '';
    } else {
        $scrollTo = '';
    }
@endphp

<div class="px-5 py-2">
    <a {{ empty($route) ?: "href=$route" }}
       onclick="{{ empty($scrollTo) ?: '_scrollTo(this, "' . $scrollTo . '")' }}"
       class="{{ !empty($route) ?: 'cursor-pointer' }} text-base text-gray-500 hover:text-gray-900">
        {{ $name }}
    </a>
</div>
