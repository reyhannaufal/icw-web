<x-app-layout>
    <div class="p-0 m-0 box-border">
        <div class="antialiased p-0 m-0">
            <div class="z-10"
                 style="position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);">

                <div class="flex flex-col register-card">

                    <div class="flex flex-wrap content-around pt-4 pb-4 pl-8 pr-8 sm:pl-12 sm:pr-12 sm:pt-6 sm:pb-6 register-card-top">
                        <a class="text-lg sm:text-xl font-semibold">{{ $event_name }}</a>
                        <a class="text-base sm:text-lg status-text">{{ $text }}</a>
                    </div>

                    <div class="flex flex-row flex-wrap pl-8 pr-8 sm:pl-12 sm:pr-12 content-center register-card-bot"
                         style="
                             border-radius: 0px 0px inherit inherit;
                             background: {{ $rgba }};
                             backdrop-filter: blur(20px);
                             overflow: hidden;">
                        <a class="flex-1 text-lg sm:text-xl">{{ (isset($price)) ? $price : '' }}</a>
                        <a class="flex1 font-semibold text-lg sm:text-xl">{{ ($price == 'Gratis') ? '' : $status }}</a>
                    </div>
                </div>
            </div>


            <div class="register-card-circles">
                <div class="circle-left"></div>
                <div class="circle-right"></div>
                <div class="absolute register-container">
                    @if ($status === 'Failed')
                        <form method="POST" action="{{ route('reset-status', Str::slug($event_name, '-')) }}">
                            @csrf
                            <button class="text-black font-bold py-3 px-5 register-btn hover:border-none">
                                Upload Ulang
                                <br>
                                Bukti Pembayaran
                            </button>
                        </form>
                    @elseif ($status === 'Success')
                        <a href="{{ route('events.show', Str::slug($event_name, '-')) }}">
                            @csrf
                            <button class="text-black font-bold py-3 px-5 register-btn hover:border-none">
                                Buka Menu
                                <br>
                                Info Event
                            </button>
                        </a>
                    @elseif ($price === 'Gratis')
                        <form method="POST" action="{{ route('event-register', Str::slug($event_name, '-')) }}">
                            @csrf
                            <button class="text-black font-bold py-3 px-5 register-btn hover:border-none">
                                Daftar Sekarang
                            </button>
                        </form>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
