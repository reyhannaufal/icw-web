<section aria-labelledby="announcements-title">
    <div class="rounded-lg bg-white overflow-hidden shadow">
        <div class="p-6">
            <h2 class="text-base font-medium text-gray-900" id="announcements-title">
                Announcements</h2>
            <div class="flow-root mt-6">
                <ul class="-my-5 divide-y divide-gray-200">
                    @forelse($announcements as $announcement)
                    <li class="py-5">
                        <div class="relative focus-within:ring-2 focus-within:ring-cyan-500">
                            <h3 class="text-sm font-semibold text-gray-800">
                                <a href="#" class="hover:underline focus:outline-none">
                                    <!-- Extend touch target to entire panel.blade.php -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    {{ $announcement->title }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 line-clamp-2">
                                {{ $announcement->body }}
                            </p>
                        </div>
                    </li>
                    @empty
                        <p>Tidak ada pemberitahuan.</p>
                    @endforelse
                </ul>
            </div>
            <div class="mt-6">
                <a href="#"
                   class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    View all
                </a>
            </div>
            <div class="mt-12 data-turbolinks-persist-scroll=true" data-turbolinks-persist-scroll=true>
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</section>