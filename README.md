# Micronotification
Plugin notifikasi untuk framework microservice alter indonesia

## Installasi
```bash
composer require febrianrz/micronotification
```

## Penggunaan
* Untuk menggunakan library ini, berikut adalah penggunaanya:
```bash
Notif::send('febrianrz@gmail.com',1,[
    'subject'   => 'Subjeknya',
    'body'      => 'Bodynya'
]);
```
Parameter pertama adalah email, bisa juga berupa array, parameter kedua adalah id user jika ada, parameter ketiga adalah optionnya.

* Untuk penggunaan via ajax, berikut adalah parameternya:
```json
app_id:2
app_secret:VP9u7eIkI9Bsu09AbmfhQIFXGaIeN2ea1YCn4Q7H
subject:Subjeknya
body:tes
channel[email][]:febrianrz@gmail.com
channel[email][]:admin@admin.com
channel[telegram][]:channel id
channel[web][]:link
```