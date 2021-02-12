<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-800">
    <div>
        {{ $logo }}
    </div>

    <div class="md:w-full mx-auto sm:max-w-md mt-6 px-6 py-4 bg-gray-50 shadow-md overflow-hidden rounded-2xl">
        {{ $slot }}
    </div>
</div>
