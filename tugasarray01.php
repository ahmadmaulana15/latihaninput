<?php
session_start();
if(isset($_SESSION['login'])){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <p>Form array</p>
    </center>
    <fieldshet>
    <legend>form array</legend>
    <form action="" method="post">
    <label for="">Masukan jumlah :</label>
    <input type="number" min="1" name="jml" required>
    <br>
    <input type="submit" name="submit" value="simpan">
    <hr> 
    </form>


    <form action="form_arraypro.php" method="post">
    <?php
    if(isset($_POST['submit'])){
        $jml_form=$_POST['jml'];
        for($a=0;$a < $jml_form;$a++){ ?>
        <label for=>Masukan bilangan :</label>
        <input type="text" name="bil[]" required>
        <label for=>Masukan Pangkat :</label>
        <input type="text" name="pangkat[]" required>
        <br>
        <br>
        <?php } ?>
        <input type="submit" name="sbm" value="Hitung">
        <input type="reset" value="reset"
        </form>                         
    <?php } ?>
    
    </fieldshet>
</body>
</html>
<?php 
}else {
    die("username atau password anda salah 
    silahkan kembali login <a href=logarray.php> Login </a>");
}
?>