<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto">
        <div class="mx-8 sm:p-6 lg:p-8 bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Informasi Event
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    {{ $event->name }}
                </p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Link zoom
                        </dt>
                        <a class="text-blue-500 hover:underline"
                           href="https://www.google.com/" target="_blank">
                            <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                google.com
                            </dd>
                        </a>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Tanggal Acara
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            @php
                                $start_at = $event->getDate('start_at', 'day');
                                $end_at = $event->getDate('end_at', 'day');

                                $text =  $start_at . ( ($start_at == $end_at) ? '' :  ' - ' . $end_at );
                            @endphp
                            {{ $text }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Pukul
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            @php
                                $start_at_minute = $event->getDate('start_at', 'only minute');
                                $end_at_minute = $event->getDate('end_at', 'only minute');

                                if ($start_at_minute != $end_at_minute) {
                                    $text =  $start_at_minute . ( ($start_at == $end_at) ? '' :  ' - ' . $end_at_minute ) . ' WIB';
                                } else {
                                    $text = '-';
                                }
                            @endphp
                            {{ $text }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Deskripsi
                        </dt>
                        <dd class="text-justify mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $event->description }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Harga
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ ($event->price == 0) ? 'Gratis' : 'Rp. ' . $event->price }}
                        </dd>
                    </div>

                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Attachments
                        </dt>
                        @if ($event->name == 'Paper Competition')
                            @php $path_arr = explode("/", auth()->user()->getPaperPath()) @endphp

                            <!-- User has submit a paper -->
                            @if (count($path_arr) == 6)
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                            <div class="w-0 flex-1 flex items-center">
                                                <!-- Heroicon name: solid/paper-clip -->
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <span class="ml-2 flex-1 w-0 truncate">
                                                {{ $path_arr[5] }}
                                            </span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="{{ auth()->user()->getPaperPath() }}" target="_blank"
                                                   class="font-medium text-indigo-600 hover:text-indigo-500">
                                                    Download
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            @endif
                        @endif
                    </div>

                    <div class="text-center bg-gray-50 px-4 py-10 sm:px-6">
                        <a href="/event/{{ Str::slug($event->name, '-') }}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Info Lebih Lanjut
                            </button>
                        </a>
                    </div>
                </dl>
            </div>
        </div>
        @if ($event->name == 'Paper Competition' && $event->notExpired())
            <div class="py-12 max-w-7xl mx-auto">
                <div class="mx-8 sm:p-6 lg:p-8 bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="bg-whitepx-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:mx-0 mx-10">
                        <dt class="text-sm font-medium text-gray-500">
                            {{ ((count($path_arr) == 6) ? 'Reupload ' : 'Upload ') . 'paper' }}
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <x-event.upload-paper/>
                        </dd>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
