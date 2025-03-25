**Sebelum memulai pemrogaman web, ada beberapa tools yang harus kita siapkan, ada wsl, vscode, docker, browser**

**Jika sudah, pastikan seluruh tools tadi sudah saling terhubung**

## Pemrogaman Website: Apa, Mengapa, dan Bagaimana Cara Melakukannya?

Dalam bidang pemrograman web, proses pembelajaran mencakup perancangan dan pengelolaan website. Sebuah website terdiri atas beberapa elemen utama, yaitu HTML dan Docker. Ketiga elemen tersebut memiliki fungsi yang berbeda, namun saling melengkapi dan bekerja secara terintegrasi untuk menghasilkan website yang optimal.

#### **- HTML dan Docker**

**HTML** (HyperText Markup Language): berfungsi sebagai kerangka atau struktur dasar dari suatu website. Elemen-elemen seperti header, paragraf, gambar, dan tabel didefinisikan melalui HTML.

**Docker**: adalah platform yang bertindak sebagai wadah (container) untuk mengelola dan menjalankan aplikasi, termasuk website. Docker membantu pengembang dalam menciptakan lingkungan pengembangan yang seragam dan stabil.

#### **- Mengapa HTML dan Docker Penting?**
Kedua elemen ini penting karena masing-masing memiliki peran spesifik yang saling melengkapi. HTML membentuk kerangka dasar dan Docker memastikan bahwa aplikasi dapat dijalankan di lingkungan yang aman, stabil, dan seragam.

#### **- Kapan dan Di Mana Website Dijalankan?**
Website yang dibuat akan dijalankan di server lokal, atau sering disebut localhost. Untuk membangun dan menjalankan program ini, Anda memerlukan aplikasi pengembangan, seperti Visual Studio Code (VSCode).

#### **- Bagaimana Menghubungkan VSCode dengan Docker?**
Untuk mengintegrasikan VSCode dengan Docker, dilakukan beberapa langkah konfigurasi, di antaranya:

- File .env: Buat dan sesuaikan file .env dengan nama composer yang relevan. File ini akan berisi konfigurasi dasar yang dibutuhkan oleh Docker.

- Docker Compose: Lakukan konfigurasi pada docker-compose untuk menambahkan beberapa parameter, seperti port (untuk menghubungkan aplikasi dengan jaringan lokal) dan volumes (untuk mengelola data aplikasi).

#### **- Apa yang Dibutuhkan Selain Konfigurasi?**
Selain file konfigurasi, Anda perlu membuat beberapa folder pendukung:

- Folder nginx: Folder ini digunakan untuk menyimpan konfigurasi Nginx, sebuah web server yang berfungsi sebagai perantara antara pengguna dan aplikasi.

- Folder src: Folder src akan berfungsi sebagai tempat menyimpan kode sumber (source code) dari aplikasi atau website yang sedang Anda kembangkan.

## **Analisis SWOT Pengembangan Website**  

**Strengths (Kekuatan)**  
- HTML memberikan kerangka dasar website.    
- Docker menciptakan lingkungan kerja yang stabil dan konsisten.  
- Mudah diintegrasikan dengan aplikasi seperti VSCode.  
- Portabilitas tinggi: aplikasi dapat berjalan di berbagai platform.  

**Weaknesses (Kelemahan)**  
- Konfigurasi Docker cukup rumit untuk pemula.  
- Ketergantungan pada pengetahuan jaringan dan container.  
- HTML dan CSS tanpa backend cenderung menghasilkan website statis.  
- Kinerja bisa terganggu jika konfigurasi Docker kurang optimal.  

**Opportunities (Peluang)**
- Peningkatan produktivitas dan efisiensi kerja.  
- Meningkatkan peluang karier di bidang web development.  
- Mendukung adopsi teknologi modern seperti Kubernetes.  
- Mempermudah kolaborasi antar-developer.  

**Threats (Ancaman)**  
- Persaingan ketat di dunia web development.  
- Teknologi yang cepat berubah bisa membuat metode lama usang.  
- Risiko keamanan jika konfigurasi Docker tidak aman.  
- Kendala teknis seperti error konfigurasi atau kompatibilitas perangkat.

