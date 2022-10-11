<!-- Array Numeric -- indeksnya berupa angka -->

<?php
$mahasiswa = [
  ["Faiq Nov", "3120500006", "Teknik Informatika", "faiqnov@it.student.pens.ad.ic"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Mahasiswa</title>
</head>
<body>

  <h1>Dafrtar Mahasiswa</h1>

  <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
      <li><?= $mhs; ?></li>
    <?php endforeach; ?>
  </ul>
  
</body>
</html>