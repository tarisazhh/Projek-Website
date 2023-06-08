<html>
<link rel="stylesheet" href="style.css" />
        <center>
        <head>
        <h1>Tambah Toko Petfeed</h1>
        </head>
    <body>
        <form action="" method="post">
            <table class="boxg" width="25%" border="0">
                <tr>
                    <td>Toko Petfeed</td>
                    <td>:</td>
                    <td><input type="text" name="nama_toko"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="lokasi"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Kirim"></td>
                </tr>
                <?php 
                include "koneksi.php";
                if (isset($_POST['submit'])){
                $toko = $_POST['nama_toko'];
                $lokasi = $_POST['lokasi'];
                $insert = "INSERT INTO petfeed VALUE('','$toko','$lokasi')";
                $result = mysqli_query($host, $insert);
                header("Location:view_petfeed.php");
                } ?>
            </table>
        </form>
    </body>
</html>                    