# icw-web ✨

repositori untuk web icw.

## Instalasi
```bash
composer install
npm install
php artisan generate key
php artisan migrate:fresh --seed (untuk clear & seeding database)
php artisan storage:link (untuk menyimpan & akses gambar)
php artisan serve
```

```
selalu perhatikan env.example
```
# Dokumentasi Akun

## Info Akun Admin
* Akun admin terbgai menjadi dua, yaitu **admin normal** dan **admin master**.
* Akun **admin normal** adalah akun users dengan id <= jumlah event.
* Akun **admin master** adalah akun users dengan id <= jumlah event.
* Akun admin tidak bisa dihapus
* Tiap event memiliki satu akun admin normal.
* Jika password akun admin terlupakan, segara hubungi tim web untuk bantuan reset password. 
  
### Otoritas Admin Normal
* Bisa melihat dan men-download data dari event yang dipertanggungjawabkannya.
* Bisa mem-verifikasi perserta yang terdaftar di event yang dipertanggungjawabkannya.
    * Jika event tersebut gratis, maka tampilan verifikasi akan disembunyikan.
* Bisa melihat pengumuman.
* Tidak bisa melihat ataupun memodifikasi pesan.
* Jika menggunakan seeder yang ada di program ini, maka profil dari akun admin normal adalah:
    * Nama: `Admin <Nama Event>` (contoh: `Admin Event XXX`)
    * Email: `admin<index>@admin.com` (contoh: `admin1@admin.com`)
    * Password: `12345678`

### Otoritas Admin Master
* Bisa melihat dan men-download data dari semua event.
* Tidak bisa mem-verifikasi perserta.
* Bisa membuat, melihat, meng-update, dan menghapus (CRUD) pengumuman.
* Bisa melihat, mengganti status, dan menghapus pesan.
* Jika menggunakan seeder yang ada di program ini, maka profil dari akun admin master adalah:
    * Nama: `Master Admin`
    * Email: `masteradmin@admin.com`
    * Password: `12345678`

## Info Akun User
* Semua akun user yang dibuat seeder memiliki password `12345678`

# Dokumentasi Fitur Menu Admin

## Fitur Menu Dashboard
* Admin master dapat melihat dan men-download data dari semua event.
* Admin normal hanya dapat melihat dan men-download dari event yg dipertanggungjawabkannya.

## Fitur Menu Pesan
* Admin master dapat melihat pesan, mengganti status, dan menghapus pesan.
* Admin normal tidak dapat mengakses menu ini.
* Pesan dapat berstatus "Belum diproses", "Sedang diproses", dan "Sudah diproses".
* Suatu pesan dapat dihapus admin master jika pesan tersebut berstatus "Sudah diproses".
* Pada navigation bar, ditampilkan jumlah pesan yang berstatus belum ataupun sedang diproses.

## Fitur Menu Pengumuman
* Admin master dapat membuat, melihat, meng-edit, dan menghapus pengumuman.
* Admin normal hanya dapat melihat pengumuman.

## Fitur Menu Verikasi
* Admin master tidak dapat mengakses menu ini.
* Admin normal dapat melihat data singkat pengguna dan bukti pembayaran pada event masing-masing.
* Jika event yang dipertanggungjawabkan oleh seorang admin normal bersifat gratis, maka admin tersebut tidak dapat mengakses menu verifikasi.
* Admin normal dapat menolak dan menerima bukti pembayaran pengguna.
* Bukti pembayaran akan dihapus secara otomatis saat admin menolak ataupun menerima bukti pembayaran.

# Struktur Database
* Tabel `users` berelasi many-to-many dengan tabel `events` dengan tabel `event_user` sebagai perantara.
* Tabel `events` berelasi many-to-many dengan tabel `bills` dengan tabel `bill_event` sebagai perantara.
* Tabel `bills` diisi dengan info rekening.
* Tabel `messages` diisi dengan pesan yang dikirim di halaman `Contact Us`
* Ada empat nilai yang diterima di kolom `payment_status` pada tabel `event_user`, yaitu `null`, `failed`, `success`, dan `pending`.
* Jika eventnya gratis, maka nilai kolom `price` pada tabel `events` sama dengan `0`.  
* Selain itu, terdapat pula tabel `messages` dan tabel `announcements`.
