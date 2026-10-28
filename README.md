🚗 Nusantara Motors REST API

REST API untuk mengelola data mobil pada sistem showroom Nusantara Motors, dibangun menggunakan Laravel 12 dan dideploy menggunakan Clever Cloud.

<p align="center">
  <a href="https://app-fbab5e92-fb8e-4f4a-8010-233fa7a39791.cleverapps.io">
    <img src="https://img.shields.io/badge/Live%20API-Clever%20Cloud-blue?style=for-the-badge" alt="Live API"/>
  </a>
  <a href="https://app-fbab5e92-fb8e-4f4a-8010-233fa7a39791.cleverapps.io/docs/api">
    <img src="https://img.shields.io/badge/API%20Docs-OpenAPI-green?style=for-the-badge" alt="API Documentation"/>
  </a>
</p>🌐 Live Deployment

- Live API: https://app-fbab5e92-fb8e-4f4a-8010-233fa7a39791.cleverapps.io
- API Documentation: https://app-fbab5e92-fb8e-4f4a-8010-233fa7a39791.cleverapps.io/docs/api
- GitHub Repository: https://github.com/Ditt-Maulana/BTNG-Backend-AdityaImanMaulana

✨ Features

- Menampilkan daftar mobil.
- Menambahkan data mobil baru.
- Menampilkan detail mobil.
- Memperbarui data mobil.
- Menghapus data mobil.
- Dokumentasi endpoint API yang dapat diakses melalui browser.

🛠️ Tech Stack

- Framework: Laravel 12
- Language: PHP
- Architecture: RESTful API
- API Documentation: OpenAPI
- Deployment: Clever Cloud
- Version Control: Git & GitHub

📌 API Endpoints

Base URL:

https://app-fbab5e92-fb8e-4f4a-8010-233fa7a39791.cleverapps.io

Method| Endpoint| Description
GET| "/api/mobil"| Mendapatkan daftar mobil
POST| "/api/mobil"| Menambahkan mobil
GET| "/api/mobil/{mobil}"| Mendapatkan detail mobil
PUT| "/api/mobil/{mobil}"| Memperbarui data mobil
DELETE| "/api/mobil/{mobil}"| Menghapus data mobil

«Buka dokumentasi API untuk melihat skema request, parameter, dan format respons setiap endpoint.»

🚀 Getting Started

Requirements

- PHP sesuai versi yang didukung proyek
- Composer
- Database yang dikonfigurasi untuk aplikasi

Installation

1. Clone repository:
   
   git clone https://github.com/Ditt-Maulana/BTNG-Backend-AdityaImanMaulana.git

2. Masuk ke folder proyek:
   
   cd BTNG-Backend-AdityaImanMaulana

3. Install dependencies:
   
   composer install

4. Salin konfigurasi environment:
   
   cp .env.example .env

5. Generate application key:
   
   php artisan key:generate

6. Sesuaikan konfigurasi database di file ".env".

7. Jalankan migration jika migration tersedia dan database sudah dikonfigurasi:
   
   php artisan migrate

8. Jalankan server lokal:
   
   php artisan serve

Aplikasi lokal biasanya dapat diakses melalui "http://127.0.0.1:8000".

🧪 API Testing

Endpoint dapat diuji melalui dokumentasi API:

"Buka Nusantara Motors API Documentation" (https://app-fbab5e92-fb8e-4f4a-8010-233fa7a39791.cleverapps.io/docs/api)

Pilih endpoint, isi parameter atau request body sesuai skema yang tersedia, lalu kirim request untuk melihat respons server.

Perhatian: Endpoint "DELETE" dapat menghapus data. Gunakan dengan hati-hati.

📂 Project Purpose

Proyek ini dibuat sebagai implementasi backend REST API untuk pengelolaan data mobil, mencakup operasi CRUD dan deployment aplikasi ke lingkungan cloud.

👨‍💻 Author

Aditya Iman Maulana

GitHub: "@Ditt-Maulana" (https://github.com/Ditt-Maulana)

---

<p align="center">
  Made with ❤️ using Laravel
</p>
