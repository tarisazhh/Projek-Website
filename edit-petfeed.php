<?php
include 'koneksi.php';
$id = $_GET['update'];
$sql = "SELECT * FROM petfeed WHERE id_petfeed= '$id'";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$toko = $row['nama_toko'];
$lokasi = $row['lokasi'];

if (isset($_POST['submit'])) {
    $toko = $_POST['nama_toko'];
    $lokasi = $_POST['lokasi'];

    $update = "UPDATE petfeed SET nama_toko='$toko',lokasi='$lokasi' WHERE id_petfeed='$id' ";
    $result = mysqli_query($host, $update);
    if ($result) {
        header("location:view_petfeed.php");
    } else {
        die(mysqli_error($host));
    }
} ?>
<html>
<link rel="stylesheet" href="style.css" />
    <center>
    <head></head>
        <body>
            <h3>Data Petfeed</h3>
            <form action="" method="post">
        <table class="boxg" width="25%" border="0">
            <tr>
                <td>Toko Petfeed</td>
                <td>:</td>
                <td><input type="text" name="nama_toko" value=<?php echo $toko; ?>></td>
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