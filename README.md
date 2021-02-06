# icw-web ✨

repositori untuk web icw.

## Instalasi
```bash
composer install
npm install
php artisan generate key
php artisan migrate:fresh (untuk clear & migrate database)
php artisan serve
```

```
templating untuk static pages terdapat pada layouts/guest.blade.php
semua static pages dikerjakan pada folder pages/
```

## Struktur Database
* Tabel `users` berelasi many-to-many dengan tabel `events`
    dengan tabel `event_user` sebagai perantara.
* Tabel `events` berelasi many-to-many dengan tabel `bills`
    dengan tabel `bill_event` sebagai perantara..
* Tabel `bills` diisi dengan info rekening.
