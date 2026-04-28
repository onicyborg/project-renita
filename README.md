# Project Renita

Aplikasi web berbasis **Laravel 10** dengan bundler frontend **Vite**.

## Prasyarat

- **PHP** >= 8.1
- **Composer**
- **Node.js** >= 18 + **npm**
- **MySQL/MariaDB**

## Setup Instalasi (Local Development)

### 1) Install dependency

```bash
composer install
```

### 2) Setup environment

Salin file env dan generate application key:

```bash
cp .env.example .env
php artisan key:generate
```

Jika kamu menjalankan Laravel via `php artisan serve`, biasanya aman untuk set:

- `APP_URL=http://127.0.0.1:8000`

### 3) Setup database

- Buat database MySQL.
- Update konfigurasi `DB_*` pada file `.env`.

Lalu jalankan migrasi:

```bash
php artisan migrate
```

### 4) (Opsional) Storage symlink

Jalankan ini jika project membutuhkan akses file dari folder `storage` via `public/storage`:

```bash
php artisan storage:link
```

## Menjalankan Aplikasi (Dev)

Jalankan 2 proses berikut (beda terminal):

Terminal 1:

```bash
php artisan serve
```

Buka aplikasi:

- `http://127.0.0.1:8000`