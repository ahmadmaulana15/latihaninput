<?php
if(isset($_POST['sbm'])){
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];

    foreach($nama as $data=>$value){
        echo "Nama Saya : ".$nama[$data].
        " -kelas : ".$kelas[$data]."<hr>";
    }
}