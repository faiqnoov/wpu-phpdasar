<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn; // agar var conn mengacu ke var conn di atas
    $result = mysqli_query($conn, $query); // lemarinya
    $rows = []; // wadah buat nampung baju
    while( $row = mysqli_fetch_assoc($result) ) { // ambil baju dari lemari
        $rows[] = $row; // masukkan ke wadah
    }
    return $rows; // kasihkan kotaknya (berupa array asosiatif)
}


function tambah($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp','$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    // ambil data BARU dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query update data
    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    // $query = "SELECT * FROM mahasiswa WHERE nama = '$keyword'"; // pencarinannya strict
    // $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%'"; // keyword sbg prfix & sufix
    $query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
                
    // gunakan fungsi query() yang sudah dibuat sebelumnya ()
    return query($query);
}





?>