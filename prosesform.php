<?php
if(isset($_POST['save'])){
    $nama=$_POST['nama'];
    echo "Nama : <b>$nama</b><br>";
    $jalan=$_POST['kp'];
    echo "Jalan/Kp : <b>$jalan</b><br>";
    $kecamatan=$_POST['kecamatan'];
    echo "Kecamatan : <b>$kecamatan</b><br>";
    $kota=$_POST['kota'];
    echo "Kota : <b>$kota</b><br>";
    $provinsi=$_POST['provinsi'];
    echo "Provinsi : <b>$provinsi</b><br>";
    $kode=$_POST['kode'];
    echo "Kode Pos : <b>$kode</b><br>";
    $nbarang=$_POST['nbarang'];
    echo "Nama Barang : <b>$nbarang</b><br>";
    $hbarang=$_POST['hbarang'];
    echo "Harga 1 Barang : <b>$hbarang</b><br>";
    $qty=$_POST['qty'];
    echo "Jumlah Barang : <b>$qty</b><br>";
    $j=$hbarang*$qty;
    echo "Total Harga Barang : <b>$j</b><br>";
    if($qty<=0){
        echo "maaf Pesanan Tidak Bisa Di Proses<br>";
    }
    elseif($qty >10 ){
        echo "Selamat Anda Mendapatkan Diskon Sebesar 20%<br>";
        $kali=$hbarang*$qty;
        $dis =$kali*0.2;
        echo "Total Harga Setelah Mendapatkan Diskon : <b>$dis</b><br>";
    }
    elseif($qty > 5){
        echo "Selamat Anda Mendapatkan diskon Sebesar 10%<br>";
        $kali=$hbarang*$qty;
        $dis=$kali*0.1;
        echo "Total Harga Setelah Mendapatkan Diskon : <b>$dis</b><br>";
    }
    
    $deskripsi=$_POST['deskripsi'];
    echo "Deskripsi : <b>$deskripsi</b><br>";
    $tgl=$_POST['tgl'];
    echo "Tanggal Pembelian : <b>$tgl</b><br>";
}
?>
