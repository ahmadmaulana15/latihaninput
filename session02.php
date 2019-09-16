<?php
/************************************************
 * Halaman ini merupakan contoh halaman pemeriksaan session. 
 * Pemeriksaan session biasanya dilakukan jika suatu halaman memiliki
 * akses terbatas. Misalnya harus login terlebih dahulu.
 *********************************************************/
Session_start();

//pemeriksaan session
if(isset($_SESSION['login'])){ // jika sudah login
  //menampilkan isi session 
  echo "<h1>Selamat Datang ".$_SESSION['login']."</h1>";
  echo "<h2>halaman ini hanya bisa di akses jika anda sudah login </h2>";
  echo "<h2>klik <a href='session03.php'>disini (session03.php) </a>untuk logout</h2>";
}else{
    //session belum ada artinya belum login
    die ("Anda belum login! anda tidak berhak masuk kehalaman ini. Silahkan Login
    <a href='session01.php'>disini</a>");
}
?>