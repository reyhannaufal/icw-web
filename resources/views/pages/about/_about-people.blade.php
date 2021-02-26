<div class="bg-gray-50">
    <div
        class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-24"
    >
        <div class="space-y-8 sm:space-y-12">
            <div
                class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl"
            >
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                    The People
                </h2>
                <p class="text-xl text-gray-500">
                    Risus velit condimentum vitae tincidunt tincidunt. Mauris
                    ridiculus fusce amet urna nunc. Ut nisl ornare diam in.
                </p>
            </div>
            <ul
                class="mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:max-w-5xl lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6"
                x-max="1"
            >
                @php $faker = Faker\Factory::create(); @endphp

                @for ($i = 0; $i < 26; $i++)
                    @include('pages.about._people-box', [
                        'img' => "https://i.pravatar.cc/100?u=" . $i,
                        'name' => $faker->name,
                        'role' => $faker->jobTitle
                    ])
                @endfor
            </ul>
        </div>
    </div>
</div>
