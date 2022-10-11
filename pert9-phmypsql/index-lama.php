<?php 
// koneksi ke database
// parameter: hostname, username, passwd, dbname
// assign ke variabel biar gampang pas di fungsi querynya
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
// parameter: koneksi, query
// assign ke variabel biar tau berhasil gaknya query, karena fungsi query (jika berhasil) akan melakukan 2 hal, yaitu melakukan query dan mengembalikan nilai true
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// ada 4 cara:
// mysqli_fetch_row() -- mengembalikan array numerik
// mysqli_fetch_assoc() -- mengembalikan array associative
// mysqli_fetch_array() -- mengembalikan keduanya
// mysqli_fetch_object() -- mengembalikan object

// while( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1 ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="70" alt=""></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ?>

    </table>
</body>
</html>