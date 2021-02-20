<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="md:w-full mx-auto sm:max-w-md mt-6 px-6 py-4">
            <h1 class="text-center text-gray-600 font-bold text-3xl">Silahkan Menyelesaikan Pendaftaran</h1>
            <div class="border-b-8 mt-3"></div>
            <div class="mt-5 mx-auto">
                <h3 class="text-xl text-gray-800">Deskripsi pembayaran</h3>
                <ul class="mt-3 list-decimal text-gray-600">
                    <li>Pastikan melakukan pembayaran dengan benar.</li>
                    <li>Silahkan upload bukti pembayaran dibawah</li>
                    <li>Tunggu untuk konfirmasi admin</li>
                </ul>
            </div>
        </div>
        <x-jet-authentication-card>

            <x-jet-validation-errors class="mb-4" />

            <div class="mb-12">
                <h2 class="text-base font-medium text-gray-900" id="announcements-title">
                    Pembayaran bisa dilakukan melalui:
                </h2>
                <div class="flow-root mt-6">
                    <ul class="-my-5 divide-y divide-gray-200">
                        @forelse($bills as $bill)
                            <li class="py-5">
                                <div class="relative">
                                    <h3 class="text-sm font-semibold text-gray-800">
                                        <!-- Extend touch target to entire panel.blade.php -->
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        {{ $bill->bank_name }}
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-600 line-clamp-2">
                                        {{ $bill->account_name }}
                                    </p>
                                    <p class="mt-1 text-sm text-gray-600 line-clamp-2">
                                        {{ $bill->account_number }}
                                    </p>
                                </div>
                            </li>
                        @empty
                            <p class="py-5 relative text-sm font-semibold text-gray-800">Tidak ada info rekening.</p>
                        @endforelse
                    </ul>
                </div>
            </div>

            <form method="POST" action="{{ route('event-register', Str::slug($event->name, '-')) }}">
                @csrf

                <div>
                    <x-jet-label for="payment_receipt" value="{{ __('Bukti bayar') }}" />
                    <x-jet-input id="payment_receipt" class="block mt-1 w-full" type="file" accept="image/*" name="payment_receipt" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-6">
                    <x-jet-button class="ml-4">
                        {{ __('Daftar') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </div>
</x-app-layout>
