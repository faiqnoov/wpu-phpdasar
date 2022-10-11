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

    // upload gambar
    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp','$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // lakukan beberapa pengecekan

    // cek apakah tidak ada gambar yg diupload
    if($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yg diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    // ambil ekstensi dari gbr yg diupload
    // explode(delimiter, string) -- fungsi utk memecah string mjd array
    $ekstensiGambar = explode('.', $namaFile);
    // ambil ekstensinya, yaitu pada indeks terakhir (end), lalu lowercase
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // cek, valid nggak ekstensinya?
    // fx in_array mengembalikan boolean
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {  
        echo "<script>
                alert('yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama baru gambar saat disimpan di db, jaga2 jika ada kesamaan nama file yg diupload
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    
    // move_uploaded_file(namaTmp, direktoriTujuan+namaFile)
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $gambarLama = ($data["gambarLama"]);
    // ambil data BARU dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    // cek apakah user pilih gbr baru/tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

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

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));  // membersihkan karakter slash dan meng-lowercase-kan
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username apakah sudah dipakai
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!');
			</script>";
		return false;
	}

    // cek konfirmasi passwd
    if($password !== $password2) {
        echo "<script>
                alert('konfirmasi password salah!');
            </script>";
		return false;
    } 

	// enkripsi passwd
	// password_hash(password-yg-akan-dienkripsi, algoritma-enkripsi)
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}




?>