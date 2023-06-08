<?php
include 'koneksi.php';
$id = $_GET['update'];
$sql = "SELECT * FROM dokter WHERE id_dokter= $id";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_dokter'];
$lulusan = $row['lulusan'];
$alamat = $row['alamat'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_dokter'];
    $lulusan = $_POST['lulusan'];
    $alamat = $_POST['alamat'];

    $update = "UPDATE `dokter` SET id_dokter=$id,nama_dokter='$nama',lulusan='$lulusan',alamat='$alamat' WHERE id_dokter=$id ";
    $result = mysqli_query($host, $update);
    if ($result) {
        header("location:view_dokter.php");
    } else {
        die(mysqli_error($host));
    }
} ?>
<html>
<link rel="stylesheet" href="style.css" />
    <center>
    <head>
        <h1>Edit Data Dokter</h1>
    </head>
        <body>
            <form action="" method="post">
        <table class="boxc" width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_dokter" value=<?php echo $nama; ?>>
                </td>
            </tr>
            <tr>
                <td>Lulusan</td>
                <td>:</td>
                <td><input type="text" name="lulusan" value=<?php echo $lulusan; ?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>>
                </td>
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