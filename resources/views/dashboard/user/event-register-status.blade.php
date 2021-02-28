<x-app-layout>
    <div class="font-body max-w-7xl min-w-min mx-auto pb-40 mt-16">
        <section class="flex flex-col xlplus:px-0 px-10 my-8">
            <div
                    class="flex flex-row justify-center md:justify-between overflow-hidden bg-dashboard-0 rounded-lg w-auto z-10 relative shadow-md">
                <div class="flex flex-col text-gray-700 md:px-8 py-4 w-full md:text-left text-center">
                    <h1 class="font-bold pb-4 text-xl md:text-lg">
                        Hello, {{\Illuminate\Support\Facades\Auth::user()->name}} </h1>

                    <div class="font-medium text-lg md:text-base">
                        @if(\Illuminate\Support\Facades\Auth::user()->events->count() == 0)
                            <p>Kamu belum terdaftar pada event apapun :(</p>
                        @endif
                        <p>Kamu terdaftar event sebanyak:
                            <span class="ml-2 text-xl font-bold">
                                {{\Illuminate\Support\Facades\Auth::user()->events->count()}}
                            </span>
                        </p>
                        <p class="mt-1">Semoga harimu menyenangkan!</p>
                    </div>
                </div>

                <img src="{{ \Illuminate\Support\Facades\URL::to('assets/img/dash.png') }}" alt="dash"
                     class="absolute w-0 md:relative md:w-2/4 ">

            </div>
        </section>

        <section class="mx-auto xlplus:px-0 px-10 py-6 md:py-18">
            <div class="flex-col  justify-center">
                <div class="pb-16 md:pb-28 mx-auto">
                    <h1 class="font-bold text-center text-2xl md:text-3xl tracking-wider">
                        Event Kamu
                    </h1>
                    <p class="block text-center">Berikut merupakan event-event yang telah kamu ikuti</p>
                    <div class="border-2 mt-4 rounded-xl"></div>
                </div>

            </div>

            <div class="flex justify-center items-center">
                <div class="flex-1 self-center">
                    <div class="grid grid-cols-3 gap-x-6 gap-y-8 ">
                        @foreach(\Illuminate\Support\Facades\Auth::user()->events as $event)
                            @if(\Illuminate\Support\Facades\Auth::user()->events->count() == 0)
                                <div
                                        class="col-span-3 md:col-span-1 bg-competable1-0 space-y-6
                                        rounded-xl tracking-wide transform hover:shadow-lg hover:scale-105 duration-200">
                                    <div class="border-b border-white px-2 pt-4">
                                        <h1 class="text-lg font-bold pb-2">
                                            Tidak ada event terdaftar :(
                                        </h1>
                                    </div>

                                </div>
                            @endif
                            <div
                                    class="col-span-3 md:col-span-1 bg-competable1-0 space-y-6
                                        rounded-xl tracking-wide transform hover:shadow-lg hover:scale-105 duration-200">
                                <div class="border-b border-white px-2 pt-4">
                                    <h1 class="text-lg font-bold pb-2">
                                        {{$event->name}}
                                    </h1>
                                </div>

                                <p class="font-medium text-base px-2">
                                    <strong>Harga:</strong> Rp{{$event->price}}
                                </p>

                                <p class="font-medium text-base px-2">
                                    @php
                                        $start_at = $event->getDate('start_at', 'day');
                                    @endphp
                                    <strong>Tanggal:</strong> {{$start_at}}
                                </p>

                                <p class="font-medium text-base px-2 pb-4">
                                    <strong>Deskripsi:</strong> <span class="block text-base"> {{$event->description}}</span>
                                </p>

                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section>
    </div>
</x-app-layout>
