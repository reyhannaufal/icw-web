@php
    $delayTo = '';
    if(str_contains($route, 'scrollTo:')) {
        $datas = explode(" ", $route);
        $route = '';

        if (count($datas) == 2) {
            $scrollTo = $datas[1];
        } else if (count($datas) == 3) {
            $scrollTo = $datas[2];
            if (Route::current()->uri() != $datas[0]) {
                $delayTo = $datas[0];
            }
        }
    } else {
        $scrollTo = '';
    }
@endphp

<div class="px-5 py-2">
    <a {{ empty($route) ?: "href=$route" }}
       onclick="{{ empty($scrollTo) ?: ('_scrollTo(this, "' . $scrollTo . '", "' . $delayTo . '")') }}"
       class="{{ !empty($route) ?: 'cursor-pointer' }} text-base text-gray-500 hover:text-gray-900">
        {{ $name }}
    </a>
</div>
