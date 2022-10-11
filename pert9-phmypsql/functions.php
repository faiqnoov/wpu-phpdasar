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
    return $rows; // kasihkan kotaknya
}

?>