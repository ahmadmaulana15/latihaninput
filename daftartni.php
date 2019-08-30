<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Tni</title>
</head>
<body>
<fieldset>
<legend>
Pendaftaran TNI
</legend>
    <form action="prosestni.php" method="post">
    <label for="">Nama :</label>
    <input type="text" name="nama" required>
    <br>
    <label for="">Tinggi badan :</label>
    <input type="number" name="tb" required>
    <br>
    <label for="">Berat Badan :</label>
    <input type="number" name="bb" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>         

</body>
</html>