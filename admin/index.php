<?php
include '../koneksi.php';
session_start();
if($_SESSION['status']!="login"){
    header("location:admin/index.php");
}
echo "Hai Selamat Datang" .$_SESSION['email'];
?>
<br/>
<br/>
<a href="logout.php">Logout</a>