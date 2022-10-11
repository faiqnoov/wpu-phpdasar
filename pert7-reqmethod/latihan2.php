<!-- kode agar user tidak dapat masuk ke halamam ini secara paksa melalui URL -->
<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || !isset($_GET["nrp"]) || !isset($_GET["email"]) || !isset($_GET["prodi"]) || !isset($_GET["gambar"]) ) {
  // redirect
  header("Location: latihan1.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  
  <ul>
    <!-- data ditangkap oleh var superglobal $_GET -->
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["prodi"]; ?></li>
  </ul>

  <a href="latihan1.php">Kembali</a>

</body>
</html>