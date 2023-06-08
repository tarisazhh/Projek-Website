<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM petfeed WHERE id_petfeed = '$hapus'");
header("location:view_petfeed.php");
?>