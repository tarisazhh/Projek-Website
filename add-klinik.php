<?php

include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_klinik'];
    $alamat = $_POST['alamat'];
    $idd = $_POST['id_dokter'];
    $insert = "INSERT INTO klinik VALUES (NULL,'$nama','$alamat','$idd')";
    $result = mysqli_query($host, $insert);
    header("location:view_klinik.php");
} ?>

<html>
<link rel="stylesheet" href="style.css" />
<center>

    <head>
        <h1>Tambah Klinik</h1>
    </head>

    <body>
        <form action="" method="post">
            <table class="boxc" width="25%" border="0">
                <tr>
                    <td>Nama klinik</td>
                    <td>:</td>
                    <td><input type="text" name="nama_klinik"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Dokter</td>
                    <td>:</td>
                    <td>
                        <select name="id_dokter" id="">
                            <?php $sql = "SELECT * FROM dokter where 1";
                            $result = mysqli_query($host, $sql); 
                            while($data= mysqli_fetch_array($result)):
                            ?>
                            <option value="<?php echo $data['id_dokter'];?>"><?php echo $data['nama_dokter']?></option>
                            <?php endwhile;?>
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
