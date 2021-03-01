<x-app-layout>
    <div id="admin-acc-doc" class="md:pb-10 pb-6 mx-4">
        <div class="px-2 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200">
                <h3 class="text-2xl leading-6 font-medium font-bold text-gray-900">
                    Dokumentasi Akun Admin
                </h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">
                    Berikut merupakan informasi dan otoritas dari akun admin.
                </p>
            </div>
        </div>
        <x-guide-card>
            <x-slot name="title">
                Info Akun Admin
            </x-slot>
            <li>Akun admin terbagi menjadi dua, yaitu admin normal dan admin master.</li>
            <li>Akun admin tidak bisa dihapus.</li>
            <li>Tiap event memiliki satu akun admin normal.</li>
            <li>Jika ada yang lupa password akun admin, segara hubungin tim web untuk bantuan reset password.
            </li>
        </x-guide-card>
        <x-guide-card>
            <x-slot name="title">
                Otoritas Admin Normal
            </x-slot>
            <li>Bisa melihat dan men-download data dari event yang dipertanggungjawabkannya</li>
            <li>Bisa mem-verifikasi perserta yang terdaftar di event yang dipertanggungjawabkannya.</li>
            <li>Jika event tersebut gratis, maka akun admin yang mengurus event tersebut tidak dapat mengakses menu verifikasi.</li>
            <li>Bisa melihat pengumuman.</li>
            <li>Tidak bisa melihat ataupun memodifikasi pesan dari pengguna.</li>
        </x-guide-card>
        <x-guide-card>
            <x-slot name="title">
                Otoritas Admin Master
            </x-slot>
            <li>Bisa melihat dan men-download data dari event tertentu atau semua event.</li>
            <li>Tidak bisa mem-verifikasi perserta.</li>
            <li>Bisa membuat, melihat, meng-update, dan menghapus pengumuman.</li>
            <li>Bisa melihat, mengganti status, dan menghapus pesan..</li>
            <li>Hanya pesan berstatus "Sudah diproses" yang dapat dihapus oleh admin.</li>
        </x-guide-card>
    </div>

    <div id="admin-features-doc" class="md:pb-10 pb-6 mx-4">
        <div class="px-2 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200">
                <h3 class="text-2xl leading-6 font-medium font-bold text-gray-900">
                    Dokumentasi Fitur Dashboard Admin
                </h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">
                    Berikut merupakan fitur dari menu dashboard admin.
                </p>
            </div>
        </div>
        <x-guide-card>
            <x-slot name="title">
                Fitur Menu Dashboard
            </x-slot>
            <li>Admin master dapat melihat dan men-download data dari semua event.</li>
            <li>Admin normal hanya dapat melihat dan men-download dari event yg dipertanggungjawabkannya.</li>
        </x-guide-card>
        <x-guide-card>
            <x-slot name="title">
                Fitur Menu Pesan
            </x-slot>
            <li>Admin master dapat melihat pesan, mengganti status, dan menghapus pesan.</li>
            <li>Admin normal tidak dapat mengakses menu ini.</li>
            <li>Pesan dapat berstatus "Belum diproses", "Sedang diproses", dan "Sudah diproses".</li>
            <li>Suatu pesan dapat dihapus admin master jika pesan tersebut berstatus "Sudah diproses".</li>
            <li>Pada navigation bar, ditampilkan jumlah pesan yang berstatus belum ataupun sedang diproses.</li>
        </x-guide-card>
        <x-guide-card>
            <x-slot name="title">
                Fitur Menu Pengumuman
            </x-slot>
            <li>Admin master dapat membuat, melihat, meng-edit, dan menghapus pengumuman.</li>
            <li>Admin normal hanya dapat melihat pengumuman.</li>
        </x-guide-card>
        <x-guide-card>
            <x-slot name="title">
                Fitur Menu Verikasi Bukti Pembayaran
            </x-slot>
            <li>Menu ini bernama <strong>Verifikasi</strong> di baris navigasi.</li>
            <li>Angka yang berada di sebelah kanan menu <strong>Paper</strong> menandakan banyak bukti pembayaran yang belum diverif (berstatus pending).</li>
            <li>Admin master tidak dapat mengakses menu ini.</li>
            <li>Admin normal dapat melihat data singkat pengguna dan bukti pembayaran pada event masing-masing.</li>
            <li>Jika event yang dipertanggungjawabkan oleh seorang admin normal bersifat gratis, maka admin tersebut tidak dapat mengakses menu verifikasi.</li>
            <li>Admin normal dapat menolak dan menerima bukti pembayaran pengguna.</li>
            <li>Bukti pembayaran akan dihapus secara otomatis saat admin menolak ataupun menerima bukti pembayaran.</li>
        </x-guide-card>
        <x-guide-card>
            <x-slot name="title">
                Fitur Menu Verifikasi Paper
            </x-slot>
            <li>Menu ini bernama <strong>Paper</strong> di baris navigasi.</li>
            <li>Angka yang berada di sebelah kanan menu <strong>Paper</strong> menandakan banyak paper yang belum dinilai (bernilai 0.00).</li>
            <li>Admin master dan yang bukan merupakan admin paper competition tidak dapat mengakses menu ini.</li>
            <li>Admin event Paper Competition bisa melihat, memberi nilai, dan menghapus paper.</li>
            <li>Admin master dapat mendownload excel yang berisikan nilai peserta paper competition.</li>
            <li>Paper dapat dihapus hanya jika paper tersebut bernilai <strong>0.00</strong>.</li>
            <li>Admin dapat memberi nilai pada paper mulai dari <strong>0.00</strong> hingga <strong>100.00</strong>.</li>
            <li>Peserta dapat mendownload paper yang telah di submit di dashboard event peserta.</li>
            <li>Jika admin menghapus paper peserta, maka peserta tidak dapat untuk mendownload paper yang telah ia submit.</li>
            <li>Peserta yang papernya dihapus akan diberikan notifikasi melalui email.</li>
            <li>Link pendaftaran dan upload paper akan ditutup secara otomatis sesuai dengan waktu penutupan pendaftaran yang ditampilkan di dashboard user.</li>
        </x-guide-card>
    </div>
</x-app-layout>
