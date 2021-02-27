<x-app-layout>
    <div class="font-body max-w-7xl min-w-min mx-auto pb-40 pt-5">
        <section class="flex flex-col xlplus:px-0 px-10 py-3">
            <div class="py-10 font-bold">
                <h1 class="text-2xl md:text-3xl tracking-wider">
                    Dashboard
                </h1>
            </div>

            <div
                class="flex flex-row justify-center md:justify-between overflow-hidden bg-dashboard-0 rounded-lg w-auto z-10 relative shadow-md">
                <div class="flex flex-col text-white md:px-8 py-4 w-full md:text-left text-center">
                    <h1 class="font-bold pb-4 text-xl md:text-lg">Hello, Mr.Reyhan!</h1>

                    <p class="font-medium text-lg md:text-base">
                        Today,
                        <br>
                        You have 6 Events on the list.
                        <br>
                        Have a nice day!
                    </p>


                </div>

                <img src="{{ \Illuminate\Support\Facades\URL::to('assets/img/dash.png') }}" alt=""
                     class="absolute w-0 md:relative  md:w-2/4 ">

            </div>
        </section>

        <section class="mx-auto xlplus:px-0 px-10 py-6 md:py-18">
            <div class="flex justify-center">
                <div class="font-bold text-2xl md:text-3xl pb-16 md:pb-28 tracking-wider">
                    <h1>
                        On Going Events
                    </h1>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="flex-1 self-center">
                    <div class="grid grid-cols-3 gap-x-6 gap-y-8 ">
                        <div
                            class="col-span-3 md:col-span-1 bg-competable1-0 space-y-6  rounded-lg tracking-wide transform hover:shadow-lg hover:scale-105 duration-200">
                            <div class="border-b border-white px-2 pt-4">
                                <h1 class="text-lg font-semibold pb-2">
                                    Competition Name
                                </h1>
                            </div>

                            <p class="font-medium text-base px-2 pb-4">
                                Date : 29 November 2929
                            </p>

                        </div>

                        <div
                            class="col-span-3 md:col-span-1 bg-competable2-0 space-y-6  rounded-lg tracking-wide transform hover:shadow-lg hover:scale-105 duration-200">
                            <div class="border-b border-white px-2 pt-4">
                                <h1 class="text-lg font-semibold pb-2">
                                    Competition Name
                                </h1>
                            </div>

                            <p class="font-medium text-base px-2 pb-4">
                                Date : 29 November 2929
                            </p>

                        </div>


                        <div
                            class="col-span-3 md:col-span-1 bg-dashboard-0 space-y-6  rounded-lg tracking-wide transform hover:shadow-lg hover:scale-105 duration-200">
                            <div class="border-b border-white px-2 pt-4">
                                <h1 class="text-lg font-semibold pb-2">
                                    Competition Name Panjang Banget
                                </h1>
                            </div>

                            <p class="font-medium text-base px-2 pb-4">
                                Date : 29 November 2929
                            </p>

                        </div>

                        <div
                            class="col-span-3 md:col-span-1 bg-competable1-0 space-y-6  rounded-lg tracking-wide transform hover:shadow-lg hover:scale-105 duration-200">
                            <div class="border-b border-white px-2 pt-4">
                                <h1 class="text-lg font-semibold pb-2">
                                    Competition Name Super Duper Panjang Banget Brow etdah
                                </h1>
                            </div>

                            <p class="font-medium text-base px-2 pb-4">
                                Date : 29 November 2929
                            </p>

                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
