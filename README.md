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

## Info Akun Admin
* Akun admin adalah akun users dengan id = 1, 2, dan 3.
* Jika menggunakan seeder yang ada di program ini, maka profil dari akun admin adalah:
    * Nama: `Admin <nama event>` (contoh: `Admin event xxx`)
    * Email: `admin<index>@admin.com` (contoh: `admin1@admin.com`)
    * Password: `12345678`

## Info Akun User
* Semua akun user yang dibuat seeder memiliki password `12345678`

## Struktur Database
* Tabel `users` berelasi many-to-many dengan tabel `events`
    dengan tabel `event_user` sebagai perantara.
* Tabel `events` berelasi many-to-many dengan tabel `bills`
    dengan tabel `bill_event` sebagai perantara.
* Tabel `bills` diisi dengan info rekening.
* Tabel `messages` diisi dengan pesan yang dikirim di halaman `Contact Us`
* Ada empat nilai yang diterima di kolom `payment_status` pada tabel `event_user`,
    yaitu `failed`, `success`, dan `pending`.
* Jika eventnya gratis, maka nilai kolom `price` pada tabel `events` sama dengan `0`.
