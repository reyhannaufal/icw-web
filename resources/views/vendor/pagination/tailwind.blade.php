@if ($paginator->hasPages())
    <div class="flex flex-col items-center mt-6 mb-16">
        <div class="flex text-gray-700">
            <div class="h-8 w-8 mr-1 flex justify-center items-center">
                {{-- Previous Page Link --}}
                @if (!$paginator->onFirstPage())
                    <a href="{{ $paginator->previousPageUrl() }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4">
                            <polyline points="15 18 9 12 15 6">

                            </polyline>
                        </svg>
                    </a>
                @endif
            </div>
            <div class="flex h-8 font-medium items-center">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <div class="w-8 mx-1 md:flex justify-center items-center hidden leading-5
                            transition duration-150 ease-in  border-0">
                            {{ $element }}
                        </div>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <div class="w-8 mx-1 md:flex justify-center items-center hidden  cursor-pointer leading-5
                                            transition duration-150 ease-in  border-0 rounded-full bg-pink-600 text-white">
                                    {{ $page }}
                                </div>
                                {{-- Phone view--}}
                                <div class="w-8 h-8 md:hidden flex justify-center items-center cursor-pointer leading-5
                                            transition duration-150 ease-in border-0 rounded-full bg-pink-600 text-white">
                                    {{ $page }}
                                </div>
                            @else
                                <div class="md:flex justify-center items-center hidden leading-5
                                                transition duration-150 ease-in border-0 w-8 mx-1">
                                    <a href="{{ $url }}">{{ $page }}</a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
            <div class="h-8 w-8 ml-1 flex justify-center items-center">
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>
@endif
