<?php
  // GET
  // metode request get adalah metode pengiriman data melalui url, dan data tsb bisa diambil atau ditangkap olev variabel superglobal $_GET

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
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>GET</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
      <li>
        <!-- data dikirim dengan metode request get -->
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&prodi=<?= $mhs["prodi"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>