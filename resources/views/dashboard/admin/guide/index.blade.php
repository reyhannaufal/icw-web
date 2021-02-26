<x-app-layout>
    <div class="md:pb-14 pb-10 mx-4">
        <div class="px-2 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200">
                <h3 class="text-2xl leading-6 font-medium font-bold text-gray-900">
                    Petunjuk Penggunaan
                </h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">
                    Berikut merupakan petunjuk pneggunaan dashboard setiap Admin.
                </p>
            </div>
        </div>
        <div class="max-w-5xl rounded-xl bg-white shadow-xl p-10 mx-auto">
            <div class="bg-white">
                <div class="px-4 py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <h2 class="text-lg">Info Akun Admin</h2>
                    <ul class="list-decimal py-4">
                        <li>Akun admin terbagi menjadi dua, yaitu admin normal dan admin master.</li>
                        <li>Akun admin normal adalah akun users dengan id <= jumlah event.</li>
                        <li>Akun admin master adalah akun users dengan id <= jumlah event.</li>
                        <li>Akun admin tidak bisa dihapus.</li>
                        <li>Tiap event memiliki satu akun admin normal.</li>
                        <li>Jika ada yang lupa password akun adminnya, segara hubungin tim web untuk bantuan reset
                            password.
                        </li>
                    </ul>
                </div>

                <div class="px-4 py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <h2 class="text-lg">Authority Admin Normal</h2>
                    <ul class="list-decimal py-4">
                        <li>Pesan dikelompokkan berdasarkan destinasi yang dipilih oleh user di form "Contact US".</li>
                        <li>Pesan tersebut akan ditampilkan di menu admin yang bertangung jawab atas destinasi yang terpilih.</li>
                        <li>Pesan dapat berstatus "Belum diproses", "Sedang diproses", dan "Sudah diproses".</li>
                        <li>Status pesan dapat diganti oleh admin.</li>
                        <li>Hanya pesan berstatus "Sudah diproses" yang dapat dihapus oleh admin.</li>
                        <li>Jika pesan dianggap salah destinasi, admin dapat mengubahnya menjadi destinasi lain.</li>
                        <li>Pada navigation bar, ditampilkan jumlah pesan yang berstatus belum ataupun sedang diproses.</li>
                    </ul>
                </div>

                <div class="px-4 py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <h2 class="text-lg">Authority Admin Master</h2>
                    <ul class="list-decimal py-4">
                        <li>Bisa melihat dan men-download data dari event tertentu atau semua event.</li>
                        <li>Tidak bisa mem-verifikasi perserta.</li>
                        <li>Bisa membuat, melihat, meng-update, dan menghapus (CRUD) pengumuman.</li>
                        <li>SBisa melihat, mengganti status, dan menghapus pesan dengan kategori "lainnya".</li>
                        <li>Hanya pesan berstatus "Sudah diproses" yang dapat dihapus oleh admin.</li>
                        <li>Jika pesan dianggap salah destinasi, admin dapat mengubahnya menjadi destinasi lain.</li>
                    </ul>
                </div>

{{--                <div class="px-4 py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--                    <h2 class="text-lg">Fitur Menu Pesan</h2>--}}
{{--                    <ul class="list-decimal py-4">--}}
{{--                        <li>Bisa melihat dan men-download data dari event tertentu.</li>--}}
{{--                        <li>Bisa mem-verifikasi perserta yang terdaftar di event tertentu.</li>--}}
{{--                        <li>Bisa melihat pengumuman.</li>--}}
{{--                        <li>Bisa melihat, mengganti status, dan menghapus pesan dengan kategori event tertentu.</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>
</x-app-layout>
