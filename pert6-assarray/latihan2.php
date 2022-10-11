<!-- Associative Array -- indeks/key-nya berupa string yang kita buat sendiri -->

<?php

$mahasiswa = [
  [
    "nama" => "Faradilla Yoshi",
    "nrp" => "3120500007",
    "email" => "yoshi@gmail.com",
    "prodi" => "Teknik Nuklir",
    "gambar" => "yoshi.png"
  ],
  [
    "nama" => "Crystal Widjaja",
    "nrp" => "3120500007",
    "email" => "crystal@gmail.com",
    "prodi" => "Teknik Informatika",
    "gambar" => "crystal.png"
  ],
  [
    // urutan tidak masalah
    "nrp" => "3120500017",
    "nama" => "Bae Suzy",
    "email" => "suzy@gmail.com",
    "prodi" => "Desain Interior",
    "gambar" => "suzy.png"
  ]
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Mahasiswa</title>
</head>
<body>

  <h1>Dafrtar Mahasiswa</h1>

  <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>Prodi : <?= $mhs["prodi"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
    </ul> 
  <?php endforeach; ?>

  
</body>
</html>