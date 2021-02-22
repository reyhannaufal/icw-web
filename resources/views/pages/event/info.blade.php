<x-guest-layout>
    @php echo '<script type="text/javascript"> changeTitleTo("Info Event ")</script>' @endphp

    <div class="font-body">
        <main class="bg-bgsection-0  overflow-hidden">
            <section class="lg:h-screen relative px-6 flex flex-row">

                <div class="absolute -right-10 md:-right-0 -top-0">
                    <img src="{{ URL::to('assets/img/event-top-hero.png')}}" alt="jelly-bg" class="h-36 lg:h-52">
                </div>

                <div class="absolute -right-full md:-right-0 bottom-10">
                    <img src="{{URL::to('assets/img/event-bottom-hero.png')}}" alt="aksen-bg" class="h-64 lg:h-96">
                </div>

                <div class="container flex flex-row content-center justify-center pb-40 mx-auto z-10">
                    <div class="flex flex-1 flex-col pt-8 md:flex-row md:pt-16 items-center lg:px-36 mt-5"
                         data-aos="fade-up" data-aos-duration="3000">
                        <div class="mb-4 md:w-6/12 md:mb-0 lg:pl-12 lg:w-5/12 sm:mb-16">
                            <h2 class="text-xl text-white font-bold text-secondary-600 uppercase mt-20 lg:mt-5">
                                INDOCOR</h2>
                            <h1 class="text-white text-4xl md:text-5xl font-bold text-secondary leading-tight mb-6 md:mb-10">
                                {{$event->name}}</h1>
                            <p class="mb-10 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor
                                hic labore optio quae
                                repellendus sed sequi sint voluptatem. Fugit, tenetur.</p>
                            <a href="/register"
                               class="text-white bg-primary px-6 md:px-8 py-3 md:py-4 text-lg md:text-xl text-secondary font-bold uppercase rounded bg-indigo-500
                                bg-opacity-60 hover:bg-opacity-70">
                                Sign Up Now!
                                </a>
                        </div>

                        <div class="lg:pr-16 flex-1 flex justify-end">
                            <img class="h-96 w-auto hidden xl:block"
                                 src="{{URL::to('assets/img/winner.svg')}}">
                        </div>
                    </div>
                </div>
            </section>

            <section class="mx-auto flex px-10 py-48 text-black sm:px-24 bg-white relative">
                <div class="inline-grid max-w-7xl mx-auto grid grid-cols-2 md:gap-32 relative place-items-center">
                    <div class="w-auto col-span-2 md:col-span-1 ">
                        <img src="{{URL::to('assets/img/notes.svg')}}" alt="question-animate"
                             class="xl:h-96 h-52 w-auto">
                    </div>
                    <div class="w-auto col-span-2 md:col-span-1 pt-28 md:pt-0"
                         data-aos-delay="100"
                         data-aos="fade-left"
                         data-aos-duration="1000"
                         data-aos-easing="ease-in-out"
                         data-aos-mirror="false"
                         data-aos-once="false"
                         data-aos-anchor-placement="top-bottom">
                        <h2 class="text-3xl">
                            <strong>
                                What is <abbr title="Indonesia Corrosion Week"
                                              class="no-underline">ICW</abbr> {{$event->name}}
                            </strong>
                        </h2>
                        <p class="pt-6 font-extralight text-sm lg:text-lg">
                            {{$event->description}}
                        </p>
                    </div>
                </div>
            </section>

        </main>
    </div>


    <section class="w-full bg-bgsection-0 py-24 px-4 sm:px-24 md:px-40 relative md:mt-32">
        <div class="flex flex-1 md:mb-16 relative mx-auto z-10">
            <div class="w-full text-white text-center place-self-center">
                <header class="text-3xl  sm:text-4xl mdl:text-5xl lg:text-6xl">
                    <strong class="font-bold text-gray-300 tracking-tight">
                        Timeline
                    </strong>
                </header>
            </div>
        </div>

        <div class="grid grid-cols-8 gap-y-8  pt-20 pb-8 max-w-4xl min-w-xl mx-auto">
            <div class="col-span-1 pr-3 pt-2 relative">
                <div class="absolute right-2 md:right-4 -top-3 sm:top-1">
                    <svg class="w-12 md:w-14" width="57" height="290" viewBox="0 0 57 290" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M29 261.009L29 29" stroke="#BDBDBD" stroke-width="3"/>
                        <circle cx="28.5" cy="28.5" r="28.5" transform="rotate(90 28.5 28.5)"
                                fill="url(#paint0_linear)"/>
                        <circle cx="28.5" cy="28.5" r="15.5" transform="rotate(90 28.5 28.5)" fill="black"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="-1.90735e-06" y1="-1.90735e-06" x2="57"
                                            y2="57" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F2C94C"/>
                                <stop offset="1" stop-color="#F2994A"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10" data-aos="zoom-in" data-aos-duration="2500">
                <main class="py-4 px-5 md:py-6 md:px-7 text-white">
                    <strong class="text-xl md:text-2xl">Step (Regist, competition, final, etc)</strong>

                    <p class="md:text-md text-sm pt-2 font-extralight">Quick brief about the step if
                        necessary</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">date: 31th, February 2021</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">deadline: 10 years from date</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">other content, content</p>
                </main>
            </div>
            <div class="col-span-1"></div>

            <div class="col-span-1 pr-3 pt-2 relative">
                <div class="absolute right-2 md:right-4 -top-3 sm:top-1">
                    <svg class="w-12 md:w-14" width="57" height="290" viewBox="0 0 57 290" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M29 261.009L29 29" stroke="#BDBDBD" stroke-width="3"/>
                        <circle cx="28.5" cy="28.5" r="28.5" transform="rotate(90 28.5 28.5)"
                                fill="url(#paint0_linear)"/>
                        <circle cx="28.5" cy="28.5" r="15.5" transform="rotate(90 28.5 28.5)" fill="black"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="-1.90735e-06" y1="-1.90735e-06" x2="57"
                                            y2="57" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F2C94C"/>
                                <stop offset="1" stop-color="#F2994A"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10" data-aos="zoom-in" data-aos-duration="2500">
                <main class="py-4 px-5 md:py-6 md:px-7 text-white">
                    <strong class="text-xl md:text-2xl">Step (Regist, competition, final, etc)</strong>

                    <p class="md:text-md text-sm pt-2 font-extralight">Quick brief about the step if
                        necessary</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">date: 31th, February 2021</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">deadline: 10 years from date</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">other content, content</p>
                </main>
            </div>
            <div class="col-span-1"></div>

            <div class="col-span-1 pr-3 pt-2 relative">
                <div class="absolute right-2 md:right-4 -top-3 sm:top-1">
                    <svg class="w-12 md:w-14" width="57" height="290" viewBox="0 0 57 290" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M29 261.009L29 29" stroke="#BDBDBD" stroke-width="3"/>
                        <circle cx="28.5" cy="28.5" r="28.5" transform="rotate(90 28.5 28.5)"
                                fill="url(#paint0_linear)"/>
                        <circle cx="28.5" cy="28.5" r="15.5" transform="rotate(90 28.5 28.5)" fill="black"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="-1.90735e-06" y1="-1.90735e-06" x2="57"
                                            y2="57" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F2C94C"/>
                                <stop offset="1" stop-color="#F2994A"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10" data-aos="zoom-in" data-aos-duration="2500">
                <main class="py-4 px-5 md:py-6 md:px-7 text-white">
                    <strong class="text-xl md:text-2xl">Step (Regist, competition, final, etc)</strong>

                    <p class="md:text-md text-sm pt-2 font-extralight">Quick brief about the step if
                        necessary</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">date: 31th, February 2021</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">deadline: 10 years from date</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">other content, content</p>
                </main>
            </div>
            <div class="col-span-1"></div>

            <div class="col-span-1 pr-3 pt-2 relative">
                <div class="absolute right-2 md:right-4 -top-0 sm:top-1">
                    <svg class="w-12 md:w-14" width="57" height="57" viewBox="0 0 57 57" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="28.5" cy="28.5" r="28.5" transform="rotate(90 28.5 28.5)"
                                fill="url(#paint0_linear)"/>
                        <circle cx="28.5" cy="28.5" r="15.5" transform="rotate(90 28.5 28.5)" fill="black"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="-1.90735e-06" y1="-1.90735e-06" x2="57"
                                            y2="57" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F2C94C"/>
                                <stop offset="1" stop-color="#F2994A"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10" data-aos="zoom-in" data-aos-duration="2500">
                <main class="py-4 px-5 md:py-6 md:px-7 text-white">
                    <strong class="text-xl md:text-2xl">Step (Regist, competition, final, etc)</strong>

                    <p class="md:text-md text-sm pt-2 font-extralight">Quick brief about the step if
                        necessary</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">date: 31th, February 2021</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">deadline: 10 years from date</p>
                    <p class="md:text-md text-sm pt-1 font-extralight">other content, content</p>
                </main>
            </div>
            <div class="col-span-1"></div>


            <div class="absolute left-1/4 top-10 md:left-1/3 md:-top-8">
                <img src="{{URL::to('assets/img/ComEvent.png')}}" alt="competition-event"
                     class="h-40 sm:h-52 md:h-72">
            </div>
        </div>
    </section>

    <div class="bg-white text-black">
        <div
                class="max-w-2xl mx-auto text-center py-24 px-4 md:py-36 sm:px-6 lg:px-8"
        >
            <h2 class="text-3xl font-extrabold  sm:text-4xl animate-bounce">
                <span class="block">Challenge Yourself</span>
                <span class="block">Sign up today!</span>
            </h2>
            <p class="mt-4 text-xl leading-6">
                Excuses will always be there for you. Opportunity won’t.
            </p>
            <a
                    onclick="_scrollTo(this, 'header')"
                    class="cursor-pointer mt-8 w-full inline-flex bg-bgsection-0 items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white hover:bg-gray-800 sm:w-auto"
            >
                Sign up now
            </a>
        </div>
    </div>

    <section class="w-full py-40 px-20 sm:px-24 md:px-24">
        <div class="grid grid-cols-2 gap-10 relative pt-6 max-w-7xl mx-auto md:my-10">
            <div class="w-full col-span-2 text-white text-center">
                <header class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl">
                    <strong>
                        Competition Prize
                    </strong>
                </header>
            </div>

            <div class="col-span-2">
                <img src="{{URL::to('assets/img/event-prize.png')}}" alt="prize_svg"
                     class="mx-auto h-64 md:h-96">
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4 lg:gap-10 bg-table py-10 md:py-20 max-w-7xl mx-auto">

            <div class="col-span-3 md:col-span-1 w-full bg-table-0 rounded-xl">
                <main class="py-4 px-4 text-white text-center">
                    <strong class="text-2xl">1st Place</strong>
                    <p class="text-md py-4 font-extralight">3000 USD</p>
                </main>
            </div>

            <div class="col-span-3 md:col-span-1 w-full bg-table-0 rounded-xl">
                <main class="py-4 px-4 text-white text-center">
                    <strong class="text-2xl">2nd Place</strong>
                    <p class="text-md py-4 font-extralight">1000 USD</p>
                </main>
            </div>

            <div class="col-span-3 md:col-span-1 w-full bg-table-0 rounded-xl">
                <main class="py-4 px-4 text-white text-center">
                    <strong class="text-2xl">3rd Place</strong>
                    <p class="text-md py-4 font-extralight">500 USD</p>
                </main>
            </div>
        </div>
    </section>


    <div class="bg-white text-black">
        <div
                class="max-w-2xl mx-auto text-center py-24 px-4 md:py-36 sm:px-6 lg:px-8"
        >
            <h2 class="text-3xl font-extrabold  sm:text-4xl">
                <span class="block">Contact Person</span>

            </h2>
            <div class="mt-5 rounded-xl shadow-lg bg-gray-200 relative p-10">
                <h1 class="font-semibold text-lg">Ahmad Ramadhani</h1>
                <p>Coordinator of {{$event->name}}</p>
                <p>Phone Number : 08133472313265</p>
                <p>Line ID : ramdhoni</p>
                <p>Email : icw.its@gmail.com</p>
            </div>
        </div>
    </div>


</x-guest-layout>
