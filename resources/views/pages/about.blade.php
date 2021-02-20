<x-guest-layout>
    @php echo '<script type="text/javascript"> changeTitleTo("About")</script>' @endphp

    <x-slot name="navbar">
        @include('pages._navbar', $events)
    </x-slot>

    <div class="relative bg-bgsection-0 overflow-hidden">
        <div
                class="relative pt-6 pb-16 sm:pb-24 lg:pb-32 max-w-7xl mx-auto"
        >
            <main class="mt-16  max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8 mx-auto">
                    <div
                            class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left"
                    >
                        <h1>
                <span
                        class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base"
                >indocor its sc
                </span
                >
                            <span
                                    class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl"
                            >
                  <span class="block text-gray-100">Indonesian Corrosion Week</span>
                  <span class="block text-gray-500">ITS Student Chapter</span>
                </span>
                        </h1>
                        <p
                                class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl"
                        >
                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui
                            lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat
                            fugiat aliqua ad ad non deserunt sunt.
                        </p>
                    </div>
                    <div
                            class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center"
                    >

                        <div
                                class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md"
                        >

                            <img
                                    class="hidden lg:block  h-48 mx-auto w-auto bg-cover"
                                    src="{{'assets/img/logo.png'}}"
                                    alt="logo_icw"
                            />

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

{{--    vision and mission--}}

    <div class="bg-white">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-40" data>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-8">
                <div class="space-y-5 sm:space-y-4" data-aos="fade-right" data-aos-duration="2500">
                    <h2 class="text-3xl font-extrabold  tracking-tight sm:text-4xl text-center">Our Vision</h2>
                    <p class="text-md md:text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae
                        elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                    <p class="text-md md:text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae
                        elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                </div>
                <div class="space-y-5 sm:space-y-4"  data-aos="fade-left" data-aos-duration="2500">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-center">Our Mission</h2>
                    <p class="text-md md:text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae
                        elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                    <p class="text-md md:text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae
                        elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                </div>
            </div>
        </div>
    </div>

    {{--    the people--}}

    <div class="bg-gray-50">
        <div
                class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-24"
        >
            <div class="space-y-8 sm:space-y-12">
                <div
                        class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl"
                >
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                        The People
                    </h2>
                    <p class="text-xl text-gray-500">
                        Risus velit condimentum vitae tincidunt tincidunt. Mauris
                        ridiculus fusce amet urna nunc. Ut nisl ornare diam in.
                    </p>
                </div>
                <ul
                        class="mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:max-w-5xl lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6"
                        x-max="1"
                >
                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Michael Foster</h3>
                                    <p class="text-indigo-600">Co-Founder / CTO</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Dries Vincent</h3>
                                    <p class="text-indigo-600">Manager, Business Relations</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Lindsay Walton</h3>
                                    <p class="text-indigo-600">Front-end Developer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Courtney Henry</h3>
                                    <p class="text-indigo-600">Designer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Tom Cook</h3>
                                    <p class="text-indigo-600">Director, Product Development</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Whitney Francis</h3>
                                    <p class="text-indigo-600">Copywriter</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Leonard Krasner</h3>
                                    <p class="text-indigo-600">Senior Designer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Floyd Miles</h3>
                                    <p class="text-indigo-600">Principal Designer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Emily Selman</h3>
                                    <p class="text-indigo-600">VP, User Experience</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Kristin Watson</h3>
                                    <p class="text-indigo-600">VP, Human Resources</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1505840717430-882ce147ef2d?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Emma Dorsey</h3>
                                    <p class="text-indigo-600">Senior Front-end Developer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Alicia Bell</h3>
                                    <p class="text-indigo-600">Junior Copywriter</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1507101105822-7472b28e22ac?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Jenny Wilson</h3>
                                    <p class="text-indigo-600">Studio Artist</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Anna Roberts</h3>
                                    <p class="text-indigo-600">Partner, Creative</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Benjamin Russel</h3>
                                    <p class="text-indigo-600">Director, Print Operations</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1517070208541-6ddc4d3efbcb?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Jeffrey Webb</h3>
                                    <p class="text-indigo-600">Senior Art Director</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Kathryn Murphy</h3>
                                    <p class="text-indigo-600">Associate Creative Director</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1513910367299-bce8d8a0ebf6?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Lawrence Hunter</h3>
                                    <p class="text-indigo-600">Content Specialist</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1506980595904-70325b7fdd90?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Yvette Armstrong</h3>
                                    <p class="text-indigo-600">Studio Artist</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1501031170107-cfd33f0cbdcc?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Angela Fisher</h3>
                                    <p class="text-indigo-600">Chief Strategy Officer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Blake Reid</h3>
                                    <p class="text-indigo-600">Account Coordinator</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Hector Gibbons</h3>
                                    <p class="text-indigo-600">VP, Marketing</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Fabricio Mendes</h3>
                                    <p class="text-indigo-600">Senior Art Director</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1504703395950-b89145a5425b?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Jillian Steward</h3>
                                    <p class="text-indigo-600">Designer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img
                                    class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                    src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                    alt=""
                            />
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Chelsea Hagon</h3>
                                    <p class="text-indigo-600">Human Resources Manager</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    {{--    team section--}}

    <div class="text-white md:py-40 my-auto">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
                <div class="space-y-5 sm:space-y-4">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Meet our website team</h2>
                    <p class="text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae
                        elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                </div>
                <div class="lg:col-span-2">
                    <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">

                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20"
                                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Reyhan Naufal Rahman</h3>
                                    <p class="text-gray-400">Project Manager</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20"
                                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>William Handi Wijaya</h3>
                                    <p class="text-gray-400">Back-end</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20"
                                     src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Axel Briano Suherik</h3>
                                    <p class="text-gray-400">UI/UX & Front-end</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20"
                                     src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Drigo Alexander</h3>
                                    <p class="text-gray-400">Front-end</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
