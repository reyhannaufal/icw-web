<x-app-layout>
    <div class="flex justify-center">
        <div class="grid md:grid-cols-2 grid-cols-1">
            @foreach ($users as $user)
                <x-admin._user-card :user="$user"/>
            @endforeach
        </div>
    </div>
</x-app-layout>

