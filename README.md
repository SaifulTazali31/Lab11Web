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


# LANGKAH 5

Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().
![ss32](https://user-images.githubusercontent.com/81814954/124261677-45884f00-db5b-11eb-8cc3-40391324eb03.JPG)


# LANGKAH 6
Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.
![ss36](https://user-images.githubusercontent.com/81814954/124261776-651f7780-db5b-11eb-8979-e8e95982282e.JPG)



# LANGKAH 7
Membuat Routing Untuk Artikel Detail
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.
![ss37](https://user-images.githubusercontent.com/81814954/124262145-dfe89280-db5b-11eb-90be-3078fafb7a48.JPG)


Maka akan tampil halaman dari artikel yang di klik.

![ss38](https://user-images.githubusercontent.com/81814954/124262204-f1319f00-db5b-11eb-9f86-7313d1ff5884.JPG)

# LANGKAH 8
Membuat Menu Admin
Buat method baru pada Controller Artikel dengan nama admin_index().
![ss39](https://user-images.githubusercontent.com/81814954/124276483-0dd6d280-db6e-11eb-803f-1585823ee15b.JPG)


Kemudian buat view untuk tampilan admin dengan nama admin_index.php.
![ss40](https://user-images.githubusercontent.com/81814954/124276850-8b9ade00-db6e-11eb-8ee3-319cf7f78c8a.JPG)


Tambahkan routing untuk menu admin seperti berikut:
![ss41](https://user-images.githubusercontent.com/81814954/124276958-ab320680-db6e-11eb-9105-6c0b9443dc43.JPG)


Setelah itu buat template header dan footer baru untuk Halaman Admin. Buat file baru dengan nama admin_header.php pada direktori app/view/template
![ss42](https://user-images.githubusercontent.com/81814954/124277191-f77d4680-db6e-11eb-839e-6a8b8fb573e3.JPG)



Dan Buat file baru lagi dengan nama admin_footer.php pada direktori app/view/template
![ss43](https://user-images.githubusercontent.com/81814954/124277391-2eebf300-db6f-11eb-82b7-6fce67f8f12b.JPG)


Kemudian buat file baru lagi dengan nama admin.css pada direktori ci4/public untuk mempercantik tampilan Halaman Admin.
![ss44](https://user-images.githubusercontent.com/81814954/124277543-58a51a00-db6f-11eb-983d-e7f2de9b907f.JPG)


![ss45](https://user-images.githubusercontent.com/81814954/124277652-7d998d00-db6f-11eb-8294-58e7b0ab46c8.JPG)


![ss46](https://user-images.githubusercontent.com/81814954/124277784-a457c380-db6f-11eb-9665-843c6bcc1b39.JPG)


![ss47](https://user-images.githubusercontent.com/81814954/124277878-c0f3fb80-db6f-11eb-8c0b-a37dab0ac91a.JPG)


![ss48](https://user-images.githubusercontent.com/81814954/124277916-cb15fa00-db6f-11eb-9451-c2bfd10b4b12.JPG)


![ss49](https://user-images.githubusercontent.com/81814954/124278043-f862a800-db6f-11eb-8b07-c5c5ef4e0e62.JPG)

# LANGKAH 9
Menambahkan Data Artikel
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().
![ss50](https://user-images.githubusercontent.com/81814954/124280227-a1120700-db72-11eb-88cc-312fe8e0cfec.JPG)


Kemudian buat view untuk form tambah dengan nama form_add.php
![ss51](https://user-images.githubusercontent.com/81814954/124280351-c868d400-db72-11eb-9920-9426be1dd559.JPG)


![ss52](https://user-images.githubusercontent.com/81814954/124280489-ef270a80-db72-11eb-8d4b-0f64b033a35e.JPG)


# Praktikum 13 - Framework Lanjutan (Modul Login)

Pemrograman Web
Saiful Tazali

311910625

TI.19.C1



Persiapan
Untuk memulai membuat modul Login, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.

Kemudian Membuat Tabel: User Login
![ss60](https://user-images.githubusercontent.com/81814954/124340138-3f3ab700-dbdd-11eb-9060-4cd39f32728f.JPG)



Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori app/Models dengan nama UserModel.php
![ss61](https://user-images.githubusercontent.com/81814954/124340283-46ae9000-dbde-11eb-8a55-81fd5853a97c.JPG)


# LANGKAH 2
Membuat Controller User
Buat Controller baru dengan nama User.php pada direktori app/Controllers. Kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login.
![ss62](https://user-images.githubusercontent.com/81814954/124340303-60e86e00-dbde-11eb-8168-7a1098c9b003.JPG)


# LANGKAH 3
Membuat View Login
Buat direktori baru dengan nama user pada direktori app/views, kemudian buat file baru dengan nama login.php.
![ss63](https://user-images.githubusercontent.com/81814954/124340561-3eefeb00-dbe0-11eb-8337-f3699ea85008.JPG)


# LANGKAH 4
Membuat Database Seeder
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut: php spark make:seeder UserSeeder
![ss64](https://user-images.githubusercontent.com/81814954/124340570-5202bb00-dbe0-11eb-91c9-76398bc6ca9c.JPG)


Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:
![ss65](https://user-images.githubusercontent.com/81814954/124341429-7eb9d100-dbe6-11eb-8f49-c36631c5fd3d.JPG)


Selanjutnya buka kembali CLI dan ketik perintah berikut: php spark db:seed UserSeeder
![ss66](https://user-images.githubusercontent.com/81814954/124341515-128b9d00-dbe7-11eb-8bd3-e05c8a541ae4.JPG)


Jangan lupa jalankan perintah ini untuk menjalankan ci4 di port 8080. Buka kembali CLI dan ketik perintah berikut: php spark serve
![ss66](https://user-images.githubusercontent.com/81814954/124341698-6a76d380-dbe8-11eb-9f7f-dd6f91bb7445.JPG)

Tambahkan CSS untuk mempercantikan tampilan login. Buka file style.css pada direktori ci4\public\style.css
![ss67](https://user-images.githubusercontent.com/81814954/124341784-26d09980-dbe9-11eb-913a-b276c01316d3.JPG)


Uji Coba Login
Selanjutnya buka url http://localhost:8080/user/login seperti berikut:
![ss68](https://user-images.githubusercontent.com/81814954/124342770-9302cb80-dbf0-11eb-917d-816ce25473ab.JPG)


LANGKAH 5
Menambahkan Auth Filter
Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filters.
![ss69](https://user-images.githubusercontent.com/81814954/124353225-776ae580-dc2f-11eb-92c7-aec8d832eea6.JPG)


Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut: 'auth' => App\Filters\Auth::class
![ss70](https://user-images.githubusercontent.com/81814954/124353244-9b2e2b80-dc2f-11eb-8ed6-d5934d9aaa15.JPG)


Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.
![ss71](https://user-images.githubusercontent.com/81814954/124353351-23accc00-dc30-11eb-9227-b9f9f727c7a9.JPG)


# LANGKAH 6
Fungsi Logout
Tambahkan method logout pada Controller User seperti berikut:
![ss72](https://user-images.githubusercontent.com/81814954/124353408-8e5e0780-dc30-11eb-9fcc-eef9ee6eb7f8.JPG)


Tambahkan menu logout di header admin. Ke direktori app\view\template lalu buka file admin_header.php tambahkan kode berikut

<a href="<?= base_url('/admin/logout');?>">Logout</a>
![ss73](https://user-images.githubusercontent.com/81814954/124353469-e85ecd00-dc30-11eb-885f-175f2046a693.JPG)


Tambahkan route logout dengan cara ke direktori app\Config\Routes.php lalu tambahkan kode berikut

$routes->add('logout', 'User::logout');
![ss74](https://user-images.githubusercontent.com/81814954/124353507-1e9c4c80-dc31-11eb-9f16-6c9ba5a2d973.JPG)


ANGKAH 7
Percobaan Akses Menu Admin
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login.
![ss75](https://user-images.githubusercontent.com/81814954/124353557-691dc900-dc31-11eb-9047-0b3e8c654f8f.JPG)


![ss76](https://user-images.githubusercontent.com/81814954/124353564-72a73100-dc31-11eb-9f59-c1cfdfc5192b.JPG)

Praktikum 14 - Pagination dan Pencarian

Pemrograman Web

Saiful tazali

311910625

TI.19.C1

LANGKAH 1
Membuat Pagination
Pagination merupakan proses yang digunakan untuk membatasi tampilan yang panjang dari data yang banyak pada sebuah website. Fungsi pagination adalah memecah tampilan menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan pada setiap halaman. Pada Codeigniter 4, fungsi pagination sudah tersedia pada Library sehingga cukup mudah menggunakannya. Untuk membuat pagination, buka Kembali Controller Artikel - htdocs\lab11_ci\ci4\Controllers\Artikel.php, kemudian modifikasi kode pada method admin_index seperti berikut.

![ss81](https://user-images.githubusercontent.com/81814954/125155282-e349d280-e188-11eb-9c85-29202cee9b20.JPG)


Kemudian buka file views/artikel/admin_index.php dan tambahkan kode berikut dibawah deklarasi tabel data.
![ss82](https://user-images.githubusercontent.com/81814954/125155329-3a4fa780-e189-11eb-8748-14529062e59b.JPG)


Selanjutnya buka kembali menu daftar artikel, tambahkan data lagi untuk melihat hasilnya.
![ss83](https://user-images.githubusercontent.com/81814954/125155341-505d6800-e189-11eb-9164-ea2ea1ef85a7.JPG)


LANGKAH 2
Membuat Pencarian
Pencarian data digunakan untuk memfilter data. Untuk membuat pencarian data, buka kembali Controller Artikel - htdocs\lab11_ci\ci4\Controllers\Artikel.php, pada method admin_index ubah kodenya seperti berikut
![ss84](https://user-images.githubusercontent.com/81814954/125155578-2b69f480-e18b-11eb-806f-1749e0a7edb8.JPG)


\Kemudian buka kembali file views/artikel/admin_index.php dan tambahkan form pencarian sebelum deklarasi tabel seperti berikut:
![ss85](https://user-images.githubusercontent.com/81814954/125155593-43da0f00-e18b-11eb-9fd7-6dc544d47203.JPG)


Dan pada link pager ubah seperti berikut.
![ss86](https://user-images.githubusercontent.com/81814954/125155623-58b6a280-e18b-11eb-8987-adf8808e7dbf.JPG)


![ss87](https://user-images.githubusercontent.com/81814954/125155643-6e2bcc80-e18b-11eb-8b4a-5a9b475d88b1.JPG)

LANGKAH 3
Upload Gambar
Menambahkan fungsi unggah gambar pada tambah artikel. Buka kembali Controller Artikel - htdocs\lab11_ci\ci4\Controllers\Artikel.php, sesuaikan kode pada method add seperti berikut:
![ss88](https://user-images.githubusercontent.com/81814954/125156194-7f2a0d00-e18e-11eb-863e-7ff7b1de1b0f.JPG)


![ss89](https://user-images.githubusercontent.com/81814954/125156264-cfa16a80-e18e-11eb-95f3-c16a51929d05.JPG)


![ss90](https://user-images.githubusercontent.com/81814954/125156276-daf49600-e18e-11eb-8a91-39afd2cf6566.JPG)











































































































