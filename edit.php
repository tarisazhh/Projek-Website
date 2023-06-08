<?php
include 'koneksi.php';
session_start();
$id = $_GET['update'];
$sql = "SELECT * FROM customer WHERE id_customer= '$id'";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_customer'];
$alamat = $row['alamat'];
$notelp = $row['notelp'];
$username = $row['username'];
$password = $row['password'];
$status_admin = $row['status_admin'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status_admin = $_POST['status_admin'];

    $update = " UPDATE customer SET nama_customer='$nama',alamat='$alamat',notelp='$notelp',username='$username', password='$password',status_admin='$status_admin' WHERE id_customer=$id ";
    $result = mysqli_query($host, $update);
    if ($result) {
        header("location:view_customer.php");
    } else {
        die(mysqli_error($host));
    }
} ?>
<html>
<link rel="stylesheet" href="style.css" />
    <center>
    <head>
        <h1>Update Data User</h1>
    </head>
        <body>
            <form action="" method="post">
        <table class="boxc" width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_customer" value=<?php echo $nama; ?>>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>Nomor Telpon</td>
                <td>:</td>
                <td><input type="text" name="notelp" value=<?php echo $notelp; ?>></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" value=<?php echo $username; ?>>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" value=<?php echo $password; ?>>
                </td>
            </tr>
            <tr>
                <td>Status Admin</td>
                <td>:</td>
                <td><select name="status_admin" id="">
                    <option value="hidup" <?php if($status_admin == 'hidup'){ echo"selected";}?>>Hidup</option>
                    <option value="mati" <?php if($status_admin == 'mati'){ echo"selected";}?>>Mati</option>
                </select></td>
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