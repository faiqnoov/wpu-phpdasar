<?php
// Date
// untuk menampilkan tanggal dgn format tertentu
// echo date("l, d-M-Y");


// Time
// UNIX timestamp / EPOCH time
// detik yg sudah berlalu sejak 1 Januaru 1970

// echo time();
// echo date("l, d M Y", time()+3600*24*100);


// mktime
// membuat sendiri detik yg sudah berlalu
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,11,7,2001));


// strtotime
// input berupa format tanggal, diubah ke detik
echo date("l", strtotime("7 november 2001"));



// NOTE
// untuk built-in function yg lain silahkan dipelajari sendiri
// daftar func. yg sering dipakai ada di video
?>


