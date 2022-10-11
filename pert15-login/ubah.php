<?php 
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data mhs berdasarkan id (pake fungsi di functions.php)
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0]; // langsung yg diambil adalah data ke-0
// var_dump($mhs); // masih berupa wadahnya
// var_dump($mhs[0]["nama"]); // isinya (ini yg dipake buat value)


// cek apakah tombol submit sudah ditekan
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil duibah (pake alertnya JS)
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data GAGAL diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">

        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"] ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label><br>
                <img src="img/<?= $mhs['gambar']; ?>" width="50"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    
    </form>
</body>
</html>