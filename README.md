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
# Dokumentasi Fitur

## Info Akun Admin
* Akun admin terbgai menjadi dua, yaitu **admin normal** dan **admin master**.
* Akun **admin normal** adalah akun users dengan id <= jumlah event.
* Akun **admin master** adalah akun users dengan id <= jumlah event.
* Akun admin tidak bisa dihapus
* Tiap event memiliki satu akun admin normal.
* Jika ada yang lupa password akun adminnya, segara hubungin tim web untuk bantuan reset password. 
  
### Authority Admin Normal
* Bisa melihat dan men-download data dari event tertentu.
* Bisa mem-verifikasi perserta yang terdaftar di event tertentu.
    * Jika event tersebut gratis, maka tampilan verifikasi akan disembunyikan.
* Bisa melihat pengumuman.
* Bisa melihat, mengganti status, dan menghapus pesan dengan kategori event tertentu.
* Jika menggunakan seeder yang ada di program ini, maka profil dari akun admin normal adalah:
    * Nama: `Admin <Nama Event>` (contoh: `Admin Event XXX`)
    * Email: `admin<index>@admin.com` (contoh: `admin1@admin.com`)
    * Password: `12345678`

### Authority Admin Master
* Bisa melihat dan men-download data dari event tertentu atau semua event.
* Tidak bisa mem-verifikasi perserta.
* Bisa membuat, melihat, meng-update, dan menghapus (CRUD) pengumuman.
* Bisa melihat, mengganti status, dan menghapus pesan dengan kategori "lainnya".
* Jika menggunakan seeder yang ada di program ini, maka profil dari akun admin master adalah:
    * Nama: `Master Admin`
    * Email: `masteradmin@admin.com`
    * Password: `12345678`

## Info Akun User
* Semua akun user yang dibuat seeder memiliki password `12345678`

## Fitur Menu Pesan
* Pesan dikelompokkan berdasarkan destinasi yang dipilih oleh user di form "Contact US".
* Pesan tersebut akan ditampilkan di menu admin yang bertangung jawab atas destinasi yang terpilih.
* Pesan dapat berstatus "Belum diproses", "Sedang diproses", dan "Sudah diproses".
* Status pesan dapat diganti oleh admin.
* Hanya pesan berstatus "Sudah diproses" yang dapat dihapus oleh admin.
* Jika pesan dianggap salah destinasi, admin dapat mengubahnya menjadi destinasi lain.
* Pada navigation bar, ditampilkan jumlah pesan yang berstatus belum ataupun sedang diproses.

# Struktur Database
* Tabel `users` berelasi many-to-many dengan tabel `events`
    dengan tabel `event_user` sebagai perantara.
* Tabel `events` berelasi many-to-many dengan tabel `bills`
    dengan tabel `bill_event` sebagai perantara.
* Tabel `bills` diisi dengan info rekening.
* Tabel `messages` diisi dengan pesan yang dikirim di halaman `Contact Us`
* Ada empat nilai yang diterima di kolom `payment_status` pada tabel `event_user`,
    yaitu `failed`, `success`, dan `pending`.
* Jika eventnya gratis, maka nilai kolom `price` pada tabel `events` sama dengan `0`.  
* Selain itu, terdapat pula tabel messages dan tabel announcements.
