<x-guest-layout>
    @php echo '<script type="text/javascript"> changeTitleTo("Contact")</script>' @endphp

    <x-slot name="navbar">
        @include('pages._navbar', $events)
    </x-slot>

    <div class="text-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-40">
        <div class="relative max-w-xl mx-auto">
            <div class="text-center">
                <h2
                        class="text-3xl font-extrabold tracking-tight text-gray-100 sm:text-4xl animate-pulse"
                >
                    Contact Us
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-200" data-aos="fade-up" data-aos-duration="2000">
                    Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat
                    massa dictumst amet. Sapien tortor lacus arcu.
                </p>
            </div>
            <div class="mt-12">
                <form
                        action="#"
                        method="POST"
                        class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8"
                >
                    <div>
                        <label
                                for="first_name"
                                class="block text-sm font-medium text-gray-100"
                        >First name</label
                        >
                        <div class="mt-1">
                            <input
                                    type="text"
                                    name="first_name"
                                    id="first_name"
                                    autocomplete="given-name"
                                    class="py-3 px-4 block bg-gray-400 w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            />
                        </div>
                    </div>
                    <div>
                        <label
                                for="last_name"
                                class="block text-sm font-medium text-gray-100"
                        >Last name</label
                        >
                        <div class="mt-1">
                            <input
                                    type="text"
                                    name="last_name"
                                    id="last_name"
                                    autocomplete="family-name"
                                    class="py-3 bg-gray-400  px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label
                                for="company"
                                class="block text-sm font-medium text-gray-100"
                        >Institution</label
                        >
                        <div class="mt-1">
                            <input
                                    type="text"
                                    name="company"
                                    id="company"
                                    autocomplete="organization"
                                    class="py-3 px-4 bg-gray-400  block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-100"
                        >Email</label
                        >
                        <div class="mt-1">
                            <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    autocomplete="email"
                                    class="py-3 bg-gray-400  px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label
                                for="phone_number"
                                class="block text-sm font-medium text-gray-100"
                        >Phone Number</label
                        >
                        <input
                                id="telephone"
                                name="phone"
                                type="tel"
                                placeholder="+62"
                                pattern="(\+62 ((\d{3}([ -]\d{3,})([- ]\d{4,})?)|(\d+)))|(\(\d+\) \d+)|\d{3}( \d+)+|(\d+[ -]\d+)|\d+"
                                class="py-3 bg-gray-400  px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                        />
                    </div>
                    <div class="sm:col-span-2">
                        <label
                                for="message"
                                class="block text-sm font-medium text-gray-100"
                        >Message</label
                        >
                        <div class="mt-1">
                <textarea
                        id="message"
                        name="message"
                        rows="4"
                        class="py-3 bg-gray-400 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                ></textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <button
                                type="submit"
                                class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Let's talk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
