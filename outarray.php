<?php
session_start();
if(isset($_SESSION['login'])){
unset ($_SESSION);
session_destroy();
    header("location:logarray.php");
}else {
    die("username atau password anda salah 
    silahkan kembali login <a href=logarray.php> Login </a>");
}
?>