<?php
include 'koneksi.php';
$id = $_GET['update'];
$sql = "SELECT * FROM transaksi WHERE id_transaksi= $id";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama_customer'];
$hewan = $row['nama_hewan'];
$dokter = $row['nama_dokter'];
$opsi = $row['jenis_opsi'];
$klinik = $row['nama_klinik'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_customer'];
    $hewan = $_POST['alamat'];
    $dokter = $_POST['nama_dokter'];
    $opsi = $_POST['jenis_opsi'];
    $klinik = $_POST['nama_klinik'];

    $sql = "update `transaksi` set id_transaksi=$id,nama_customer='$nama',nama_hewan='$hewan',nama_dokter='$dokter',jenis_klinik='$opsi',nama_klinik='$klinik' where id_klinik=$id ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:view_transaksi.php");
    } else {
        die(mysqli_error($host));
    }
} ?>
<html>
<link rel="stylesheet" href="style.css" />
<center>

    <head>
        <h1>Edit Data Transaksi</h1>
    </head>

    <body>
        <form action="" method="post">
            <table class="boxc" width="25%" border="0">
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td>Nama Dokter</td>
                    <td>:</td>
                    <td>
                        <select name="id_dokter" id="">
                            <?php $sql = "SELECT * FROM dokter WHERE 1";
                            $result = mysqli_query($host, $sql);
                            while ($data = mysqli_fetch_array(($result))):
                                ?>
                                <option value="<?php echo $data['id_dokter']; ?>"><?php echo $data['nama_dokter']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Klinik</td>
                    <td>:</td>
                    <td>
                        <select name='id_klinik' id=''>
                            <?php $sql = "SELECT * FROM klinik WHERE 1";
                            $result = mysqli_query($host, $sql);
                            while ($data = mysqli_fetch_array(($result))):
                                ?>
                                <option value="<?php echo $data['id_klinik']; ?>"><?php echo $data['nama_klinik']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Opsi</td>
                    <td>:</td>
                    <td>
                        <select name="jenis_opsi" id="">
                            <?php $sql = "SELECT * FROM opsi WHERE 1";
                            $result = mysqli_query($host, $sql);
                            while ($data = mysqli_fetch_array(($result))):
                                ?>
                                <option value="<?php echo $data['id_opsi']; ?>"><?php echo $data['jenis_opsi']; ?></option>
                            <? endwhile; ?>
                        </select>
                    </td>
                <tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td>
                        <select name="jenis_pembayaran" id="">
                            <?php $sql = "SELECT * FROM pembayaran WHERE 1";
                            $result = mysqli_query($host, $sql);
                            while ($data = mysqli_fetch_array(($result))):
                                ?>
                                <option value="<?php echo $data['id_pembayaran']; ?>"><?php echo $data['jenis_pembayaran']; ?>
                                </option>
                            <? endwhile; ?>
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