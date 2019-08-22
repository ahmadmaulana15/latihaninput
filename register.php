<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form register</title>
</head>
<body><fieldset>
<legend align="center" >REGISTRASI</legend>
    <form action="prosesregis.php" method="post">
    Nama : <input type ="text" name ="nma"required><br>
    Alamat : <input type ="text" name="almt"><br>
    jenis Kelamin : <br>
    <input type="radio" name="jk" value="Laki-laki">
Laki-laki<br>
 <input type="radio" name="jk" value="Perempuan"> Perempuan<br>
 Agama : 
 <select name="agama">
 <option value="Islam">Islam</option>
 <option value="Kristen">Kristen</option>
 <option value="Hindu">Hindu</option>
 <option value="Budha">Budha</option>
 </select> <br><br>
 Email :      <input type="text" name="email"><br>
 Password : <input type="password" name="pasword"><br>
 <input type ="submit" name = "regis" value ="register">
    </form></fieldset>
</body>
</html>