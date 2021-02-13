@extends('pages.layout.page-layout')
    @section('content')
    <div class="font-body overflow-hidden">
        <main class="bg-bgsection-0">
            <!-- Hero section -->
            <div class="relative bg-bgsection-0">
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-bgsection-0"></div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="relative  py-2 shadow-xl sm:rounded-2xl sm:overflow-hidden">
                        <div class="absolute inset-0 lg:mt-10">
                            <div class="absolute inset-0"></div>
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2830&amp;q=80&amp;sat=-100" alt="People working on laptops">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-800 to-indigo-700" style="mix-blend-mode: multiply;"></div>
                        </div>
                        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                            <h1 class="text-center text-3xl font-extrabold tracking-tight sm:text-4xl animate-pulse lg:text-5xl">
                                <span class="block text-white">Indonesian Corrosion Week</span>
                                <span class="block text-indigo-200">Sepuluh Nopember Institute of Technology</span>
                            </h1>
                            <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl">
                                Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                            </p>
                            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                    <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">
                                        About Us
                                    </a>
                                    <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                                        Last Recap
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo Cloud -->
            <div class="bg-bgsection-0">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                    <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide">
                        Sponsored by
                    </p>
                    <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
                        </div>
                        <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <section class=" bg-bgsection-0 mx-auto flex px-10 sm:px-24 pt-40 pb-24">
            <div class="inline-grid max-w-7xl mx-auto grid grid-cols-2 text-white md:gap-32 relative place-items-center">
                <div class="w-auto col-span-2 md:col-span-1 ">
                    <img src="{{'assets/img/questions-animate.svg'}}" alt="question-animate"  class="xl:h-96 h-52 w-auto">
                </div>
                <div class="w-auto col-span-2 md:col-span-1 pt-28 md:pt-0">
                    <h2 class="text-3xl">
                        <strong>
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

        </section>

        <!-- END : What is ICW? -->

        <!-- Start : ICW GOAL -->
        <section class="w-full bg-bgsection-0 mx-auto flex px-10 sm:px-24 py-24 relative">

            <div class="inline-grid  max-w-7xl mx-auto grid grid-cols-2 text-white md:gap-32 relative place-items-center">
                <div class="w-auto col-span-2 md:col-span-1 pt-28 md:pt-0">

                    <h2 class="text-3xl">
                        <strong>
                            <abbr title="Indonesia Corrosion Week" class="no-underline">ICW</abbr> Goal !
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
                <div class="row-start-1 md:col-start-2 col-span-2 md:col-span-1 ">
                    <img src="{{'assets/img/math.svg'}}" alt="content-3" class="xl:h-96 h-52 w-auto">
                </div>

            </div>
            <div class="absolute -right-16 lg:-right-5 -top-20 w-32">
                <img src="{{'assets/img/jelly2.png'}}" alt="jelly-bg" class="h-48 lg:h-64 w-auto">
            </div>

        </section>
        <!-- END: ICW GOAL -->


        <!-- Start : Competition Event -->

        <section class="w-full bg-bgsection-0 py-24 px-14 sm:px-24 md:px-40">
            <div class="grid grid-cols-2 relative max-w-7xl mx-auto" data-aos="fade-left">
                <div class="w-full col-span-2 text-white text-center absolute place-self-center">
                    <header class="text-3xl sm:text-4xl mdl:text-5xl lg:text-6xl">
                        <strong>
                            Competition Event
                        </strong>
                    </header>
                    <p class="py-3 text-sm lg:text-lg font-extralight lg:px-60">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, sed.
                    </p>
                </div>
                <div class="col-span-1 lg:w-3/5 place-self-end">
                    <img src="{{'assets/img/ComEvent.png'}}" alt="competition-event">
                </div>

            </div>

            <div class="grid grid-cols-2 py-20 max-w-7xl mx-auto">
                <div class="col-span-2 w-full bg-table-0 rounded-xl max-w-5xl mx-auto shadow-lg
                transition  ease-in-out transform hover:-translate-y-1 hover:scale-110" data-aos="fade-left" data-aos-easing="ease-in-sine"
                     data-aos-duration="3500">
                >
                    <header class="flex flex-rpw pt-4 px-4">
                        <svg class="px-1 animate-pulse" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#EA9696" />
                        </svg>

                        <svg class="px-1 animate-pulse" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#ffff" />
                        </svg>


                    </header>

                    <main class="py-4 px-4 text-white">
                        <strong class="text-2xl">Oil Rig Competition</strong>

                        <p class="text-sm py-4 font-extralight">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor
                            incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                        </p>
                    </main>

                    <footer class="pb-6 px-4">
                        <button class="rounded-full py-2 px-6 bg-bgnav-0 text-black">Learn More</button></footer>
                </div>
            </div>



        </section>
        <!-- END : Competition Event -->

        <!-- Start : Non-Competition Event -->
        <section class="w-full bg-bgsection-0 py-6 px-10 sm:px-24 md:px-24">
            <div class="grid grid-cols-2 relative py-6 max-w-7xl mx-auto" data-aos-easing="ease-in-sine"
                 data-aos-duration="3500" data-aos="fade-right">
                <div class="w-full col-span-2 text-white text-center absolute place-self-center">
                    <header class="text-3xl sm:text-4xl mdl:text-5xl lg:text-6xl">
                        <strong>
                            Non-Competition Event
                        </strong>
                    </header>
                    <p class="text-sm lg:text-lg py-3 font-extralight md:px-20 lg:px-60">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, officia?
                    </p>

                </div>

                <div class="col-start-3 lg:col-start-2 w-64 lg:w-3/5 place-self-start">
                    <img src="{{'assets/img/noncom.png'}}" alt="" class="">
                </div>
            </div>

            <div class="grid grid-cols-4 grid-rows-4 gap-10 bg-table py-20 max-w-7xl mx-auto">
                <div class="col-span-4 md:col-span-2 row-span-2 w-full bg-table-0 rounded-xl" data-aos-easing="ease-in-sine"
                     data-aos-duration="3500" data-aos="fade-right">

                    <header class="flex flex-row pt-4 px-4">
                        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#EA9696" />
                        </svg>

                        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#ffff" />
                        </svg>


                    </header>

                    <main class="py-4 px-4 text-white">
                        <strong class="text-2xl">Oil Rig Competition</strong>

                        <p class="text-sm py-4 font-extralight">do eiusmod tempor
                            incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit
                            esse

                        </p>
                    </main>

                    <footer class="flex justify-start px-4 py-6">
                        <button class="rounded-full py-2 px-6 bg-bgnav-0 text-black ">Learn More</button></footer>
                </div>

                <div class="col-span-4 md:col-span-2 row-span-2 w-full bg-table-0 rounded-xl" data-aos-easing="ease-in-sine"
                     data-aos-duration="3500" data-aos="fade-left">
                    <header class="flex flex-rpw pt-4 px-4">
                        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#EA9696" />
                        </svg>

                        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#ffff" />
                        </svg>


                    </header>

                    <main class="py-4 px-4 text-white">
                        <strong class="text-2xl">Oil Rig Competition</strong>

                        <p class="text-sm py-4 font-extralight">do eiusmod tempor
                            incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit
                            esse

                        </p>
                    </main>

                    <footer class="flex justify-start px-4 py-6">
                        <button class="rounded-full py-2 px-6 bg-bgnav-0 text-black ">Learn More</button></footer>
                </div>

                <div class="col-span-4 md:col-span-2 row-span-2 w-full bg-table-0 rounded-xl" data-aos-easing="ease-in-sine"
                     data-aos-duration="3500" data-aos="fade-right">
                    <header class="flex flex-rpw pt-4 px-4">
                        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#EA9696" />
                        </svg>

                        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#ffff" />
                        </svg>


                    </header>

                    <main class="py-4 px-4 text-white">
                        <strong class="text-2xl">Oil Rig Competition</strong>

                        <p class="text-sm py-4 font-extralight">
                            incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                        </p>
                    </main>

                    <footer class="flex justify-start p-4">
                        <button class="rounded-full py-2 px-6 bg-bgnav-0 text-black ">Learn More</button></footer>
                </div>

                <div class="col-span-4 md:col-span-2 row-span-2 w-full bg-table-0 rounded-xl"  data-aos-easing="ease-in-sine"
                     data-aos-duration="3500"data-aos="fade-left">
                    <header class="flex flex-rpw pt-4 px-4">
                        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#EA9696" />
                        </svg>

                        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#ffff" />
                        </svg>


                    </header>

                    <main class="py-4 px-4 text-white">
                        <strong class="text-2xl">Oil Rig Competition</strong>

                        <p class="text-sm py-4 font-extralight">do eiusmod tempor
                            incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                        </p>
                    </main>

                    <footer class="flex justify-start px-4 py-6">
                        <button class="rounded-full py-2 px-6 bg-bgnav-0 text-black ">Learn More</button>
                    </footer>
                </div>
            </div>





        </section>
        <!-- END : Non-Competition Event -->

        <!-- Start : Our Last Recap -->
        <section class="w-full bg-bgsection-0 mx-auto flex flex-col px-10 sm:px-24 py-24">

            <div class="flex flex-row justify-between my-20">
                <img src="{{'assets/img/garis1.png'}}" alt="" class="md:h-12 h-8">
                <img src="{{'assets/img/garis2.png'}}" alt="" class="md:h-12 h-8">
            </div>
            <h1 class="font-bold text-4xl text-white text-center mb-20">Our Last Recap</h1>
            <div >
                <iframe class="mx-auto" src="https://www.youtube.com/embed/77KWQExJgaU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="flex flex-row justify-between my-40">
                <img src="{{'assets/img/garis1.png'}}" alt="" class="md:h-12 h-8">
                <img src="{{'assets/img/garis2.png'}}" alt="" class="md:h-12 h-8">
            </div>
        </section>
    </div>
        <style>
            iframe {
                width: 75%;
                aspect-ratio:16/ 9;
            }
        </style>
    @endsection


