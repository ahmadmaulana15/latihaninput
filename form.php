<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
</head>
<body>
<fieldset>
<legend align="center" >FORM</legend>
<form action="prosesform.php" method="post">
<table border=0; align="center";>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama" required></td>
</tr>
<tr>
<tr>
<td>Alamat</td></tr>
<td>Jalan/Kp</td>
<td>:</td>
<td><input type="text" name="kp" required></td>
</tr>
<tr>
<td>Kecamatan</td>
<td>:</td>
<td><input type="text" name="kecamatan" required></td>
</tr>
<tr>
<td>Kota</td>
<td>:</td>
<td><input type="text" name="kota" required></td>
</tr>
<tr>
<td>Provinsi</td>
<td>:</td>
<td><input type="text" name="provinsi" required></td>
</tr>
<tr>
<td>Kode Pos</td>
<td>:</td>
<td><input type="number" name="kode" required></td>
</tr>
<tr>
<td>Nama Barang</td>
<td>:</td>
<td><input type="text" name="nbarang" required></td>
</tr>
<tr>
<td>Harga 1 Barang</td>
<td>:</td>
<td><input type="number" name="hbarang" required></td>
</tr>
<tr>
<td>Jumlah Barang</td>
<td>:</td>
<td><input type="number" name="qty" required></td>
</tr>
<tr>
<td>Deskripsi</td>
<td>:</td>
<td><input type="text" name="deskripsi" required></td>
</tr>
<tr>
<td>Tanggal Pembelian</td>
<td>:</td>
<td><input type="date" name="tgl" required></td>
</tr>
<tr>
     <td>&nbsp</>
     <td>&nbsp</td>
     <td><input type ="submit" name = "save" value ="Save">
         <input type ="reset" name = "res" value ="Reset"></td>
 </tr></table>
  </form>
 </fieldset>
    
</body>
</html>