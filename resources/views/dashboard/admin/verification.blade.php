<x-app-layout>
    <div class="flex justify-center mt-10">
        <div class="grid grid-cols-2 cards">
            @foreach ($users as $user)
                @if ($user->participation->payment_status !== 'pending')
                    @continue
                @endif
                <div class="m-5 my-10 card">
                    <x-admin._user-card :user="$user"/>
                </div>
            @endforeach
        </div>
    </div>
    <div class="flex justify-center md:pb-10 sm:pb-5">
        <div class="w-1/2">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>

