
# CRUD Products Laravel with FluxUI

Proyek ini adalah implementasi CRUD (Create, Read, Update, Delete) untuk entitas `Products` di Laravel dengan menggunakan FluxUI untuk antarmuka pengguna yang responsif dan modern.

## Prasyarat

Pastikan Anda sudah menginstal perangkat lunak berikut:
- PHP (minimal versi 8.0)
- Composer
- Laravel (minimal versi 9.x)
- MySQL atau database lain yang didukung Laravel

## Langkah-langkah Instalasi

### 1. Clone Repositori
Jika Anda belum meng-clone repositori ini, lakukan dengan perintah berikut:
```bash
git clone <repository-url>
```

### 2. Install Dependencies
Setelah repositori ter-clone, masuk ke dalam folder proyek dan jalankan perintah Composer untuk menginstal semua dependensi yang diperlukan:
```bash
cd <project-folder>
composer install
```

### 3. Setup Environment
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```

### 4. Konfigurasi Database
Edit file `.env` dan sesuaikan pengaturan database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=username_anda
DB_PASSWORD=password_anda
```

### 5. Generate Key Aplikasi
Generate aplikasi key dengan menjalankan perintah:
```bash
php artisan key:generate
```

### 6. Jalankan Migrations
Untuk membuat tabel di database, jalankan perintah migrations:
```bash
php artisan migrate
```

### 7. Menjalankan Server
Jalankan server Laravel menggunakan perintah berikut:
```bash
php artisan serve
```
Aplikasi akan berjalan pada http://127.0.0.1:8000.

### 8. Autentikasi Pengguna
Aplikasi ini menggunakan autentikasi pengguna menggunakan Laravel Breeze. Jika Anda belum menginstalnya, jalankan perintah berikut untuk menginstal dan mengonfigurasi autentikasi pengguna:
```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
```

## Fitur

Aplikasi ini memungkinkan Anda untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada produk. Hal ini termasuk tampilan produk di dashboard, formulir untuk menambahkan produk baru, dan pengeditan produk yang ada.

## Rute Utama

- `/dashboard`: Menampilkan daftar produk.
- `/dashboard/products/create`: Formulir untuk menambahkan produk baru.
- `/dashboard/products/{product}/edit`: Formulir untuk mengedit produk yang ada.
- `/dashboard/products`: Menampilkan produk yang tersedia.

## Pengaturan

Aplikasi ini juga menyediakan pengaturan pengguna melalui `Volt UI` untuk profil, password, dan penampilan.

## License

MIT License
