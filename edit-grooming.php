<?php
include 'koneksi.php';
$id = $_GET['update'];
$sql = "SELECT * FROM grooming WHERE id_grooming= '$id'";
$result = mysqli_query($host, $sql);    
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_toko'];
$lokasi = $row['lokasi'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_toko'];
    $lokasi = $_POST['lokasi'];

    $update = "UPDATE grooming SET nama_toko='$nama',lokasi='$lokasi' WHERE id_grooming='$id' ";
    $result = mysqli_query($host,$update);
    if ($result) {
        header("location:view_grooming.php");
    } else {
        die(mysqli_error($host));
    }
} ?>
<html>
<link rel="stylesheet" href="style.css" />
    <center>
    <head>
        <h1>Edit Data Grooming</h1>
    </head>
        <body>
            <form action="" method="post">
        <table class="boxg" width="25%" border="0">
            <tr>
                <td>Toko Grooming</td>
                <td>:</td>
                <td><input type="text" name="nama_toko" value=<?php echo $nama; ?>>
                </td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td><input type="text" name="lokasi" value=<?php echo $lokasi; ?>></td>
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