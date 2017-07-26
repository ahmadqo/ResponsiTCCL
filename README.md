# RESPONSI Teknologi Cloud Computing Lanjut
## Dockerise aplikasi PHP menggunakan Nginx dan PHP7-FPM

  ### Nginx (baca: engine x) adalah sebuah server HTTP dan reverse proxy bebas berbasis open-source yang berkemampuan tinggi, juga dapat digunakan sebagai server proxy IMAP/POP3.
  ### PHP-FPM adalah modul yang digunakan nginx agar halaman web yang berbasis nginx bisa membuka halaman yang menggunakan php, berikut ini tutorialnya.

## docker-compose.yml
  Ini digunakan untuk menjalankan image Nginx dan untuk membuka port 80 dan 8080.
  docker-compose.yml ini juga digunakan untuk me-mount folder code yang didalamnya berisi kode program php yang akan dijalankan.

## site.conf
  File dibuat agar nginx mengetahui bahwa folder code itu ada.
  Dan di file ini dilakukan konfigurasi terhadap Nginx menggunakan container PHP-FPM untuk meng-interpreting file php.

## Untuk menjalankan aplikasi ini menggunakan perintah
  $sudo docker-compose up

  ### Untuk melihat hasilnya di web browser "localhost:8080"
  <img align=center src=img/sc.png alt="Menu HOME">
  <img align=center src=img/sc1.png alt="Menu ABOUT">
