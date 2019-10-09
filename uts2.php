<?php
session_start();
if (isset($_SESSION['login'])) { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
            <title>Document</title>
            
        </head>
        <body><div class="container">
  <div class="row" style="padding:20px;">
  <div class="col-md-12">
  <div class="card">
  <center><div class="card-header"><h2>Store</h2></div></center>
  <div class="card-body">
  <?php
    if (isset($_POST['simpan'])) {
        $jumlah = $_POST['jumlah'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $tp = $_POST['tp'];


        for ($a = 1; $a <= $jumlah; $a++) {

            ?>
        <form action="uts3.php" method="post">
        <div class="form-group">
        <label for=""><b>Nama Barang</b></label>
        <input type="text" name="nb[]" class="form-control" required></div><br>
        <div class="form-group">
        <label for=""><b>kode Barang</b></label>
        <input type="number" name="kb[]" class="form-control" required></div><br>
        <div class="form-group">
        <div class="form-group">
        <label><b>Jenis Barang</b></label>
        <select class="form-control" name="jenis[]">
         <option value="" >pilih</option>
         <option value="Sayuran">Sayuran</option>
         <option value="Elektronik">Elektronik</option>
         <option value="Fashion">Fashion</option>
         <option value="Otomotif">Otomotif</option>
         <option value="Mainan">Mainan</option>
         </select></div><br>
         <div class="form-group">
         <label><b>Harga</b></label>
         <input type="number" name="harga[]" class="form-control" required></div><hr style="color:blue">
        <br>
        <label><b>Jumlah Barang</b></label>
         <input type="number" name="jb[]" class="form-control" required></div><hr style="color:blue">
        <br>
    <?php 
} ?>
     <input type="hidden" name="nama" value="<?php echo "$nama"; ?>">
     <input type="hidden" name="alamat" value="<?php echo "$alamat"; ?>">
     <input type="hidden" name="jk" value="<?php echo "$jk"; ?>">
     <input type="hidden" name="tp" value="<?php echo "$tp"; ?>">
     <input type="hidden" name="jumlah" value="<?php echo "$jumlah"; ?>">

     <input type="submit" name="sbm" class="btn btn-primary" value="Simpan">
        <input type="reset" class="btn btn-warning" value="Reset">
        </form>

        <!--js-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.jss"></script>
<!--end js-->    
        </body>
        </html>
        
        <?php 
    }
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: loguts.php");
    // die("Silahkan Login Terlebih dahuli");
}
?>