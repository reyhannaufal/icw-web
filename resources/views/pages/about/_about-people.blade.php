<div class="bg-bgsection-0">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <p class="text-center text-base font-semibold uppercase text-gray-600 tracking-wider">
            Sponsor
        </p>
        <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
            <div class="col-span-1 flex justify-center py-8 px-8">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/workcation-logo-indigo-300.svg"
                     alt="Workcation">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 ">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-indigo-300.svg" alt="Mirage">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-indigo-300.svg" alt="Tuple">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/workcation-logo-indigo-300.svg"
                     alt="Laravel">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 0">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-indigo-300.svg"
                     alt="StaticKit">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/workcation-logo-indigo-300.svg"
                     alt="Statamic">
            </div>
        </div>
    </div>
</div>

<div class="bg-bgsection-0">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <p class="text-center text-base font-semibold uppercase text-gray-600 tracking-wider">
            Media Partner
        </p>
        <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
            <div class="col-span-1 flex justify-center py-8 px-8">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg"
                     alt="Workcation">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 ">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 0">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg"
                     alt="StaticKit">
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8">
                <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
            </div>
        </div>
    </div>
</div>

<div class="bg-bgsection-0 text-white">
    <div
            class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 md:py-40"
    >
        <div class="space-y-12">
            <div
                    class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl"
            >
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                    Organizing Team
                </h2>
                <p class="text-xl text-gray-500">
                    Indonesian Corrosion Week 2021
                </p>
            </div>
            <ul
                    class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-4 lg:max-w-5xl"
            >

                @include('pages.about._people-box', [
               'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1614533026/Michaela_Claresta_Head_of_Public_Relations_-_michaela_claresta_wf6rdv.jpg' ,
               'name'=> 'Michaela Claresta Erja',
               'role' => 'Head of Public Relations',
               'url_linkedin'=> '#',
           ])

                @include('pages.about._people-box', [
                    'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max/q_auto:eco/v1614533073/Willy_Deviet_Kusuma_-_Indonesian_Corrosion_Week_ab5sam.jpg' ,
                    'name'=> 'Willy Deviet Kusuma',
                    'role' => 'Head of Secretarial',
                    'url_linkedin'=> '#',
                ])

                @include('pages.about._people-box', [
                   'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/v1614533072/Dewi_Puspa_Ningrum_Ketua_Divisi_Branding_-_deepus_mkc0gx.jpg' ,
                   'name'=> 'Dewi Puspa Ningrum',
                   'role' => 'Head of Branding',
                   'url_linkedin'=> 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/q_31/v1614533072/Dewi_Puspa_Ningrum_Ketua_Divisi_Branding_-_deepus_mkc0gx.webp',
               ])



                @include('pages.about._people-box', [
                        'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/v1614520631/Dhea_Febrina_Kostradyanti_Vice_Project_Officer_-_Dhea_Febrina-min_qkkgso.jpg',
                        'name' => 'Dhea Febrina',
                        'role' => 'Vice Project Officer',
                        'url_linkedin' => 'https://www.linkedin.com/in/dhea-febrina-kostradyanti-65a0211b4'
                    ])


                @include('pages.about._people-box', [
                        'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1614520614/Fariza_Hafizh_Achly_Head_of_Events_-_Fariza_Hafizh_Achly-min_t5bwpq.jpg' ,
                        'name'=> 'Faiza Hafiz Achly',
                         'role' => 'Head of Events',
                          'url_linkedin'=> '#',
                ])

                @include('pages.about._people-box', [
                     'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1614520592/Deva_Delovry_K_Head_of_Fundraising_-_deva_delovry-min_fzzm1f.jpg' ,
                     'name'=> 'Deva Delovry',
                     'role' => 'Head of Fundraising',
                     'url_linkedin'=> '#',
                 ])

                @include('pages.about._people-box', [
                        'img'=> 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1614520632/4CE7F123-6382-4D84-89C0-741F3D3B0B48_-_Kevin_Deanta-min_kx0b3z.jpg',
                        'name'=> 'Kevin Deanta Silalahi',
                        'role' => 'Treasurer',
                        'url_linkedin'=> 'https://id.linkedin.com/in/kevin-deanta-silalahi-29a5741bb',
                    ])


                @include('pages.about._people-box', [
                      'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/v1614520596/Tio_-_Tio_Aditya_Maurice-min_w7jp6z.png',
                      'name'=> 'Tio Aditya Maurice',
                      'role' => 'Head Of Media & Information',
                      'url_linkedin'=> '#',
                  ])



                @include('pages.about._people-box', [
                    'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1614520571/1614515260419_-_Yulia_Hadasa-min_xzbxnp.jpg' ,
                    'name'=> 'Yulia Bella Hadasa',
                    'role' => 'Deputy Head of Secretarial',
                    'url_linkedin'=> 'https://www.linkedin.com/in/yuliahadasa/',
                ])


                @include('pages.about._people-box', [
                    'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/v1614616263/1603604592646_-_Indonesian_Corrosion_Week_zcgayv.jpg' ,
                    'name'=> 'Ahmad Ramadhani',
                    'role' => 'Vice Head of Public Relation',
                    'url_linkedin'=> 'http://linkedin.com/in/ahmad-ramadhani',
                ])


                @include('pages.about._people-box', [
                    'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1614616262/Refanza_Zulfan_Faiz_Project_Officer_-_Refanza_Zulfan_izhrrg.jpg' ,
                    'name'=> 'Refanza Zulfan Faiz',
                    'role' => 'Project Officer',
                    'url_linkedin'=> 'https://www.linkedin.com/in/refanza-zulfan-589423149/',
                ])

                @include('pages.about._people-box', [
                'img' => 'https://res.cloudinary.com/dogxsl2bo/image/upload/q_auto:eco/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1614616271/relita_shinta_deputy_head_of_branding_-_emailtugas_shinta_jhbwom.png' ,
                'name'=> 'Relita Shinta',
                'role' => 'Vice Head of Branding',
                'url_linkedin'=> 'https://www.linkedin.com/in/relitashinta/',
            ])






            </ul>
        </div>
    </div>
</div>