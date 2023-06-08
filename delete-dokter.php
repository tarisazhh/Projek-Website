<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM dokter WHERE id_dokter = $hapus");
header("location:view_dokter.php");
?>