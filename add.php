<html>
<link rel="stylesheet" href="style.css" />
        <center>
        <head>
        <h1>Registrasi</h1>
        </head>
    <body>
        <form action="" method="post">
            <table class="boxc" width="25%" border="0">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_customer"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Nomor Telpon</td>
                    <td>:</td>
                    <td><input type="text" name="notelp"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Kirim"></td>
                </tr>
                <?php
                include "koneksi.php";
                session_start();
                if (isset($_POST['submit'])){
                    $nama = $_POST['nama_customer'];
                    $alamat = $_POST['alamat'];
                    $notelp = $_POST['notelp'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $status = "mati";
                    $result = mysqli_query($host, "SELECT *FROM customer WHERE username = '$username'");
                if(mysqli_num_rows($result) > 0){
                    echo 
                    "<script> alert('Maaf! ussername sudah terdaftar'); </script>";
                } 
                else {
                    $insert = "INSERT INTO customer VALUES('','$nama','$alamat','$notelp','$username','$password','$status')";
                    mysqli_query($host,$insert);
                    echo 
                    "<script> alert('Registrasi berhasil'); </script>";
                    header("location:login.php");
                }
                } ?>
            </table>
        </form>
    </body>
</html>                    