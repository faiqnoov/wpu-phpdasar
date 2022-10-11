<?php 
session_start();
$_SESSION = []; // untuk memastikan bahwa session sudah dihilangkan (sunnah)
session_unset(); // untuk memastikan bahwa session sudah dihilangkan (sunnah)
session_destroy();

header("Location: login.php");
exit;
?>