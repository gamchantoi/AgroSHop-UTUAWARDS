### Instalasi melalui Git

Ikuti instruksi di bawah ini jika Anda ingin menginstal Shopware 5 menggunakan Git.

1.) Clone repositori git ke lokasi yang diinginkan dengan menggunakan:

    git clone https://github.com/shopware/shopware.git

Dalam kasus Anda ingin berkontribusi Shopware, garpu `5.1` cabang daripada kloning itu, dan membuat permintaan tarik melalui Github. Untuk informasi lebih lanjut silahkan baca bagian "Terlibat" dokumen ini.

2.) Mengatur hak akses direktori yang benar:

    chmod 755 config.php
    chmod -R 755 var
    chmod -R 755 web
    chmod -R 755 file
    chmod -R 755 Media
    chmod -R 755 mesin / Shopware / Plugin / Komunitas

Tergantung pada konfigurasi server Anda, mungkin perlu untuk mengatur seluruh hak akses write (777) untuk file dan folder di atas.
Anda juga dapat memulai pengujian dengan izin rendah karena alasan keamanan (644 misalnya) selama proses php Anda dapat menulis ke file-file.

3.) Sebuah [Ant] (http://ant.apache.org/) Buildfile digunakan untuk mengatur konfigurasi dan koneksi database:

    cd membangun /
    configure ant
    ant build-Unit

4.) Download citra uji dan ekstrak mereka:

Pergi ke direktori checkout dan men-download gambar tes:

wget -O test_images.zip http://releases.s3.shopware.com/test_images.zip

Unzip file ke direktori checkout:

test_images.zip unzip

Sekarang Anda dapat mengakses toko Anda

Backend Login: demo / demo