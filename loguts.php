<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "jay" && $b == "150503") {
        //menciptakan session
        $_SESSION['login'] = $a;
        //menuju ke halaman pemeriksaan session
        header("location: index.php");
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=index.php.php> Login </a>");
    }
} else {
    ?>
    <html>
    <head>
          <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>Login here...</title>
    </head>

    <body>
        
        <form action="" method="post">
            <center>
  <div class="card" style="width : 18rem;">
<div class ="card-body">
<h2>Login here</h2>
username: <input type="text" name="user"><br>
password: <input type="password" name="pass"><br>
<input type="submit" name="Login" value="login">
</div>

  </div>
</center>
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
?>