  <?php
    session_start();
    if (isset($_SESSION['login'])) {

        if (isset($_POST['sbm'])) {
            $nb = $_POST['nb'];
            $kb = $_POST['kb'];
            $jb = $_POST['jb'];
            $jenis = $_POST['jenis'];
            $harga = $_POST['harga'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jk'];
            $tp = $_POST['tp'];
            $jumlah = $_POST['jumlah'];
            $th = $_POST['th'];


            ?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
            <title>UTS</title>
            </head>
      <body>
           <div class="row" style="padding:20px;">
  <div class="col-md-12">
  <div class="card">
<form action="pembayaran.php" method="post"> 
<center>
<h2>Hasil Store</h2>
</center>
<div class="card-body">

<div class="table-responsive">
<table class="table">
  <tr>
    <th>Nama</th>
    <th>alamat</th>
    <th>Jenis Kelamin</th>
    <th>Jumlah Barang </th>
    <th>Tanggal Pembelian</th>
</tr>
  <tr>
      
      <td><?php echo $nama; ?></td>
      <td><?php echo $alamat; ?></td>
      <td><?php echo $jk; ?></td>
      <td><?php echo $jumlah; ?></td>
      <td><?php echo $tp; ?></td>
      
</tr>
</table>
<center>
<h5><b>Daftar Produk yang di beli</b></h5>
</center>
<div class="table-responsive">
<table class="table">
  <tr>
    <th>Nomor</th>
    <th>Nama Barang</th>
    <th>kode Barang</th>
    <th>Jenis Barang</th>
    <th>Harga Satuan (Rp)</th>
    <th>Jumlah Barang</th>
    <th>Total Harga</th>
</tr>
<?php foreach ($nb as $jay => $value) :
    $to[$jay] = $harga[$jay] * $jb[$jay]; ?>
  <tr>
      <td> <?= $jay + 1 ?></td>
      <td><?php echo $nb[$jay]; ?></td>
      <td><?php echo $kb[$jay]; ?></td>
      <td><?php echo $jenis[$jay]; ?></td>
      <td><?php echo "Rp.$harga[$jay]"; ?></td>
      <td><?php echo $jb[$jay]; ?></td>
      <td><?php echo "Rp.$to[$jay]"; ?></td>
      </tr>
      <?php


        $a = array_sum($to);
        if ($a >= 500000) {
            $b = $a * 0.2;
            $e = "(20%)";
            $c = $a - $b;
        } elseif ($a > 250000) {

            $b = $a * 0.1;
            $e = "(10%)";
            $c = $a - $b;
        } elseif ($to > 150000) {

            $b = $a * 0.05;
            $e = "(5%)";
            $c = $a - $b;
        } else {
            $b = 0;
            $e = "(0%)";
            $c = $a - $b;


        }

        ?>
    <?php endforeach; ?>
</table>
<center>
<h5><b>Total Pembayaran</b></h5>
</center>

<div class="table-responsive">
<table class="table"> 
    <tr>
        <th>Sub Total</th>
        <td align="center"><?php echo "Rp.$a "; ?></td>
    </tr>
    <tr>
        <th>Disc <?= $e; ?></th>
        <td align="center"><?php echo "Rp.$b"; ?></td>
    </tr>
    <tr>
        <th>Total Pembayaran</th>
        <td align="center"><?php echo "Rp.$c"; ?></td>
    </tr>
    </table>
</div>

<center>
<h4><b>Pembayaran</b></h4><br>
</center>
<div class="table-responsive">
<table class="table">
    <tr>
        <center><h6><b>Masukan Nominal</b></h6></center>
    </tr>
    <tr>
        <center><input type="number" min="<?php echo $c ?>" name="nominal" required></center>
    </tr><br>
    <tr>
        <center><input type="submit" name="bayar" class="btn btn-primary" value="Bayar" required></center>
    </tr>
    </table>
     <input type="hidden" name="to" value="<?php echo "$to"; ?>">


<?php 
if (isset($_POST['bayar'])) {
    $nominal = $_POST['nominal'];

    $total = $to - $nominal;
    echo "$total"; ?>
</div>


</div>

</div>
    </div>
</form><!--js-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.jss"></script>
<!--end js-->
      </body>
      </html>
    <?php 
}
}
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: loguts.php");
    // die("Silahkan Login Terlebih dahuli");
}
?>