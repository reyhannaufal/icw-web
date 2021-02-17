<x-guest-layout>
    <x-slot name="navbar">
        @include('pages._navbar', $events)
    </x-slot>

    <div class="font-body">
        <main class="bg-bgsection-0">

            <section class="lg:h-screen relative overflow-hidden px-6 flex flex-row">

                <div class="absolute -right-10 md:-right-0 -top-0">
                    <img src="{{'assets/img/top-hero.png'}}" alt="jelly-bg" class="h-36 lg:h-52">
                </div>

                <div class="absolute -right-full md:-right-0 bottom-10">
                    <img src="{{'assets/img/bottom-hero.png'}}" alt="aksen-bg" class="h-64 lg:h-96">
                </div>

                <div class="container flex flex-row content-center justify-center pb-40 mx-auto z-10">

                    <div class="flex flex-1 flex-col pt-8 md:flex-row md:pt-16 items-center lg:px-36">

                        <div class="mb-4 md:w-6/12 md:mb-0 lg:pl-12 lg:w-5/12 sm:mb-16">
                            <h2 class="text-xl text-white font-bold text-secondary-600 uppercase mb-2">INDOCOR</h2>
                            <h1 class="text-white text-4xl md:text-5xl font-bold text-secondary leading-tight mb-6 md:mb-10">Workshop Career</h1>
                            <a href="#" class="text-white bg-primary px-6 md:px-8 py-3 md:py-4 text-lg md:text-xl text-secondary font-bold uppercase rounded bg-indigo-500 bg-opacity-60 hover:bg-opacity-70">More info</a>
                        </div>
                        <div class="lg:pr-16 flex-1 flex justify-end">
                            <img class="w-80 max-w-xl sm:max-w-xs sm:max-h-xs" src="{{'assets/img/content2.png'}}">
                        </div>

                    </div>

                </div>
            </section>

            <section class="mx-auto flex px-10 sm:px-24 pt-8 pb-24 relative border border-red-400">

                <div class="inline-grid max-w-7xl mx-auto grid grid-cols-2 text-white md:gap-32 relative place-items-center border border-blue-200">
                    <div class="w-auto col-span-2 md:col-span-1 ">
                        <img src="{{'assets/img/questions-animate.svg'}}" alt="question-animate"  class="xl:h-96 h-52 w-auto">
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
                            <strong >
                                What is <abbr title="Indonesia Corrosion Week" class="no-underline">ICW</abbr>?
                            </strong>
                        </h2>
                        <p class="pt-6 font-extralight text-sm lg:text-lg">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>

                    </div>
                </div>
                <div class="absolute -left-4 md:-left-0 -top-16">
                    <img src="{{'assets/img/event-bubble-1.png'}}" alt="jelly-bg" class="h-40 lg:h-64">
                </div>
            </section>

            <section class="w-full h-screen flex relative">


            </section>

            <section class="w-full h-screen flex">


            </section>
        </main>
    </div>
</x-guest-layout>
