<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form pengolahan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="" method ="post" name ="input"reqired>
Nama Anda  : <input type="text" name="nama"><br>
<input type ="submit" name = "input" value ="input">
</form>
</body>
</html>

<?php
if(isset($_POST['input'])){
    $nama =$_POST['nama'];
    echo "Nama anda : <b>$nama</b>";
}

?>