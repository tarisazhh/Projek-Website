<html>
<link rel="stylesheet" href="style.css" />
<center>

    <head>
        <h1>Tambahkan Data Hewan</h1>
    </head>

    <body>
        <form action="" method="post">
            <table class="boxg" width="25%" border="0">
                <tr>
                    <td>Nama Hewan</td>
                    <td>:</td>
                    <td><input type="text" name="nama_hewan"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><input type="text" name="keterangan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Kirim"></td>
                </tr>
                <?php
                session_start();
                include "koneksi.php";

                if (isset($_POST['submit'])) {
                    $nama_hewan = $_POST['nama_hewan'];
                    $keterangan = $_POST['keterangan'];
                    $idc = $_SESSION['id_customer'];
                    $insert = "INSERT INTO hewan VALUES (NULL,'$nama_hewan','$keterangan',$idc)";
                    $result = mysqli_query($host, $insert);

                    header("location:view_hewan.php");
                }

                ?>
            </table>
        </form>
    </body>

</html>