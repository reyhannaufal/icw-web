<x-app-layout>
    <h1>Status pendaftaran anda: {{ $status }}</h1>

    @isset ($payment_receipt)
        <img src="{{ $payment_receipt }}"
             class="mt-4 border border-cool-gray-400 rounded-lg object-cover outline-none cursor-pointer"
             style="width: 560px; height: 337px"
        >
    @endisset
</x-app-layout>
