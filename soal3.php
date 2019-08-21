<?php
for ($i = 1; $i <= 10;$i++){
    echo "<br>";
    echo "Perkalian $i <br><br>";
  for ($k =1; $k <= 10;$k++){
    $hasil = $i*$k;

    if($hasil %2 ){
        $g = "ganjil<br>";
    }else{
        $g = "genap<br>";
    }
  echo "$i * $k = $hasil => Bilangan ".$g." <br>";
  }
}
?>