
  <?php
    session_start();
    if (isset($_SESSION['login'])) {
        if (isset($_POST['bayar'])) {
            $nominal = $_POST['nominal'];
            $to = $_POST['to'];

            $total = $nominal - $to;
            ?>
        <html>
    <head>
          <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>output here...</title>
    </head>

    <body>
        
                   <center>
  <div class="card" style="width : 18rem;">
<div class ="card-body">
<h2>Pembayaran berhasil</h2>
kembalian Uang :<?= $total ?> <br>

<b>apakah anda akan mengulangi pembelian Ya / Tidak<br></b>
<form action="" method="POST">
<button class="btn btn-danger" name="kembali">Ya</button>
<button class="btn btn-success" name="no" >Tidak</button>
</div></form>
<?php

}
if (isset($_POST['no'])) {
    echo "<br><b>Terimaksih sudah berbelanja</b>";

}
?>

  </div>
</center>

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
}
?>