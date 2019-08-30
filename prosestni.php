<?php
    if(isset($_POST['simpan'])){
        $nama=$_POST['nama'];
        $tinggi=$_POST['tb'];
        $berat =$_POST['bb'];
        
        function TNI($tb,$bb){
            if($tb>165 && $bb < 60 && $bb>50){
                return "selamat Anda diterima";
            }else{
                return "kembali dan pantang menyerah";
            }
        }


        echo "Nama : $nama<br>";
        echo "Tinggi Badan : $tinggi<br>";
        echo "Berat Badan : $berat<br>";
        echo "Keterangan : ".TNI($a,$b);
 
    }


    ?>
