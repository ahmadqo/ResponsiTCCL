# RESPONSI Teknologi Cloud Computing Lanjut

  #### Nginx (baca: engine x) adalah sebuah server HTTP dan reverse proxy bebas berbasis open-source yang berkemampuan tinggi, juga dapat digunakan sebagai server proxy IMAP/POP3.

## Dockerfile
    File ini digunakan untuk membuat image dari nginx.

## docker-compose.yml
    Ini digunakan untuk menggabungkan beberapa container. tetapi pada praktik ini saya tidak melakukan compose.

## Untuk menjalankan aplikasi ini menggunakan perintah
    $ sudo docker build -t responsitccl .
    $ sudo docker run --rm -p 80:80 responsitccl


  ### Untuk melihat hasilnya di web browser "localhost"
  <img align=center src=img/sc.png alt="Menu HOME">
