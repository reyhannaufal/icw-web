<div class="flex items-center border-l-4 {{ $border_color }} bg-white overflow-hidden shadow rounded-lg">
    <div class="flex flex-row justify-between px-4 py-5 sm:p-6" style="width: -webkit-fill-available;">
        <div class="block">
            <div class="{{ $text_color }} text-xs font-bold truncate uppercase">
                {{ $title }}
            </div>
            <div class="mt-1 text-xl font-bold text-gray-500">
                {{ $count }}
            </div>
        </div>
        <i class="{{ $icon }} fa-2x text-gray-300 self-center"></i>
    </div>
</div>
