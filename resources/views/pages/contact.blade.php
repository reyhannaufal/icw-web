<div class="text-white pt-20 px-6 pt-0 pb-60 overflow-hidden sm:px-6 lg:px-8">
        <div class="relative max-w-xl mx-auto">
            <div class="text-center">
                <h2
                        class="text-3xl font-extrabold tracking-tight text-gray-100 sm:text-4xl animate-pulse"
                >
                    Jadilah Partner Kami
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-200" data-aos="fade-up" data-aos-duration="2000">
                    Isilah form dibawah dengan benar.
                </p>
            </div>
            <div class="mt-12">
                <form
                        action="/messages"
                        method="POST"
                        class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8"
                >
                    @csrf
                    <div>
                        <label
                                for="first_name"
                                class="block text-sm font-medium text-gray-100"
                        >Nama pertama</label
                        >
                        <div class="mt-1">
                            <input required
                                   type="text"
                                   name="first_name"
                                   id="first_name"
                                   autocomplete="given-name"
                                   class="py-3 px-4 block text-black  w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            />
                        </div>
                        @error('first_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label
                                for="last_name"
                                class="block text-sm font-medium text-gray-100"
                        >Nama kedua</label
                        >
                        <div class="mt-1">
                            <input required
                                   type="text"
                                   name="last_name"
                                   id="last_name"
                                   autocomplete="family-name"
                                   class="py-3 text-black bg-gray-100 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            />
                        </div>
                        @error('last_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label
                                for="institution"
                                class="block text-sm font-medium text-gray-100"
                        >Institusi</label
                        >
                        <div class="mt-1">
                            <input required
                                   type="text"
                                   name="institution"
                                   id="institution"
                                   autocomplete="organization"
                                   class="py-3 px-4 text-black bg-gray-100  block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            />
                        </div>
                        @error('institution')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-100"
                        >Email</label
                        >
                        <div class="mt-1">
                            <input required
                                   id="email"
                                   name="email"
                                   type="email"
                                   autocomplete="email"
                                   oninvalid="setCustomValidity('Mohon masukkan alamat email yang valid')"
                                   oninput="setCustomValidity('')"
                                   class="py-3 text-black bg-gray-100  px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            />
                        </div>
                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label
                                for="phone_number"
                                class="block text-sm font-medium text-gray-100"
                        >Nomer telepon</label
                        >
                        <input required
                               id="phone_number"
                               name="phone_number"
                               type="tel"
                               placeholder="+62"
                               pattern="(\+62 ((\d{3}([ -]\d{3,})([- ]\d{4,})?)|(\d+)))|(\(\d+\) \d+)|\d{3}( \d+)+|(\d+[ -]\d+)|\d+"
                               oninvalid="setCustomValidity('Input tidak sesuai dengan format. Contoh: 0858123456')"
                               oninput="setCustomValidity('')"
                               class="py-3 text-black bg-gray-100 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                        />
                        @error('phone_number')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label
                                for="message"
                                class="block text-sm font-medium text-gray-100"
                        >Pesan</label
                        >
                        <div class="mt-1">
                      <textarea required
                                id="message"
                                name="message"
                                rows="4"
                                class="py-3 text-black bg-gray-100 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                      ></textarea>
                        </div>
                        @error('message')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <button
                                type="submit"
                                class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Kirim!

                        </button>
                    </div>
                </form>
            </div>
        </div>
        <p class="text-center -white-500 text-xs pt-4">* Tunggu balasan admin melalui email atau nomor telepon Anda.</p>
    </div>

