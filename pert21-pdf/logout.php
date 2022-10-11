<?php 
// hapus session
session_start();
$_SESSION = []; // untuk memastikan bahwa session sudah dihilangkan (sunnah)
session_unset(); // untuk memastikan bahwa session sudah dihilangkan (sunnah)
session_destroy();

// hapus cookie
// yaitu dgn menuliskan nama yg sama tetapi nilainya kosong dan waktunya dimundurkan
setcookie('id', '', time()-3600);
setcookie('key', '', time()-3600);

header("Location: login.php");
exit;
?>