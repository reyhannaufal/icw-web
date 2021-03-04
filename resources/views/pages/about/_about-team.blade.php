<div class="text-white 2xl:border-4 max-w-7xl rounded-lg mx-auto">
    <div class="max-w-7xl mx-2 md:mx-auto text-center py-32 px-4 py-20 sm:px-6 lg:py-40 lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight  sm:text-4xl">
            <span>Sebuah <br></span>
            <sp>kata-kata</sp>
        </h2>
        <p class="text-base mt-5">If a window of opportunity appears, don't pull down the shade.</p>
    </div>
</div>

<div class="text-white py-20 md:py-40 my-auto">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
            <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-extrabold text-center tracking-tight sm:text-4xl">Meet the Web Team</h2>
                <p class="text-xl text-gray-400 text-center">Testing can only prove the presence of bugs, not their absence.</p>
            </div>
            <div class="lg:col-span-2">
                <ul class="space-y-12 mx-auto sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">

                    @include('pages.about._team-box', [
                        'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1614517768/pro_pict-min_pk6xv8.jpg',
                        'name' => 'Reyhan Naufal Rahman',
                        'role' => 'Project Manager',
                        'url_linkedin' => 'https://www.linkedin.com/in/reyhan-naufal/'
                    ])

                    @include('pages.about._team-box', [
                        'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/v1614516888/william_on0ddj.jpg',
                        'name' => 'William Handi Wijaya',
                        'role' => 'Back-end',
                         'url_linkedin' => 'https://www.linkedin.com/in/wiliamhw/'
                    ])

                    @include('pages.about._team-box', [
                        'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1614516911/axel_gsuzhb.jpg',
                        'name' => 'Axel Briano Suherik',
                        'role' => 'Front-end',
                         'url_linkedin' => 'https://www.linkedin.com/in/axel-brians/'
                    ])

                    @include('pages.about._team-box', [
                        'img' => 'https://instagram.fcgk30-1.fna.fbcdn.net/v/t51.2885-19/s320x320/140033011_260773278737953_2443242427226292971_n.jpg?tp=1&_nc_ht=instagram.fcgk30-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=rhspt9b8MQAAX8bhq_r&oh=b9d776151924cc7a606efd073684c794&oe=60651AD8',
                        'name' => 'Drigo Alexander',
                        'role' => 'Front-end',
                         'url_linkedin' => 'https://www.linkedin.com/in/drigo-alexander-9a36a01a8/'
                    ])

                </ul>
            </div>
        </div>
    </div>
</div>
