<!-- Array Numeric -- indeksnya berupa angka, memungkinkan terjadinya data tertukar -->

<?php
// array di dalam array (aray multidimensi)
$mahasiswa = [
  ["Faiq Nov", "3120500006", "Teknik Informatika", "faiqnov@it.student.pens.ad.ic"],
  ["Yoshi", "3120500007", "Teknik Nuklir", "yoshi@it.student.pens.ad.ic"],
  ["Nike", "3120500009", "Teknik Mesin", "nike@it.student.pens.ad.ic"]
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
      <?php foreach($mhs as $kotak) : ?>
        <li><?= $kotak; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach; ?>

  <!-- cara lain -->
  <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama : <?= $mhs[0]; ?></li>
      <li>NRP : <?= $mhs[1]; ?></li>
      <li>Prodi : <?= $mhs[2]; ?></li>
      <li>Email : <?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach; ?>

  
</body>
</html>