<x-app-layout>
    <div class="flex justify-center mt-10">
        <div class="grid grid-cols-2 cards">
            @foreach ($users as $user)
                <x-admin._user-card :user="$user"/>
            @endforeach
        </div>
    </div>
    <div class="flex justify-center md:pb-10 sm:pb-5">
        <div class="w-1/2">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>

