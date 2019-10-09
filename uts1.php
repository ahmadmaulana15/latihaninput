<?php
session_start();
if (isset($_SESSION['login'])) {
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
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Achmad</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="uts1.php">Prodak</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-success my-2 my-sm-0" href="logout.php">Log Out </a>
    </form>
  </div>
</nav>
    <!--content-->


<div class="container">
  <div class="row" style="padding:20px;">
  <div class="col-md-12">
  <div class="card">
  <center><div class="card-header"><h2>Store</h2></div></center>
  <div class="card-body">
         <!--isi disini-->
         <form action="uts2.php" method="post">
         <div class="form-group">
         <label>Nama :</label>
         <input type="text" name="nama" class="form-control" required></input><br>
         </div>
         <div class="form-group">
         <label>Alamat :</label>
         <textarea name="alamat" class="form-control" rows="5"></textarea>         
         </div>
         <div class="form-group">
         <label for="">Jenis Kelamin :</label><br>
         <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
           <input type="radio" name="jk" value="Perempuan"> Perempuan<br>
         </div>
         <div class="form-group">
         <label>Tanggal Pembelian :</label>
         <input type="date" name="tp" class="form-control" required></input><br>
         </div>
         <div class="form-group">
         <label>jumlah :</label>
         <input type="number" name="jumlah" class="form-control" required></input><br>
         </div>
         <div class="form-group">
         <button type="submit" name="simpan" class="btn btn-primary">Simpan
         </button>
         <button type="reset" class="btn btn-warning">Reset</button>
         </div>
        
    
 </form>
 
 <!--js-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.jss"></script>
<!--end js-->

    
</body>
</html>
<?php 
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: loguts.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>
