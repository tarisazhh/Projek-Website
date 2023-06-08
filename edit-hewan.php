<?php
include 'koneksi.php';
$id = $_GET['update'];
$sql = "SELECT * FROM hewan WHERE id_hewan= $id";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_hewan'];
$ket = $row['keterangan'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_hewan'];
    $ket = $_POST['keterangan'];
    $update = "UPDATE hewan SET id_hewan=$id,nama_hewan='$nama',keterangan='$ket' WHERE id_hewan=$id ";
    $result = mysqli_query($host, $update);
    if ($result) {
        header("location:view_hewan.php");
    } else {
        die(mysqli_error($host));
    }
} ?>
<html>
<link rel="stylesheet" href="style.css" />
    <center>
    <head>
        <h1>Edit Data Hewan</h1>
    </head>
        <body>
            <form action="" method="post">
        <table class="boxg" width="25%" border="0">
            <tr>
                <td>Nama Hewan</td>
                <td>:</td>
                <td><input type="text" name="nama_hewan" value=<?php echo $nama; ?>>
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><input type="text" name="keterangan" value=<?php echo $ket; ?>></td>
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