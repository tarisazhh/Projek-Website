<?php
include 'koneksi.php';
$id = $_GET['update'];
$sql = "SELECT * FROM opsi WHERE id_opsi = '$id'";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$jenis = $row['jenis_opsi'];
$harga = $row['harga'];

if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis_opsi'];
    $harga = $_POST['harga'];
    $update = " UPDATE opsi SET jenis_opsi='$jenis',harga='$harga' WHERE id_opsi='$id' ";
    $result = mysqli_query($host, $update);
    if ($result) {
        header("location:view_opsi.php");
    } else {
        die(mysqli_error($host));
    }
} ?>
<html>
<link rel="stylesheet" href="style.css" />
    <center>
    <head>
        <h1>Update Data Opsi</h1>
    </head>
        <body>
            <form action="" method="post">
        <table class="boxc" width="25%" border="0">
            <tr>
                <td>Jenis Opsi</td>
                <td>:</td>
                <td><input type="text" name="jenis_opsi" value=<?php echo $jenis; ?>>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" value=<?php echo $harga; ?>></td>
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

