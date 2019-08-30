<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lingkaran</title>
</head>
<body>
<fieldset>
<legend>
Luas Lingkaran
</legend>
    <form action="" method="get">
    <label for="">Jari Jari</label>
    <input type="number" min="1" name="bulat" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>         

    <?php
    if(isset($_GET['simpan'])){
        $sisi=$_GET['bulat'];
        function luas_lingkaran($bulat){
          $luas= 3.14*$bulat*$bulat;
          return $luas;
        }
        $luas=luas_lingkaran($sisi);
        echo "Luas lingkaran : $luas";
    }


    ?>
    
</body>
</html>