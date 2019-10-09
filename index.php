<?php
session_start();
if (isset($_SESSION['login'])) { ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Hello, world!</title>
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
      <a class="btn btn-outline-success my-2 my-sm-0" href="loguts.php">Login </a>
    </form>
  </div>
</nav>
<h1><center>BIODATA</center></h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Achmad</td>
      <td>XI RPL 1</td>
      <td>Rekayasa Perangkat Lunak</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Rafli</td>
      <td>XI RPL 2</td>
      <td>Rekayasa Perangkat Lunak</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>XI TKR 1</td>
      <td>Teknik Kendaraan Ringan</td>
    </tr>
  </tbody>
</table>
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Cara masuk surga</h5>
    <p class="card-text">disini ada tips tips cara masuk surga tanpa nyogok</p>
    <a href="#" class="btn btn-primary">Masuk</a>
  </div>
</div>

    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.jss"></script>
</body>
     </html>
<?php 
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: loguts.php");
    // die("Silahkan Login Terlebih dahuli");
}
?>