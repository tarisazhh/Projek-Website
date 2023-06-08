<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM transaksi WHERE id_transaksi = $hapus");
header("location:view_transaksi.php");
?>