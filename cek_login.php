<?php
session_start();
include "koneksi.php";
@$username = $_POST['username'];
@$password = $_POST['password'];

$insert = "SELECT * FROM customer where username = '$username' AND password = '$password'";
$hasil = mysqli_query($host, $insert);
$data = mysqli_fetch_array($hasil);

if ($data){
    $_SESSION['id_customer'] = $data['id_customer'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['status_admin'] = $data['status_admin'];


    header("location:home.php");
} else {
    echo "<script>
            alert('Login Failed, check username and password');
            document.location = 'login.php';
        </script>";
}

?>