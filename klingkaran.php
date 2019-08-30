<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>keliling lingkaran</title>
</head>
<body>
<fieldset>
<legend>
keliling lingkaran
</legend>
    <form action="" method="get">
    <label for="">Jari Jari</label>
    <input type="number" min="1" name="jari" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>         

    <?php
    if(isset($_GET['simpan'])){
        $hasil=$_GET['jari'];
        function keliling_lingkaran($jari){
          $luas= 2*3.14*$jari;
          return $luas;
        }
        $luas=keliling_lingkaran($hasil);
        echo "keliling lingkaran : $luas";
    }


    ?>

    
</body>
</html>