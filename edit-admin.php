<?php
include 'koneksi.php';
$id = $_GET['update'];
$sql = "SELECT * FROM admin WHERE id_admin= $id";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_admin'];
$alamat = $row['alamat'];
$username = $row['username'];
$password = $row['password'];


if (isset($_POST['submit'])) {
    $nama = $_POST['nama_admin'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $update = "UPDATE `admin` SET id_admin=$id,nama_admin='$nama',alamat='$alamat',username='$username',password='$password' WHERE id_admin=$id ";
    $result = mysqli_query($host, $update);
    if ($result) {
        header("location:view_admin.php");
    } else {
        die(mysqli_error($host));
    }
} ?>
<html>
    <head><h1>Register Admin</h1></head>
    <center>
        <body>
        <form action="" method="post">
            <table class="boxc" width="25%" border="0">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_admin"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Kirim"></td>
                </tr>
            </table>
        </form>
    </body>
</html>