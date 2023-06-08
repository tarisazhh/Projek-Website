<?php
    session_start(); 
    include "koneksi.php";
    if (isset($_POST['submit'])){
        $tanggal = $_POST['tanggal'];
        $idc = $_SESSION['id_customer'];
        $idh = $_GET['id_hewan'];
        $idd = $_POST['id_dokter'];
        $idk = $_POST['id_klinik'];
        $ido = $_POST['jenis_opsi'];
        $idp = $_POST['jenis_pembayaran'];
        $insert = "INSERT INTO transaksi VALUES (NULL,'$tanggal','$idc','$idh','$idd','$idk','$ido','$idp')";
        $result = mysqli_query($host, $insert);
        header("location:view_transaksi.php");
    } ?>
<html> 

    <center>
    <head>
    <link rel="stylesheet" href="style.css" />
    <h1>Buat Pesanan</h1>
    </head>

    <body>
        <form action="" method="post">
            <table class="boxc" width="25%" border="0">
                <tr>
                    <td>Tanggal</td>
                    <td>:<td>
                    <input type="date" name="tanggal">
                </tr>
                <tr>
                    <td>Nama Dokter</td>
                    <td>:</td>
                    <td>
                        <select name="id_dokter" id="">
                        <?php $sql = "SELECT * FROM dokter WHERE 1";
                        $result = mysqli_query($host, $sql); 
                        while($data = mysqli_fetch_array(($result))):
                        ?>
                        <option value="<?php echo $data['id_dokter'];?>"><?php echo $data['nama_dokter'];?></option>
                        <?php endwhile;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Klinik</td>
                    <td>:</td>
                    <td>
                        <select name='id_klinik' id=''>
                        <?php $sql="SELECT * FROM klinik WHERE 1";
                        $result = mysqli_query($host,$sql);
                        while($data = mysqli_fetch_array(($result))):
                        ?>
                        <option value="<?php echo $data['id_klinik'];?>"><?php echo $data['nama_klinik'];?></option>
                        <?php endwhile;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Opsi</td>
                    <td>:</td>
                    <td>
                        <select name="jenis_opsi" id="">
                        <?php $sql ="SELECT * FROM opsi WHERE 1";
                        $result = mysqli_query($host, $sql);
                        while($data = mysqli_fetch_array(($result))):
                        ?>
                        <option value="<?php echo $data['id_opsi'];?>"><?php echo $data['jenis_opsi'];?></option>
                        <?php endwhile;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td>
                        <select name="jenis_pembayaran" id="">
                        <?php $sql = "SELECT * FROM pembayaran WHERE 1";
                        $result = mysqli_query($host, $sql);
                        while($data = mysqli_fetch_array(($result))):
                        ?>
                        <option value="<?php echo $data['id_pembayaran'];?>"><?php echo $data['jenis_pembayaran'];?></option>
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