<?php 
// cek apakah btn submit sudah ditekan
if(isset($_POST["submit"])) {
    // cek uname dan passwd
    if($_POST["username"] == "admin" && $_POST["password"] == "123") {        
        // jika benar, redirect ke hal admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

    <h1>Login Admin</h1>

    <?php if(isset($error)) : ?>
        <p style="color: red;">username / password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="uname">Username : </label>
                <input type="text" name="username" id="uname">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
    
</body>
</html>