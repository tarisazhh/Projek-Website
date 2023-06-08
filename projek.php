<?php
$host = mysqli_connect ("localhost","root","");

if($host){
    echo "berhasil.<br>";
}else{
    echo "gagal.<br>";
}
$db = mysqli_select_db($host,"toko");
if($db){
    echo "database berhasil.<br>";
}else{
    echo "database gagal.<br>";
}
?>