<form method="POST" action="/paper/{{ auth()->user()->id }}" enctype="multipart/form-data">
    @csrf

    <div>
        <x-jet-input id="paper" class="block mt-1 w-full" type="file" accept="file/*" name="paper" required autofocus />
        @error('paper')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-end mt-6">
        <x-jet-button class="ml-4">
            {{ __('Submit') }}
        </x-jet-button>
    </div>
</form>
