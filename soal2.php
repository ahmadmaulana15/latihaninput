<?php
$nama ="Ahmad Maulana Fajar R";
$kelas = "XI RPL 1";
$b = 80;
$m = 70;
$r = $b+$m;
$hasil =$r/2;
$k = "lulus";

echo "Nama  : $nama<br>";
echo "Kelas : $kelas<br>";

echo"----------------------------------<br>";
if($b>100){
    echo"maaf nilai yang anda masukan salah<br>";
}elseif($b<0){
    echo"Maaf nilai yang anda masukan salah<br>";
}else{
    echo"Nilai B.Indonesia : $b<br>";
}
if($m>100){
    echo "maaf nilai yang anda masukan salah<br>";
}
elseif($m<0){
    echo "Maaf nilai yang anda masukan salah<br>";
}else{
    echo"Nilai Matematika : $m<br>";
}
echo "Nilai Rata-rata :$hasil<br>";
if($hasil>100){
    echo"maaf nilai yang anda masukan salah<br>";
}elseif($hasil<0){
    echo"Nilai yang anda masukan salah<br>";
}else{
    echo"Keterangan : $k<br>";
}
if($hasil>85){
    echo"Grade : A";}
    elseif($hasil>=75){
        echo"Grade : B";
    }
        elseif($hasil>=60){
            echo"Grade : C";
        }
            elseif($hasil<60){
                echo"Grade : D";
}else{
    echo"Nilai yang anda masukan salah";
}





?>