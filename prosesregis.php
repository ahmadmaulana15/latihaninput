<?php
if(isset($_POST['regis'])){
    $nama =$_POST['nma'];
    echo "nama         : <b>$nama</b><br>";
    $alamat =$_POST['almt'];
    echo "alamat       : <b>$alamat</b><br>";
    $jeniskelamin = $_POST['jk'];
 echo "Jenis Kelamin   :  <b>$jeniskelamin</b><br>";
 $agm = $_POST['agama'];
 echo "Agama           :  <b>$agm</b><br>";
 $em = $_POST['email'];
 $pass = $_POST['pasword'];
 echo "Email           :  <b>$em</b><br>";
 if ($em == "ahmad@gmail.com" && $pass == "150503") {
 echo "<h2>Register Berhasil Dan Akun Anda AKtif</h2><br>";
 } else {
 echo "<h2>Register Gagal Dan Akun Anda Tidak Terdaftar</h2><br>";
 } 
}
?>