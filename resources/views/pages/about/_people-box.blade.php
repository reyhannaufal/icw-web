<li>
    <div class="space-y-6">
        <img
                class="mx-auto h-20 w-20 rounded-full xl:w-28 xl:h-28"
                src="{{ $img }}"
                alt="organization team"
        />
        <div class="space-y-2">
            <div class="text-lg leading-6 font-medium space-y-1">
                <h3>{{$name}}</h3>
                <p class="text-gray-400  hover:text-gray-500">{{ $role }}</p>
            </div>
            <ul class="flex justify-center space-x-5">
                <li>
                    <a href="{{$url_linkedin}}" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">LinkedIn</span>
                        <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                aria-hidden="true"
                        >
                            <path
                                    fill-rule="evenodd"
                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                    clip-rule="evenodd"
                            ></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</li>
