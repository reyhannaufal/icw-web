<x-app-layout>
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('announcement.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md py-3">
                        <div class="px-4 py-5 bg-gray-100 sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">Judul Pengumuman</label>
                            <input type="text" name="title" id="title" type="text" class="mt-1 form-input  py-1 shadow-sm mt-2 block w-full"
                                   value="{{ old('title', '') }}" />
                            @error('title')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-gray-100 sm:p-6">
                            <label for="body" class="block font-medium text-sm text-gray-700">Isi Pengumuman</label>
                            <input type="text" name="body" id="body" type="text" class="mt-2 form-input shadow-sm py-6 mt-1 block w-full" />
                            @error('description')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Buat Pengumuman
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</x-app-layout>
