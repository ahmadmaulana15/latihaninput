<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran</title>
</head>
<body>
<fieldset>
<legend align="center" >FORMULIR</legend>
<form action="prosesformulir.php" method="post">
<table border=0; align="center">
<tr>
     <td>No Pendaftaran</td>
     <td>:</td>
     <td><input type="number" name="no"required><br></td>
  </tr>
<tr>
     <td>NISN</td>
     <td>:</td>
     <td><input type="number" name="ni"><br></td>
  </tr>
<tr>
     <td>Nama</td>
     <td>:</td>
     <td><input type ="text" name ="nma" ><br></td>
  </tr>
<tr>
     <td>Alamat</>
     <td>:</td>
     <td><input type ="text" name="almt"><br></td>
  </tr>
<tr>
     <td>Tempat Lahir</td>
     <td>:</td>
     <td><input type ="text"  name="tl"><br></td>
  </tr>
<tr>
     <td>Tanggal Lahir</td>
     <td>:</td>
     <td><input type="date" name="tlahir"><br></td>
  </tr>
<tr>
     <td>Asal Sekolah</td>
     <td>:</td>
     <td><input type ="text" name="as"><br></td>
  </tr>
<tr> 
     <td>Jenis Kelamin</td>
     <td>:</td>
     <td><input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
     <input type="radio" name="jk" value="Perempuan"> Perempuan<br></td>
  </tr>
<tr>
     <td>Hobi</>
     <td>:</td>
     <td><input type="checkbox" name="hobi01" value="Berenang"checked> berenang<br>
         <input type="checkbox" name="hobi02" value="Sepak bola"> Sepak bola<br>
         <input type="checkbox" name="hobi03" value="Badminton">Badminton<br>
         <input type="checkbox" name="hobi04" value="Voli">Voli<br>
         <input type="checkbox" name="hobi05" value="Basket">Basket<br><br></td>
  </tr>
<tr>
     <td>Agama</td>
     <td>:</td>
     <td><select name="agama">
         <option value="">pilih</option>
         <option value="Islam">Islam</option>
         <option value="Kristen">Kristen</option>
         <option value="Hindu">Hindu</option>
         <option value="Budha">Budha</option>
         </select> <br></td>
  </tr>
<tr>
     <td>Jurusan</td>
     <td>:</td>
     <td><select name="Jurusan">
         <option value="">Pilih</option>
         <option value="RPL">RPL</option>
         <option value="TKRO">TKRO</option>
         <option value="TSM">TSM</option>
         </select> <br></td>
  </tr>
<tr> 
     <td>Nama Ayah</td>
     <td>:</td>
     <td><input type ="text" name ="ayah" ><br></td>
  </tr>
<tr>
     <td>Pekerjaan Ayah</td>
     <td>:</td>
     <td><input type ="text" name ="pa" ><br></td>
  </tr>
<tr> 
     <td>Nama Ibu</td>
     <td>:</td>
     <td><input type ="text" name ="ibu" ><br></td>
  </tr>
<tr>
     <td>Pekerjaan Ibu</td>
     <td>:</td>
     <td><input type ="text" name ="pb" ><br></td>
  </tr>
<tr>
     <td>&nbsp</>
     <td>&nbsp</td>
     <td><input type ="submit" name = "daf" value ="daftar">
         <input type ="reset" name = "res" value ="Reset"></td>
 </tr>
<!-- No Pendaftaran : <input type="number" name="no"required><br>
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
 <input type="checkbox" name="hobi01" value="Berenang"
checked> berenang<br>
 <input type="checkbox" name="hobi02" value="Sepak bola"> Sepak bola<br>
 <input type="checkbox" name="hobi03" value="Badminton">Badminton<br>
 <input type="checkbox" name="hobi04" value="Voli">Voli<br>
 <input type="checkbox" name="hobi05" value="Basket">Basket<br><br>
 Agama : 
 <select name="agama">
 <option value="">pilih</option>
 <option value="Islam">Islam</option>
 <option value="Kristen">Kristen</option>
 <option value="Hindu">Hindu</option>
 <option value="Budha">Budha</option>
 </select> <br>
 Jurusan       : 
 <select name="Jurusan">
 <option value="">Pilih</option>
 <option value="RPL">RPL</option>
 <option value="TKRO">TKRO</option>
 <option value="TSM">TSM</option>
 </select> <br>
 Nama Ayah          : <input type ="text" name ="ayah" ><br>
 Pekerjaan Ayah           : <input type ="text" name ="pa" ><br>
 Nama Ibu          : <input type ="text" name ="ibu" ><br>
 pekerjaan Ibu           : <input type ="text" name ="pb" ><br>
 <input type ="submit" name = "daf" value ="daftar">
 <input type ="reset" name = "res" value ="Reset">
 -->
 </form>
 </table>
 </fieldset>
</body>
</html>