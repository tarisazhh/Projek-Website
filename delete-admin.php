<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM admin WHERE id_admin = $hapus")or die(mysql_error());
header("location:view_admin.php");
?>