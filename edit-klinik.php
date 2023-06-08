<?php
include 'koneksi.php';
$id = $_GET['update'];
$sql = "SELECT * FROM klinik WHERE id_klinik=$id";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_klinik'];
$alamat = $row['alamat'];
$dokter = $row['id_dokter'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_klinik'];
    $alamat = $_POST['alamat'];
    $dokter = $_POST['id_dokter'];

    $update = "UPDATE klinik SET nama_klinik='$nama',alamat='$alamat',id_dokter='$dokter' WHERE id_klinik='$id' ";
    $result = mysqli_query($host, $update);
    if ($result) {
        header("location:view_klinik.php");
    } else {
        die(mysqli_error($host));
    }
} ?>
<html>
<link rel="stylesheet" href="style.css" />
<center>

    <head>
        <h1>Edit Data Klinik</h1>
    </head>

    <body>
        <form action="" method="post">
            <table class="boxc" width="25%" border="0">
                <tr>
                    <td>Nama Klinik</td>
                    <td>:</td>
                    <td><input type="text" name="nama_klinik" value=<?php echo $nama; ?>>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
                </tr>
                <tr>
                    <td>Dokter</td>
                    <td>:</td>
                    <td>
                        <select name="id_dokter" id="">
                            <?php $sql = "SELECT * FROM dokter where 1";
                            $result = mysqli_query($host, $sql);
                            while ($data = mysqli_fetch_array($result)):
                                ?>
                                <option value="<?php echo $data['id_dokter']; ?>"><?php echo $data['nama_dokter'] ?></option>
                            <?php endwhile; ?>
                        </select>
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