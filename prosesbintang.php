<?php
if(isset($_POST['simpan'])){
    $a =$_POST['no'];
    
    for($i=0;$i < $a;$i++){
        for ($k =$a;$k > $i;$k--){
           echo"&nbsp";
           }
           for($j=$a;$j<$i;$j++){
               echo"*";
           }
           for($l=0;$l<=$i;$l++){
                 echo"*";
           }
           echo "<br>";
        }
    echo"jumlah bintang =$a<br>";
}


?>