<?php
if(isset($_POST['daf'])){
    echo "<fieldshet>";
    $nope =$_POST['no'];
    echo "No Pendaftaran : <b>$nope</b><br>";
    $nis =$_POST['ni'];
    echo "NISN           : <b>$nis</b><br>";
    $nama =$_POST['nma'];
    echo "nama           : <b>$nama</b><br>";
    $alamat =$_POST['almt'];
    echo "alamat         : <b>$alamat</b><br>";
    $tempat =$_POST['tl'];
    echo "Tempat Lahir   : <b>$tempat</b><br>";
    $tanggal =$_POST['tlahir'];
    echo "Tanggal Lahir  : <b>$tanggal</b><br>";
    $asal =$_POST['as'];
    echo "Asal Sekolah   : <b>$asal</b><br>";
    $jeniskelamin = $_POST['jk'];
    echo "Jenis Kelamin  :  <b>$jeniskelamin</b><br>";
    echo "Hobi Anda adalah :<br>";
 if (isset($_POST['hobi01'])) {
 echo "+ " . $_POST['hobi01'] . "<br>";
 }
 if (isset($_POST['hobi02'])) {
 echo "+ " . $_POST['hobi02'] . "<br>";
 }
 if (isset($_POST['hobi03'])) {
 echo "+ " . $_POST['hobi03'] . "<br>";
 }
 if (isset($_POST['hobi04'])) {
 echo "+ " . $_POST['hobi04'] . "<br>"; 
}
if (isset($_POST['hobi05'])) {
    echo "+ " . $_POST['hobi05'] . "<br>";
    }
    $gama = $_POST['agama'];
    echo "Agama               :<b>$gama</b><br>"; 
    $jr = $_POST['Jurusan'];
    echo "Jurusan Anda adalah : <b>$jr</b><br>";
    $ayh =$_POST['ayah'];
    echo "nama ayah           : <b>$ayh</b><br>";
    $pekerjaan =$_POST['pa'];
    echo "Pekerjaan ayah      : <b>$pekerjaan</b><br>";
    $ib =$_POST['ibu'];
    echo "nama Ibu            : <b>$ib</b><br>";
    $peb =$_POST['pb'];
    echo "Pekerjaan Ibu       : <b>$peb</b><br>";
    echo "</fieldshet>"; 
}

?>