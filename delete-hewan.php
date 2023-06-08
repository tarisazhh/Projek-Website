<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM hewan WHERE id_hewan = $hapus");
header("location:view_hewan.php");
?>