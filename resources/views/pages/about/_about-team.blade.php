<div class="text-white md:py-40 my-auto">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
            <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Meet our website team</h2>
                <p class="text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae
                    elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
            </div>
            <div class="lg:col-span-2">
                <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">

                    @include('pages.about._team-box', [
                        'img' => 'https://i.pravatar.cc/100?u=a1',
                        'name' => 'Reyhan Naufal Rahman',
                        'role' => 'Project Manager'
                    ])

                    @include('pages.about._team-box', [
                        'img' => 'https://i.pravatar.cc/100?u=a2',
                        'name' => 'William Handi Wijaya',
                        'role' => 'Back-end'
                    ])

                    @include('pages.about._team-box', [
                        'img' => 'https://i.pravatar.cc/100?u=b3',
                        'name' => 'Axel Briano Suherik',
                        'role' => 'UI/UX & Front-end'
                    ])

                    @include('pages.about._team-box', [
                        'img' => 'https://i.pravatar.cc/100?u=a4',
                        'name' => 'Drigo Alexander',
                        'role' => 'Front-end'
                    ])

                </ul>
            </div>
        </div>
    </div>
</div>
