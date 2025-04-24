# 🚀 Inventory Management System - UTS Laravel & Docker

Aplikasi manajemen persediaan barang berbasis Laravel yang dibangun untuk memenuhi tugas Ujian Tengah Semester (UTS). Proyek ini menggunakan Laravel, MySQL, TailwindCSS, dan Docker sebagai alat bantu utama dalam pengembangan.

---

## 🛠️ Langkah-langkah Pengerjaan

Berikut adalah alur pengerjaan yang saya lakukan secara bertahap selama mengembangkan proyek ini:

### 1. Inisialisasi Proyek Laravel

- Menjalankan perintah `laravel new inventory-app` untuk membuat proyek baru.
- Mengatur file `.env` sesuai dengan kebutuhan MySQL dan Vite.
- Menyiapkan file `.gitignore` dan struktur folder dasar.

### 2. Perancangan Database

- Mendesain Entity Relationship Diagram (ERD) terlebih dahulu.
- Membuat migrasi untuk tabel `admins`, `categories`, `suppliers`, dan `items`.
- Menentukan relasi antara tabel (one-to-many dari admin ke barang, kategori, dan supplier).
- Menjalankan `php artisan migrate` untuk membangun struktur database.

### 3. Setup Docker dan Containerisasi

- Menulis file `docker-compose.yml` untuk:
  - Container Laravel (`laravelsail/php82-composer`)
  - Container MySQL
  - Container Node.js untuk Vite/Tailwind
- Menyesuaikan `vite.config.js` agar bisa diakses via `localhost` dari dalam Docker.
- Memastikan Laravel dapat dijalankan dengan `php artisan serve` dan frontend dengan `npm run dev` melalui container Node.js.

### 4. Implementasi Seeder dan Seeder Otomatis

- Membuat seeder: `AdminSeeder`, `CategorySeeder`, `SupplierSeeder`, `ItemSeeder`.
- Memastikan semua relasi data realistis dan logis.
- Mengatur agar proses `php artisan migrate --seed` berjalan otomatis saat container Laravel dibangun.

### 5. Autentikasi Admin

- Membuat login form manual tanpa Jetstream/Breeze.
- Menyimpan data admin di tabel `admins` dan menggunakan `auth('admin')` untuk guard khusus.
- Membuat controller `AdminAuthController` dan halaman login `resources/views/auth/login.blade.php`.

### 6. CRUD dan Tampilan

- Membuat tampilan CRUD untuk kategori, barang, dan supplier menggunakan Blade dan Tailwind.
- Menambahkan navigasi untuk akses cepat ke `/dashboard`, `/dashboard/item`, `/dashboard/category`, dan `/dashboard/supplier`.
- Menggunakan Tailwind untuk tampilan responsif dan modern.

### 7. Statistik Dashboard

- Membuat controller `DashboardController` untuk menampilkan statistik seperti:
  - Total barang
  - Total nilai stok
  - Rata-rata harga
  - Ringkasan berdasarkan kategori dan supplier
  - Barang dengan stok rendah
- Menampilkan statistik dalam bentuk tabel dinamis dan responsif di `dashboard/index.blade.php`.

### 8. Testing & Debugging

- Menjalankan project via `docker compose up`.
- Mengatasi berbagai error seperti:
  - Foreign key constraint (created_by)
  - Error validasi saat input
  - Masalah guard dan middleware saat autentikasi
- Melakukan pengecekan dengan `docker logs` dan `php artisan tinker` untuk testing manual.

---

## ⚙️ Teknologi yang Digunakan

- **Laravel 12**
- **MySQL 8.2** (via Docker)
- **Docker & docker-compose**
- **TailwindCSS + Vite**
- **Node.js 22** (untuk Vite dev server)
- **Blade Templates**
- **Authentication via custom `admins` guard**

---

## 🐳 Menjalankan Proyek

Untuk menjalankan proyek ini secara lokal menggunakan Docker, cukup jalankan perintah berikut:

```bash
docker compose up --build
```

### 🔗 Akses Aplikasi

- **Laravel**: [http://localhost:8000](http://localhost:8000)
- **Vite (Hot Module Reload)**: otomatis aktif di port `5173`

---

## 🏁 Penutup

Proyek ini merupakan gabungan dari berbagai praktik pengembangan modern seperti:

- ✅ Penerapan **konsep MVC Laravel**
- 🗃️ **Relasi antar tabel** pada database MySQL
- 🐳 **Dockerization** dan setup environment container untuk Laravel + MySQL + Node.js
- 🎨 Penggunaan **TailwindCSS** dan Vite untuk frontend modern & responsif
- 🔐 Implementasi **autentikasi manual** menggunakan guard khusus untuk admin
- 📊 Pembuatan **dashboard statistik** yang menampilkan:
  - Ringkasan stok
  - Data per kategori dan pemasok
  - Barang dengan stok rendah

---

## 📚 Pembelajaran

Dalam mengerjakan proyek ini, saya mempelajari:

- Cara mengelola project Laravel dalam container Docker
- Integrasi Vite dan Laravel di container terpisah
- Membangun aplikasi fullstack Laravel dengan fitur autentikasi dan data-driven dashboard

Proyek ini memperkuat pemahaman saya terhadap pengembangan aplikasi Laravel.
