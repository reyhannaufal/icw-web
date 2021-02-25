<div class="rounded card min-w-sm border border-gray-700 bg-gray-700 text-gray-50
            transition-shadow shadow-xl hover:shadow-xl min-w-max"
>
    <!---->
    <div class="w-full card__media hover:opacity-50">
        <a href="{{ asset('storage/' . $user->participation->payment_receipt_path) }}" target="_blank">
            <img src="{{ asset('storage/' . $user->participation->payment_receipt_path) }}"
                class="h-96 w-96 card-img object-fill"
            >
        </a>
    </div>

    <div class="flex items-center p-4">
        <div class="relative flex flex-col items-center w-full">
            <div class="relative flex flex-col space-y-1 justify-center items-center w-full">
                <span class="text-md whitespace-nowrap text-gray-50 font-semibold">
                    {{ $user->name }}
                </span>
                <span class="text-md whitespace-nowrap text-gray-100">
                    {{ $user->email }}
                </span>
                <span class="text-md whitespace-nowrap text-gray-100">
                    {{ $user->phone_number }}
                </span>
                <div class="py-4 flex space-x-2">
                    <button
                        class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring
                                focus:border-blue-300 rounded max-w-max border bg-transparent border-purple-400
                                text-purple-400 hover:border-purple-800 hover:border-purple-500 px-4 py-1 flex
                                items-center hover:shadow-lg"
                        onclick="showRejectModal({{ $user->participation->event_id  }}, {{ $user->participation->user_id }}, '{{ $user->name }}', '{{ $user->email }}')"
                    >
                        <span class="mr-2"></span>TOLAK<span class="ml-2"></span>
                    </button>
                    <button
                        class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring
                               focus:border-blue-300 rounded max-w-max text-gray-100 bg-green-500 hover:bg-green-600
                               px-4 py-1 flex items-center hover:shadow-lg"
                        onclick="changePStatus({{ $user->participation->event_id  }}, {{ $user->participation->user_id }}, '{{ $user->name }}', '{{ $user->email }}', 'success')"
                    >
                        <span class="mr-2"><svg height="20" width="20" viewBox="0 0 32 32"
                                                class="fill-current text-red-100"><path
                                    d="M22.5,4c-2,0-3.9,0.8-5.3,2.2L16,7.4l-1.1-1.1C12,3.3,7.2,3.3,4.3,6.2c0,0-0.1,0.1-0.1,0.1c-3,3-3,7.8,0,10.8L16,29	l11.8-11.9c3-3,3-7.8,0-10.8C26.4,4.8,24.5,4,22.5,4z"></path></svg>
                        </span>
                        TERIMA
                        <span class="ml-2"></span>
                    </button>
                </div>
                <div class="pt-1 pb-2 flex justify-center">
                    <p class="text-xs text-gray-400">
                        Terdaftar pada: {{ $user->participation->created_at }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!---->
</div>
