<h1 align="center">Sistem Informasi Pariwisata (SIPAR) 👋</h1>

## Apa itu Sistem Informasi Pariwisata?

Web Sistem Informasi Pariwisata yang dibuat oleh <a href="https://github.com/herusaputra77"> Heru Saputra </a>. **Sistem Informasi Informasi yang dapat menampilkan objek wisata pada suatu daerah.**

## Fitur apa saja yang tersedia di Sistem Informasi Akademik Sekolah?

- Autentikasi Admin
- User & CRUD
- Jadwal Event & CRUD
- Kategori Wisata
- Detail Wisata
- Dan lain-lain

## Release Date
Menggunakan Framework Laravel varsi 9.
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

**Release date : 21 Mei 2024**

> Sistem Informasi Pariwisata (SIPAR) open source yang dibuat oleh Heru Saputra. Kalian dapat download/fork/clone. Cukup beri stars di project ini agar memberiku semangat. Terima kasih!

---

## Default Account for testing

**Admin Default Account**

- email: admin@example.com
- Password: 12345678

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/herusaputra77/web-pariwisata.git
cd web-pariwisata
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```

## Author

- LinkedIn : <a href="https://www.linkedin.com/in/heru-saputra-b99500238/"> Heru Saputra</a>

## License

- Copyright © 2024 Heru Saputra.
- **Sistem Informasi Pariwisata**