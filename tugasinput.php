<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method ="post" name ="input">
Nama  : <input type="text" name="nama"required><br>
Nilai 1  : <input type="text" name="n1"required><br>
Nilai 2  : <input type="text" name="n2"required><br>
<input type ="submit" name = "input" value ="simpan">
<input type ="submit" name = "reset" value ="Reset">
</form>
</body>
</html>
<?php
if(isset($_POST['input'])){
    $nama =$_POST['nama'];
    $n1 =$_POST['n1'];
    $n2 =$_POST['n2'];
    echo "Nama anda : <b>$nama</b><br>";
    echo "Nilai 1 : <b>$n1</b><br>";
    echo "Nilai 2 : <b>$n2</b><br>";
}