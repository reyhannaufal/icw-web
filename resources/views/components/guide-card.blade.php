<div class="mb-10 max-w-5xl rounded-xl bg-white shadow-xl py-4 sm:py-8 px-10 mx-auto">
    <div class="bg-white">
        <div class="py-4 max-w-7xl mx-auto sm:px-2 lg:px-4">
            <h2 class="text-lg"><strong>{{ $title }}</strong></h2>
            <ul class="tracking-wide space-y-1.5 font-sans list-decimal py-1 md:pl-10 pl-4 text-justify">
                {{ $slot }}
            </ul>
        </div>
    </div>
</div>
