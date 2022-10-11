<?php
// "Datang" dan "Admin" merupakan parameter default
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Bro"); ?></h1>
    <h1><?= salam("Siang"); ?></h1>
</body>
</html>