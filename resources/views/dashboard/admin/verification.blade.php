<x-app-layout>
    <div class="md:pb-10 sm:pb-5">
        {{-- Section Heading --}}
        <div class="px-2 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <strong>Verifikasi Peserta</strong>
                </h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">
                    Tolak atau terima bukti pembayaran peserta.
                </p>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="grid grid-cols-2 cards">
                @foreach ($users as $user)
                    <div class="m-5 my-10 card">
                        <x-admin._user-card :user="$user"/>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center">
            <div class="w-1/2">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

