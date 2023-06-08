<?php
session_start();
?>
<html>
<link rel="stylesheet" href="style.css" />
<head></head>
    <body>
         <a href="home.php" >Back</a>
        <center>
        <h2 class="title">Data Dokter</h2>
        <table width=50% border="1">
            <tr class="c">
                <th>No</th>
                <th>Nama Dokter</th>
                <th>Lulusan</th>
                <th>Alamat</th>
                <?php if($_SESSION['status_admin']=='hidup'){ echo'
                <th>Aksi</th>';}?>
            </tr>
            <a href="add-dokter.php">Tambahkan Data</a>
            <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($host, "SELECT * FROM dokter");
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr align="center">
                    <td>
                        <?php echo $data['id_dokter']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_dokter']; ?>
                    </td>
                    <td>
                        <?php echo $data['lulusan']; ?>
                    </td>
                    <td>
                        <?php echo $data['alamat']; ?>
                    </td>
                    <?php if($_SESSION['status_admin']=='hidup'){
                        echo'
                    <td>
                        <a href="edit-dokter.php?update='.$data['id_dokter'].'">Edit</a> | <a href="delete-dokter.php?hapus='.$data['id_dokter'].'">Hapus</a>
                    </td>';
                    }
                    ?>
                </tr>
            <?php } ?>
        </table>
    </body>

</html>