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


LANGKAH 7
Auto Routing
Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false. Kemudian tambahkan method baru pada Controller Page seperti berikut. Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos
![ss18](https://user-images.githubusercontent.com/81814954/123447225-cc8d7280-d603-11eb-9b36-b6abf6e2215c.JPG)

LANGKAH 8
Membuat Views
Selanjutnya adalah membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut. Kemudian ubah method about pada class Controller Page menjadi seperti berikut.
![ss19](https://user-images.githubusercontent.com/81814954/123451076-93570180-d607-11eb-8fcc-421c8882ff92.JPG)


LANGKAH 9
Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplementasikan dengan mudah pada Codeigniter. Yang perlu diketahui adalah pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public. Buat file css pada direktori public dengan nama style.css seperti berikut.
![ss20](https://user-images.githubusercontent.com/81814954/123452931-1fb5f400-d609-11eb-897a-1a2546dbec54.JPG)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php seperti berikut.
![ss21](https://user-images.githubusercontent.com/81814954/123465232-0ff1dc00-d618-11eb-8a98-a39968261d7c.JPG)


bikin file footer.php dan header.php
![ss22](https://user-images.githubusercontent.com/81814954/123467492-c787ed80-d61a-11eb-8b8c-50cb38281ecf.JPG)


![ss23](https://user-images.githubusercontent.com/81814954/123467554-d53d7300-d61a-11eb-8862-608b6fcac846.JPG)



kemudian ubah file about.php
![ss24](https://user-images.githubusercontent.com/81814954/123467645-f2724180-d61a-11eb-8f56-0ee65edaf7f5.JPG)



![ss35](https://user-images.githubusercontent.com/81814954/123483814-8cdd7f80-d631-11eb-8635-def4421914da.JPG)















# Praktikum 12 ( Lanjutan Codeigniter )
Pemrograman Web


SaifulTazali


311910625
TI.19.C1


Persiapan
Pastikan MySQL server sudah berjalan, Kemudian buat sebuah database dan table sebagai berikut:
![ss25](https://user-images.githubusercontent.com/81814954/123472888-fce40980-d621-11eb-9812-42d3fe53d78b.JPG)


![ss26](https://user-images.githubusercontent.com/81814954/123472985-200eb900-d622-11eb-9e0d-5303f3b2737c.JPG)


LANGKAH 1
Konfigurasi Koneksi Database
Konfigurasi dapat dilakukan dengan cara mengubah beberapa kode pada file htdocs\lab11_ci\ci4\.env. Dan hilangkan tanda pagar # didepan. Maka jadi seperti dibawah ini.
![ss27](https://user-images.githubusercontent.com/81814954/123473323-9ca19780-d622-11eb-9eb4-c23114545c76.JPG)




LANGKAH 2
Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php
![ss28](https://user-images.githubusercontent.com/81814954/123473722-2b161900-d623-11eb-9766-08052f30156b.JPG)


LANGKAH 3
Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.
![ss29](https://user-images.githubusercontent.com/81814954/123475169-39fdcb00-d625-11eb-8d75-7642b9b4a093.JPG)


LANGKAH 4
Membuat View
Buat folder baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php
![ss30](https://user-images.githubusercontent.com/81814954/123476332-c230a000-d626-11eb-869b-57c8811694b8.JPG)


Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel
![ss31](https://user-images.githubusercontent.com/81814954/123476466-f5732f00-d626-11eb-9f83-7921247b2618.JPG)



Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.
![ss33](https://user-images.githubusercontent.com/81814954/123483409-d7123100-d630-11eb-9f8a-13e476b61a6b.JPG)


Refresh kembali browser, sehingga akan ditampilkan hasilnya.
![ss34](https://user-images.githubusercontent.com/81814954/123483459-eb562e00-d630-11eb-8639-09357ed480fd.JPG)


LANGKAH 5
Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().



































