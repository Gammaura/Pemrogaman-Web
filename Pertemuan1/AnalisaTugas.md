## Laporan Latihan 1

Pertama kita harus membuat folder latihan didalam folder Project1, setelah itu buat file baru bernama index.html dan profile.html

Lalu lakukan perubahan atau update pada file nginx.conf dan file docker-compose untuk mengintegrasikan agar program dalam dijalankan di local host, setelah isi file sudah diubah, jangan lupa untuk menonaktifkan docker terlebih dahulu melalui terminal dengan mengetikkan docker compose down, dan nyalakan kembali dengan mengetikkan docker compose up -d --build

Ujicoba dengan melakukan pengisian pada file index.html lalu buka browser dan ketikkan localhost/latihan/index.html untuk langsung mengakses index.html

Setelah itu barulah dilakukan penyesuaian sesuai dengan yang tertera di Analisa

## Analisa Latihan 1

Pertama saya ingin membuat 2 halaman html yang dapat terhubung 1 sama lain, yaitu Halaman Utama dan Halaman Profile, maka diperlukan untuk membuat 2 file html yang bernama index.html dan profile.html

Kedua update isi dari nginx.conf dan docker-compose untuk dapat mengintegrasikan program di local host, nonaktifkan lalu aktifkan kembali docker, setelah itu lakukan ujicoba dengan mengisi file index.html

Pada Halaman Utama saya ingin menambahkan judul pada bagian atas, dibawah nya disertai dengan icon, lalu dibawah nya lagi terdapat kata sapaan, serta untuk beralih halaman terdapat tombol berganti halaman ke halaman profile

Pada Halaman Profile, dapat diakses dengan mengklik tombol pindah halaman pada halaman utama, di halaman ini akan tedapat judul utama, icon, nama saya, nim, fakultas dan prodi, serta tombol untuk kembali ke halaman utama

**Kelebihan HTML yang saya buat**

- Sederhana
- Sesuai dengan tujuan awal saya, yaitu dapat menghubungkan antara 2 halaman
- Dapat dilakukan update apabila ingin terdapat perubahan

**Kekurangan HTML yang saya buat**

- Dapat diakses langsung melalui pencarian url
- Tidak enak dilihat
- Terlalu sederhana