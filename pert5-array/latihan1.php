<?php
// ARRAY
// variabel yang dapat menampung banyak nilai
// tipe data elemen boleh beda (di php)
// psaangan antara key dan value
// key-nya adl index, yg dimulai dari 0

// Membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Janiuari", "Februari", "Maret"];
$arr = [123, "text", false];

// Menampilkan array
// car_dump() / printr_r()
/* 
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>"; */

// Menampilkan 1 element pada array
/* 
echo $arr[0]; */

// Menambahkan elemen baru
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);










?>