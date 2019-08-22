<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran</title>
</head>
<body>
<form action="prosesformulir.php" method="post">
No Pendaftaran : <input type="number" name="no"required><br>
NISN           : <input type="number" name="ni"><br>
Nama           : <input type ="text" name ="nma" ><br>
Alamat         : <input type ="text" name="almt"><br>
Tempat Lahir   : <input type ="text"  name="tl"><br>
Tanggal Lahir  : <input type="date" name="tlahir"><br>
Asal Sekolah   : <input type ="text" name="as"><br>
jenis Kelamin  : <br>
    <input type="radio" name="jk" value="Laki-laki">
Laki-laki<br>
 <input type="radio" name="jk" value="Perempuan"> Perempuan<br>
 Hobi          :<br>
 <input type="checkbox" name="band01" value="Berenang"
checked> berenang<br>
 <input type="checkbox" name="band02" value="Sepak bola"> Sepak bola<br>
 <input type="checkbox" name="band03" value="Badminton">Badminton<br>
 <input type="checkbox" name="band04" value="Voli">Voli<br>
 <input type="checkbox" name="band05" value="Basket">Basket<br><br>
 Agama : 
 <select name="agama">
 <option value="Islam">Islam</option>
 <option value="Kristen">Kristen</option>
 <option value="Hindu">Hindu</option>
 <option value="Budha">Budha</option>
 </select> <br>
 Jurusan       : 
 <select name="Jurusan">
 <option value="RPL">Islam</option>
 <option value="TKRO">Kristen</option>
 <option value="TSM">Hindu</option>
 </select> <br>
 Nama Ayah          : <input type ="text" name ="ayah" ><br>
 Pekerjaan Ayah           : <input type ="text" name ="pa" ><br>
 Nama Ibu          : <input type ="text" name ="ibu" ><br>
 pekerjaan Ibu           : <input type ="text" name ="pb" ><br>
 <input type ="submit" name = "daf" value ="daftar">
 <input type ="reset" name = "res" value ="Reset">

 </form>
</body>
</html>