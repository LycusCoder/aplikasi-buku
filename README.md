---

### **Langkah 1: Persiapan Proyek**

1. **Pastikan Proyek Siap**:

    - Hapus file sensitif seperti `.env` (jangan upload ke GitHub!).
    - Pastikan semua dependensi terinstal (`composer install` atau `npm install`).
    - Pastikan file `.gitignore` sudah ada (Laravel sudah menyertakan template `.gitignore` default).

2. **Buat Repositori GitHub**:
    - Buka [GitHub](https://github.com) dan login.
    - Klik tombol **New repository**.
    - Beri nama repositori (misalnya: aplikasi-buku).
    - Pilih visibilitas (public/private).
    - Jangan centang "Initialize this repository with a README" (karena kita akan upload proyek lokal).

---

### **Langkah 2: Inisialisasi Git**

1. **Buka Terminal di Folder Proyek**:

    ```bash
    cd path/ke/aplikasi_buku
    ```

2. **Inisialisasi Git**:

    ```bash
    git init
    ```

3. **Tambahkan Remote Repositori**:
    ```bash
    git remote add origin https://github.com/username-anda/aplikasi-buku.git
    ```
    Ganti `username-anda` dengan username GitHub Anda.

---

### **Langkah 3: Buat README.md**

Buat file `README.md` di root proyek dengan konten berikut:

````markdown
# Aplikasi Buku dengan Laravel

[![Laravel Version](https://img.shields.io/badge/Laravel-9.x-red)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.1-blue)](https://www.php.net)

Aplikasi sederhana untuk menampilkan daftar buku menggunakan framework Laravel. Proyek ini mencakup fitur CRUD dasar, migrasi database, dan seeding data.

---

## Fitur

-   Menampilkan daftar buku dari database.
-   Integrasi dengan Eloquent ORM untuk manajemen data.
-   Templating dengan Blade untuk tampilan yang dinamis.
-   Seeder untuk mengisi data dummy.

---

## Persyaratan

-   PHP 8.1+
-   MySQL/MariaDB
-   Composer
-   Laravel 9.x

---

## Instalasi

1. **Clone repositori**:
    ```bash
    git clone https://github.com/username-anda/aplikasi-buku.git
    cd aplikasi-buku
    ```
````

2. **Salin file `.env.example` ke `.env`**:

    ```bash
    cp .env.example .env
    ```

3. **Konfigurasi database di `.env`**:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=apliasi_buku
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. **Instal dependensi**:

    ```bash
    composer install
    ```

5. **Generate Application Key**:

    ```bash
    php artisan key:generate
    ```

6. **Jalankan migrasi dan seeder**:

    ```bash
    php artisan migrate --seed
    ```

7. **Jalankan server lokal**:
    ```bash
    php artisan serve
    ```

Akses aplikasi di: http://localhost:8000/buku

---

## Penggunaan

-   **Daftar Buku**: Akses `/buku` untuk melihat semua buku.
-   **Seeder**: Data dummy buku sudah diisi melalui `BukuSeeder`.

---

## Kontribusi

Kontribusi dipersilakan! Silakan buat _pull request_ atau laporkan _issue_.

---

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE.md).

---

## Credits

-   [Laravel Framework](https://laravel.com)
-   [PHP](https://www.php.net)

````

---

### **Langkah 4: Commit dan Push ke GitHub**
1. **Tambahkan Semua File**:
   ```bash
   git add .
````

2. **Commit Perubahan**:

    ```bash
    git commit -m "Initial commit: aplikasi buku dengan Laravel"
    ```

3. **Push ke GitHub**:
    ```bash
    git push -u origin main
    ```
    Jika menggunakan branch `master`, ganti `main` dengan `master`.

---

### **Langkah 5: Verifikasi**

1. Buka repositori GitHub Anda di browser.
2. Pastikan semua file terupload dan `README.md` tampil dengan baik.

---
