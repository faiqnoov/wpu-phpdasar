<?php
// pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r (biasanya untuk mencetak array atau debugging)
// var_dump (biasanya untuk debugging)
/* 
echo "Fa'iq ";
echo 'Faiq ';
print "Novriadi ";
print_r("Ahayy ");
var_dump("Faiq");
 */
// nb : " sedikit lebih sakti daripada ' --> interpolasi (apakah di dlm kutip 2 ada variabel atau tidak)


// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP


// Variabel dan Tipe Data
// Variabel --> tidak boleh diawali angka
$nama = "Faiq Noov";
/* 
echo "Halo, nama saya $nama";
echo 'Halo, nama saya $nama';
*/

// OPERATOR
// op. aritmatika
// + - * / %
/* echo 5 % 2; */

// op. penggabung string (concatenation) --> .
/* 
$nama_depan = "Ari";
$nama_belakang = "Lasso";
echo $nama_depan . " " . $nama_belakang; */

// op. Assignment
// =, +=, -=, *=, /=, %=, .=
/* 
$nama2 = "Bruno";
$nama2 .= " ";
$nama2 .= "Mars";
echo $nama2; */

// op. Perbandingan
// <, >, <=, >=, ==, !=
/* 
var_dump(1 > 5);
var_dump(1 == "1"); */

// op. Identitas
/* 
var_dump(1 === "1") */

// op. Logika
// &&, ||, !
/* 
$x = 10;
var_dump($x <20 && $x % 2 == 0); */


?>










<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <!-- PHP dalam HTML -->
  <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
  <p><?php echo 'ini adalah paragraf'; ?></p>

  <!-- HTML dalam PHP -->
  <?php
    echo "<h1>Halo, Selamat Datang $nama</h1>"
  ?>
</body>
</html>


