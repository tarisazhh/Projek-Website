<html>
<link rel="stylesheet" href="style.css" />
        <center>
        <head>
        <h1>Tambah Toko Grooming</h1>
        </head>
    <body>
        <form action="" method="post">
            <table class="boxg" width="25%" border="0">
                <tr>
                    <td>Toko Grooming</td>
                    <td>:</td>
                    <td><input type="text" name="nama_toko"></td>
                </tr>
                <tr>
                    <td>Lokasi</td>
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
                    $nama_toko = $_POST['nama_toko'];
                    $lokasi = $_POST['lokasi'];
                    $inssert = "INSERT INTO grooming VALUE(NULL,'$nama_toko','$lokasi')";
                    $result = mysqli_query($host, $inssert);
                    header('Location:view_grooming.php');
                } ?>
        
            </table>
        </form>
    </body>
</html>                    