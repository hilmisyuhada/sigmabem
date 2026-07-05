Untuk tim backend (atau siapa pun) yang ingin mengambil dan menjalankan *project* Laravel dari GitHub Anda, mereka tidak bisa hanya sekadar mengunduh *file*-nya lalu langsung dijalankan.

Hal ini karena folder-folder berat seperti `vendor` dan *file* rahasia seperti `.env` secara *default* diabaikan (di-ignore) oleh Git dan tidak ikut terunggah ke GitHub.

Berikut adalah langkah-langkah **standar** yang harus dilakukan oleh tim backend Anda di terminal/CMD mereka:

### 1. Clone Repository (Mengambil Kodingan)

Pertama, mereka harus men-*download* (clone) kodingan dari GitHub Anda ke komputer mereka.

```bash
git clone https://github.com/hilmisyuhada/sigmabem.git

```

### 2. Masuk ke Folder Project

Setelah berhasil di-clone, masuk ke dalam folder *project* tersebut.

```bash
cd sigmabem

```

### 3. Install Dependencies (Composer)

Karena folder `vendor` (yang berisi inti framework Laravel) tidak ikut ter-upload ke GitHub, mereka harus menginstalnya kembali dengan perintah:

```bash
composer install

```

*(Proses ini membutuhkan koneksi internet dan akan men-download file-file framework).*

### 4. Buat File Environment (.env)

File `.env` berisi konfigurasi database dan rahasia aplikasi yang tidak boleh di-upload ke GitHub. Mereka harus menduplikat file `.env.example` dan mengubah namanya menjadi `.env`.

Jika menggunakan **Command Prompt (Windows)**:

```cmd
copy .env.example .env

```

Jika menggunakan **Git Bash / Terminal (Mac/Linux)**:

```bash
cp .env.example .env

```

### 5. Generate Application Key

Laravel membutuhkan kunci keamanan (App Key) yang unik untuk setiap instalasi. Jalankan perintah ini:

```bash
php artisan key:generate

```

### 6. Konfigurasi Database (Opsional, tapi penting untuk Backend)

Tim backend harus membuka file `.env` yang baru saja dibuat di *code editor* mereka, lalu mengatur koneksi database lokal mereka. Biasanya di bagian ini:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_lokal_mereka
DB_USERNAME=root
DB_PASSWORD=

```

Setelah itu, mereka bisa menjalankan migrasi database:

```bash
php artisan migrate

```

### 7. Jalankan Server

Langkah terakhir, mereka tinggal menjalankan server lokal Laravel:

```bash
php artisan serve

```

Dan *website* SIGMA BEM sudah bisa diakses di komputer mereka melalui `http://localhost:8000`.

---
