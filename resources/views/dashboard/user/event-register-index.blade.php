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
                        <a class="text-lg sm:text-xl font-semibold">{{ $data['event_name'] }}</a>
                        <a class="text-base sm:text-lg status-text">{{ $data['text'] }}</a>
                    </div>

                    <div class="flex flex-row flex-wrap pl-8 pr-8 sm:pl-12 sm:pr-12 content-center register-card-bot"
                         style="
                             border-radius: 0px 0px inherit inherit;
                             background: {{ $data['rgba'] }};
                             backdrop-filter: blur(20px);
                             overflow: hidden;">
                        <a class="flex-1 text-lg sm:text-xl">{{ $data['price'] }}</a>
                        <a class="flex1 font-semibold text-lg sm:text-xl">{{ $data['status'] }}</a>
                    </div>
                </div>
            </div>


            <div class="register-card-circles">
                <div class="circle-left"></div>
                <div class="circle-right"></div>
                @if ($data['status'] === 'Failed')
                    <div class="absolute register-container">
                        <form method="POST" action="{{ route('reset-status', Str::slug($data['event_name'], '-')) }}">
                            @csrf
                            <button class="text-black font-bold py-3 px-5 register-btn">
                                Upload Ulang
                                <br>
                                Bukti Pembayaran
                            </button>
                        </form>
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
