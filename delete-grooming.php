<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM grooming WHERE id_grooming = $hapus");
header("location:view_grooming.php");
?>