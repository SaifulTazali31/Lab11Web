# Lab11Web
# Pemrograman Web
Nama  :  Saiful Tazali

Nim   :  311910625

Kelas :  TI.19.C1

Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4.

Berikut beberapa ekstensi yang perlu diaktifkan:

php-json ekstension untuk bekerja dengan JSON;
php-mysqlnd native driver untuk MySQL;
php-xml ekstension untuk bekerja dengan XML;
php-intl ekstensi untuk membuat aplikasi multibahasa;
libcurl (opsional), jika ingin pakai Curl
LANGKAH 1
Untuk mengaktifkan ekstentsi tersebut, melalui XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini
![ss3](https://user-images.githubusercontent.com/81814954/122625753-ef35fd80-d0d0-11eb-8f92-f11d6092f5c9.JPG)


![ss4](https://user-images.githubusercontent.com/81814954/122625779-083eae80-d0d1-11eb-8360-815f0135e860.JPG)


Kemudian buat folder baru dengan nama lab11_ci pada doc root webserver (htdocs)
![ss9](https://user-images.githubusercontent.com/81814954/122625821-4fc53a80-d0d1-11eb-9626-39dfdcc325b6.JPG)


LANGKAH 2
Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.

Unduh Codeigniter dari website https://codeigniter.com/download

Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.

Ubah nama direktory framework-4.x.xx menjadi ci4.
![ss2](https://user-images.githubusercontent.com/81814954/122625843-76837100-d0d1-11eb-8ba9-7386d1182e12.JPG)


LANGKAH 3
Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt. Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (cd C:\xampp\htdocs\lab11_php_ci\ci4\) Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: php spark
![ss1](https://user-images.githubusercontent.com/81814954/122625868-92871280-d0d1-11eb-9fc2-f59bca01ffe4.JPG)


LANGKAH 4
Mengaktifkan Mode Debugging
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.
![ss5](https://user-images.githubusercontent.com/81814954/122625890-b34f6800-d0d1-11eb-898f-5322fbdb9dc3.JPG)



Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. Kemudian mengubah nama file env menjadi .env lalu setelah itu buka file tersebut dan ubah nilai variable CI_ENVORNMENT menjadi development. Setelah mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. maka hapus tanda tagar (#) pada awal baris CI_ENVIRONMENT. Dan yang terakhir, ubah kode pada file app/Controller/Home.php kemudian hilangkan titik koma (;) pada akhir kode seperti berikut.

![ss11](https://user-images.githubusercontent.com/81814954/122625955-fa3d5d80-d0d1-11eb-9112-8d3998c5c241.JPG)


![ss10](https://user-images.githubusercontent.com/81814954/122625960-032e2f00-d0d2-11eb-891f-50a4468acac5.JPG)

LANGKAH 5
Membuat Route Baru
Tambahkan kode berikut di dalam app/config/Routes.php
![ss12](https://user-images.githubusercontent.com/81814954/122626012-3ffa2600-d0d2-11eb-908f-e7f963ac242b.JPG)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut. php spark

Ketik perintah berikut untuk menjalankan server CI 4 pada port 8080. php spark serve
![ss7](https://user-images.githubusercontent.com/81814954/122626046-661fc600-d0d2-11eb-98e0-097988d1074a.JPG)

Setelah itu jalankan "php spark routes" kemudian mengakses alamat url http://localhost:8080/abou untuk melihat hasilnya
Membuat Controlller
Buatlah file baru dengan nama "page.php" pada direktori Controller, setelah itu tulis codenya dan refresh untuk melihat perubahannya.

![ss13](https://user-images.githubusercontent.com/81814954/122626451-dfb8b380-d0d4-11eb-8d85-fb83c9065a34.JPG)


Membuat view
Buatlah file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya,lalu refresh
![ss14](https://user-images.githubusercontent.com/81814954/122626492-18f12380-d0d5-11eb-9f1a-b3ed44452956.JPG)

Membuat Layout Web dengan CSS
Buatlah file css dengan menggunakan layout yang pernah dibuat pada praktikum 4.
![ss15](https://user-images.githubusercontent.com/81814954/122626596-9fa60080-d0d5-11eb-9bba-9e3dc1299eaf.JPG)










