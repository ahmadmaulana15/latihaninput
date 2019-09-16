<?php
/********************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus
session yang ada.
*********************************************************/
session_start();
if(isset($_SESSION['login'])){
unset ($_SESSION);
session_destroy();
//
echo "<h1>Anda sudah berhasil logout</h1>";
echo "<h2>Klik <a href='session01.php'>Disini</a> untuk Login kembali</h2>";
echo "<h2>Anda Sekarang tidak bisa masuk kehalaman 
 <a href='session02.php'>session02.php</a>lagi</h2>";
}
?>