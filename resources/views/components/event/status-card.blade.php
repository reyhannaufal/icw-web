<div class="p-0 m-0 box-border">
    <div class="antialiased p-0 m-0">
        <div class="z-10"
             style="position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);">

            <div class="flex flex-col"
                 style="
                position: relative;
                height: 270px;
                width: 450px;
                border-radius: 25px;
                background: rgba(227, 232, 255, 0.5);
                border: 0.5px solid rgba(255, 255, 255, 0.1);
                box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.2);
                overflow: hidden;">

                <div class="flex flex-wrap content-around pt-6 pb-6 pl-12 pr-12"
                     style="
                    height: 185px;
                    width: 450px;">
                        <a class="text-xl font-semibold">{{ $data['event_name'] }}</a>
                        <a class="text-lg">{{ $data['text'] }}</a>
                </div>

                <div class="flex flex-row flex-wrap pl-12 pr-12 content-center"
                     style="
                         height: 85px;
                         width: 450px;
                         border-radius: 0px 0px inherit inherit;
                         background: {{ $data['rgba'] }};
                         overflow: hidden;">
                    <a class="flex-1 text-xl">{{ $data['price'] }}</a>
                    <a class="flex1 font-semibold text-xl">{{ $data['status'] }}</a>
                </div>
            </div>
        </div>
        @if ($data['status'] === 'Failed')
            <div class="absolute left-0 right-0 top-2/3 text-center"
                style="
                    margin-left: auto;
                    margin-right: auto;
                ">
                <form method="POST" action="{{ route('reset-status', Str::slug($data['event_name'], '-')) }}">
                    @csrf
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Upload Ulang
                        <br>
                        Bukti Pembayaran
                    </button>
                </form>
            </div>
        @endif

        <div style="position: absolute;
            height: 270px;
            width: 450px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);">
            <div style="height: 180px;
                width: 180px;
                top: -50px;
                left: -60px;
                position: absolute;
                border-radius: 50%;
                backdrop-filter: blur(20px);
                background: rgba(36, 69, 121, 1);
                box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.2);"></div>
            <div style="height: 200px;
                width: 200px;
                bottom: -90px;
                right: -90px;
                position: absolute;
                border-radius: 50%;
                backdrop-filter: blur(20px);
                background: rgba(36, 69, 121, 1);
                box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.2);"></div>
        </div>

    </div>
</div>
