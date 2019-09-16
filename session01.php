<?php
/*****************************************************
 * Nama File :session01.php
 * halaman ini merupakan  halaman contoh penciptaan session.
 * perintah Session_start() harus ditaruh diperintah pertama 
 * tanpa spasi di depan nya. perintah session_start() harus ada 
 * pada setiap halaman yang berhubungan dengan session
 ******************************************************/
Session_start();
if(isset($_POST['Login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //periksa Login
    if($user == "ahmad" && $pass == "150503"){
        // menciptakan session
        $_SESSION['login'] = $user;
        // menuju ke halaman pemeriksaan session;
        echo "<h1>Anda Berhasil LOGIN</h1>";
        echo "<h2>klik <a href='session02.php'> disini (session02.php)</a> Untuk menuju kehalaman 
        pemeriksaan session</h2>";
    }else{
        die ("Anda belum login! anda tidak berhak masuk kehalaman ini. Silahkan Login
        <a href='session01.php'>disini</a>");
    }
}
else{
?>
<html>
<head>
<title>Login Here..</title>
</head>
<body>
<form action="" method="post">
<h2>Login here...</h2>
username : <input type="text" name="user"><br>
password : <input type="password" name="pass"><br>
<input type="submit" name="Login" value="Log In">
</form>
</body>
</html>
<?php
} 
?>