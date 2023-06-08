<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM klinik WHERE id_klinik = $hapus");
header("location:view_klinik.php");
?>