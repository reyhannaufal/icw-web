<x-guest-layout>
    @section('title', $event->name)
    @section('description', 'Detail About '. $event->name)
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
                            <p class="mb-10 text-white">
                                ICW memiliki tujuan untuk memberi wawasan serta menjadi wadah untuk mengaktualisasikan
                                inovasi mengenai korosi. ICW memiliki beberapa sub event, diantaranya adalah ICW Paper
                                Competition, ICW Virtual Talks, Symposium, Workshop Career Building, dan Corrosion
                                Workshop.

                            </p>
                            <a href="/register"
                               class="text-white bg-primary px-6 md:px-8 py-3 md:py-4 text-lg md:text-xl text-secondary font-bold uppercase rounded bg-indigo-500
                                bg-opacity-60 hover:bg-opacity-70">
                                Daftar!
                            </a>
                        </div>

                        <div class="lg:pr-16 flex-1 flex justify-end">
                            <img class="h-96 w-auto hidden xl:block"
                                 src="{{URL::to('assets/img/winner.svg')}}">
                        </div>
                    </div>
                </div>
            </section>

            <section class="mx-auto flex px-10 py-28 md:py-48 text-black sm:px-24 text-white relative">
                <div class="inline-grid max-w-7xl mx-auto grid grid-cols-2 md:gap-32 relative place-items-center">
                    <div class="w-auto col-span-2 md:col-span-1 ">
                        <img src="{{URL::to('assets/img/questions-animate.svg')}}" alt="question-animate"
                             class="xl:h-96 h-52 w-auto">
                    </div>
                    <div class="w-auto col-span-2 md:col-span-1 pt-28 md:pt-0"
                         data-aos-delay="100"
                         data-aos="fade-left    "
                         data-aos-duration="1000"
                         data-aos-easing="ease-in-out"
                         data-aos-mirror="false"
                         data-aos-once="false"
                         data-aos-anchor-placement="top-bottom">
                        <h2 class="text-3xl">
                            <strong>
                                Apa itu <abbr title="Indonesia Corrosion Week"
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

    @if($event->type == 'competition')
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
                <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10" data-aos="zoom-in"
                     data-aos-duration="2500">
                    <main class="py-4 px-5 md:py-6 md:px-7 text-white">
                        <strong class="text-xl md:text-2xl">Pendaftaran Batch 1</strong>
                        <p class="md:text-md text-sm pt-1 font-extralight">Tanggal Pembukaan: 7 Maret 2021</p>
                        <p class="md:text-md text-sm pt-1 font-extralight">Hingga: 26 Maret 2021</p>
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

                <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10" data-aos="zoom-in"
                     data-aos-duration="2500">
                    <main class="py-4 px-5 md:py-6 md:px-7 text-white">
                        <strong class="text-xl md:text-2xl">Pendaftaran Batch 2</strong>
                        <p class="md:text-md text-sm pt-1 font-extralight">Tanggal Pembukaan: 27 Maret 2021</p>
                        <p class="md:text-md text-sm pt-1 font-extralight">Hingga: 09 April 2021</p>
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
                <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10" data-aos="zoom-in"
                     data-aos-duration="2500">
                    <main class="py-4 px-5 md:py-6 md:px-7 text-white">
                        <strong class="text-xl md:text-2xl">Pendaftaran Batch 3</strong>
                        <p class="md:text-md text-sm pt-1 font-extralight">Tanggal Pembukaan:10 April 2021</p>
                        <p class="md:text-md text-sm pt-1 font-extralight">Hingga: 17 April 2021</p>
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
                <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10" data-aos="zoom-in"
                     data-aos-duration="2500">
                    <main class="py-4 px-5 md:py-6 md:px-7 text-white">
                        <strong class="text-xl md:text-2xl">Pengumuman Finalis</strong>
                        <p class="md:text-md text-sm pt-1 font-extralight">Tanggal: 25 April 2021</p>
                    </main>
                </div>


                <div class="absolute left-1/4 top-10 md:left-1/3 md:-top-8">
                    <img src="{{URL::to('assets/img/ComEvent.png')}}" alt="competition-event"
                         class="h-40 sm:h-52 md:h-72">
                </div>
            </div>
        </section>
    @endif

    <div class="text-white py-16">
        <div
                class="max-w-2xl mx-auto text-center py-24 px-4 md:py-36 sm:px-6 lg:px-8 xl:border-4 xl:rounded-xl"
        >
            <h2 class="text-3xl font-extrabold  md:text-4xl animate-bounce">
                <span class="block">Ayoo tunggu apa lagi?</span>
            </h2>
            <p class="mt-4 text-xl leading-6">
                Excuses will always be there for you. Opportunity won’t.
            </p>
            <a
                    onclick="_scrollTo(this, 'header')"
                    class="cursor-pointer mt-8 w-full inline-flex bg-white  items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-black hover:bg-gray-400 sm:w-auto"
            >
                Daftar Sekarang
            </a>
        </div>
    </div>

    {{-- prize section --}}

    @if($event->type == 'competition')
    <section class="flex flex-col flex-1 xlplus:px-0 px-10 bg-bgsection-0 py-28 items-center">
        <div class="text-3xl font-bold self-center">
            <h1 class="text-white">Hadiah Kompetisi</h1>
        </div>

        <div class="text-sm font-medium self-center text-captionprize-0 text-center py-4">
            <p>
                There’s no event that complete without the prizes to appreciate the winner!
                <br>
                Get your chance to win some cash.
            </p>
        </div>


        <div class="py-10 w-1/2 self-center">
            <img src=" {{URL::to('assets/img/prize.png')}} " alt="prize-reward">
        </div>


        <div class="flex">
            <div class="flex-1">
                <div class="grid grid-cols-3 gap-20">


                    <div
                            class="row-start-2 md:col-start-1  md:row-start-1 col-span-3 md:col-span-1 transform duration-200 w-auto bg-bgsection-0 rounded-xl shadow-neu self-center hover:scale-105">
                        <div class="flex flex-col px-10 py-10 text-white">
                            <h1 class="font-semibold self-center text-sm pb-4">
                                2nd Winner
                            </h1>

                            <p class="font-bold text-2xl self-center text-center">
                                ???
                                <br>
                                IDR

                            </p>
                        </div>


                    </div>


                    <div
                            class="row-start-1 md:row-start-1  col-span-3 md:col-span-1 transform duration-200 w-auto bg-bgsection-0 rounded-xl shadow-neu self-center flex-1 hover:scale-110">
                        <div class="flex flex-col px-10 py-10 text-white">
                            <h1 class="font-semibold self-center text-sm pb-4">
                                1st Winner
                            </h1>

                            <p class="font-bold text-2xl self-center text-center">
                                ???
                                <br>
                                IDR

                            </p>
                        </div>


                    </div>


                    <div
                            class="col-span-3 md:col-span-1 transform duration-200 w-auto bg-bgsection-0 rounded-xl shadow-neu self-center hover:scale-105">
                        <div class="flex flex-col px-10 py-10 text-white">
                            <h1 class="font-semibold self-center text-sm pb-4">
                                3rd Winner
                            </h1>

                            <p class="font-bold text-2xl self-center text-center">
                                ??
                                <br>
                                IDR

                            </p>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        </div>

    </section>
    @endif

    <div class="bg-gray-100">
        <div class="pt-12 sm:pt-16 lg:pt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl lg:text-5xl">
                        Penanggung Jawab Event
                    </h2>
                    <p class="mt-4 text-xl text-gray-600">
                        Kordinator dari {{$event->name}}
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-100"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                        <div class="flex-1 bg-white px-6 py-8 lg:p-12">
                            <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
                                Ahmad Ramadhani
                            </h3>

                            <p class="mt-6 text-base text-gray-500">Phone Number : 08133472313265</p>
                            <p class="mt-1 text-base text-gray-500">Line ID : ramdhoni</p>
                            <p class="mt-1 text-base text-gray-500">Email : icw.its@gmail.com</p>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <h4 class="flex-shrink-0 pr-4 bg-white text-sm tracking-wider font-semibold uppercase text-indigo-600">
                                        Apa yang termasuk?
                                    </h4>
                                    <div class="flex-1 border-t-2 border-gray-200"></div>
                                </div>
                                <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-400"
                                                 x-description="Heroicon name: solid/check-circle"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">
                                            Sertifikat
                                        </p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-400"
                                                 x-description="Heroicon name: solid/check-circle"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">
                                            Hadiah
                                        </p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-400"
                                                 x-description="Heroicon name: solid/check-circle"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">
                                            Pengalaman
                                        </p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-400"
                                                 x-description="Heroicon name: solid/check-circle"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">
                                            Relasi
                                        </p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="py-8 px-6 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                            <p class="text-lg leading-6 font-medium text-gray-900">
                                Guidebook
                            </p>
                            <div class="mt-4 flex items-center justify-center text-5xl font-extrabold text-gray-900">
                <span>
                  {{$event->price}}
                </span>
                                <span class="ml-3 text-xl font-medium text-gray-500">
                  Rp
                </span>
                            </div>
                            <p class="mt-4 text-sm">
                                <a href="#" class="font-medium text-gray-500 underline">
                                    Pelejari lebih lanjut tentang Guidebook
                                </a>
                            </p>
                            <div class="mt-6">
                                <div class="rounded-md shadow">
                                    <a href="#"
                                       class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-900">
                                        Download GuideBook
                                    </a>
                                </div>
                            </div>
                            <div class="mt-4 text-sm">
                                <a href="#" class="font-medium text-gray-900">
                                    Ukuran Dokumen
                                    <!-- space -->
                                    <span class="font-normal text-gray-500">
                    (20MB)
                  </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>
