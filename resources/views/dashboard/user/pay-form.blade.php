<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-20">
        <div class="md:w-full mx-auto sm:max-w-md mt-6 px-6 py-4">
            <h1 class="text-center text-gray-600 font-bold text-3xl">Silahkan Menyelesaikan Pendaftaran</h1>
            <div class="border-b-8 mt-3"></div>
            @if ($event->name != 'Workshop Career Building')
                <div class="mt-5 mx-auto">
                    <h3 class="text-xl text-gray-800">Deskripsi pembayaran</h3>
                    <ul class="mt-3 list-decimal text-gray-600">
                        <li>Pastikan melakukan pembayaran dengan benar.</li>
                        <li>Silahkan upload bukti pembayaran dibawah</li>
                        <li>Tunggu konfirmasi admin</li>
                    </ul>
                </div>
            @endif
            @if ($event->name != 'Paper Competition')
                <div class="mt-5 mx-auto">
                    <h3 class="text-xl text-gray-800">Cara {{ $event->name == 'Workshop Career Building' ? 'pendaftaran' : 'pembayaran'}}<br> <span
                                class="text-indigo-800">Event {{$event->name}}.</span></h3>
                    <ul class="mt-3 list-decimal text-gray-600">
                        @if ($event->name == 'Workshop Career Building')
                            <li>Lakukan pembayaran.</li>
                            <li>Follow instagram @indocoritssc.</li>
                            <li>Follow instagram @icw2021.</li>
                            <li>Subscribe youtube Indocor ITS SC <a href="https://bit.ly/YOUTUBEINDOCORITSSC"
                                                                     class="underline text-blue-600">bit.ly/YOUTUBEINDOCORITSSC</a>.
                            </li>
                            <li>Share poster event terkait dan tag 3 teman dan tag @icw2021.</li>
                            <li>Upload bukti-bukti di atas di link berikut  <a href="http://bit.ly/PendaftaranCareerBuildingICW"
                                                                               class="underline text-blue-600">bit.ly/PendaftaranCareerBuildingICW</a>.
                            </li>
                            <li>Setelah mengupload bukti-bukti, klik tombol <strong>daftar</strong> dibawah ini.</li>
                        @else
                            <li>Upload bukti memfollow instagram @indocoritssc.</li>
                            <li>Upload bukti memfollow instagram @icw2021.</li>
                            <li>Upload bukti subscribe youtube Indocor ITS SC <a href="https://bit.ly/YOUTUBEINDOCORITSSC"
                                                                                 class="underline text-blue-600">bit.ly/YOUTUBEINDOCORITSSC</a>.
                            </li>
                            <li>Upload bukti share poster event terkait dan tag 3 teman dan tag @icw2021.</li>
                            <li>Semua file dikumpulkan pada satu google drive.</li>
                            <li>Link google drive harap di set untuk dapat dibuka secara umum. <br> <a
                                        href="https://support.google.com/drive/answer/2494822?co=GENIE.Platform%3DDesktop&hl=en"
                                        class="underline text-blue-600">Bantuan untuk membuka drive secara umum</a>.
                            </li>
                            <li>Upload link google drive anda dibawah.</li>
                        @endif
                    </ul>
                </div>
            @endif
        </div>
        <x-jet-authentication-card>

            <x-jet-validation-errors class="mb-4"/>

            @if (isset($payment_info))
                <div class="mb-6">
                    <div class="mb-2 text-base font-medium text-gray-900">
                        <strong>{{ $payment_info['batch'] }}</strong>
                    </div>
                    <div class="text-center text-base font-medium text-gray-900">
                        <strong>Rp. {{ $payment_info['batch_price'] }}</strong>
                    </div>
                </div>
            @elseif ($event->name != 'Workshop Career Building')
                <div class="mb-6 text-center text-base font-medium text-gray-900">
                    <strong>
                        @if ($event->isFree())
                            Event ini Gratis
                        @else
                            Rp. {{ $event->price }}
                        @endif
                    </strong>
                    @if($event->isFree())
                        @if ($event->name != 'Workshop Career Building')
                            <h3 class="mt-3 animate-bounce">Upload link drive kamu dibawah!</h3>
                        @endif
                    @endif
                </div>
            @endif

            @if (!$event->isFree())
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
                                <p class="py-5 relative text-sm font-semibold text-gray-800">Tidak ada info
                                    rekening.</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('event-register', Str::slug($event->name, '-')) }}"
                  enctype="multipart/form-data">
                @csrf

                @if (!$event->isFree())
                    <div>
                        <x-jet-label for="payment_receipt" value="{{ __('Bukti bayar') }}"/>
                        <x-jet-input id="payment_receipt" class="block mt-1 w-full" type="file" accept="image/*"
                                     name="payment_receipt" required autofocus/>
                    </div>
                @endif

                @if ($event->name != 'Paper Competition' && $event->name != 'Workshop Career Building')
                    <div class="{{ ($event->isFree()) ?: 'mt-4' }}">
                        <x-jet-label for="gdrive" value="{{ __('Link Google Drive') }}"/>
                        <x-jet-input id="gdrive"
                                     class="h-8 font-sans block mt-1 w-full border border-black border-opacity-100"
                                     type="text" name="gdrive"
                                     required autofocus
                        />
                    </div>
                @endif

                <div class="flex items-center
                        {{ $event->name == 'Workshop Career Building' ? 'justify-center' : 'justify-end mt-6' }}">
                    <x-jet-button class="{{ $event->name == 'Workshop Career Building' ?: 'ml-4' }}">
                        {{ __('Daftar') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </div>
</x-app-layout>
