<html>
<link rel="stylesheet" href="style.css" />
        <center>
        <head>
        <h1>Tambah Data Dokter</h1>
        </head>
    <body>
        <form action="" method="post">
            <table class="boxc" width="25%" border="0">
                <tr>
                    <td>Nama Dokter</td>
                    <td>:</td>
                    <td><input type="text" name="nama_dokter"></td>
                </tr>
                <tr>
                    <td>Lulusan</td>
                    <td>:</td>
                    <td><input type="text" name="lulusan"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Kirim"></td>
                </tr> 
                <?php 
                include "koneksi.php";
                if (isset($_POST['submit'])){                  
                    $nama_dokter = $_POST['nama_dokter'];
                    $lulusan = $_POST['lulusan'];
                    $alamat = $_POST['alamat'];
                    $insert = "INSERT INTO dokter VALUES (NULL,'$nama_dokter','$lulusan','$alamat')";
                    $result = mysqli_query($host, $insert);
                    header("location:view_dokter.php");
                }  ?>
            </table>
        </form>
    </body>
</html>                    