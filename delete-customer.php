<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM customer WHERE id_customer = $hapus");
header("location:view_customer.php");
?>