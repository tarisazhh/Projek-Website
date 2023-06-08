<?php
session_start();
?>
<html>
<link rel="stylesheet" href="style.css" />
<head></head>
<body>
     <a href="home.php" >Back</a>

    <center>
        <h2>Data Klinik</h2>
        <table width="45%" border="1">
            <tr class="c">
                <th>No</th>
                <th>Nama Klinik</th>
                <th>Alamat</th>
                <th>Nama Dokter</th>
                <?php if($_SESSION['status_admin'] == "hidup"){
                    echo
                '<th>Aksi</th>';
                }?>
            </tr>
            <a href="add-klinik.php">Tambahkan Data</a>
            <?php
            include "koneksi.php";
            $no = 1;
            $query_mysql = mysqli_query($host, "SELECT klinik.*,dokter.nama_dokter FROM klinik INNER JOIN dokter ON klinik.id_dokter = dokter.id_dokter");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr align="center">
                    <td>
                        <?php echo $no++; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_klinik']; ?>
                    </td>
                    <td>
                        <?php echo $data['alamat']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_dokter']; ?>
                    </td>
                    <?php if($_SESSION['status_admin'] == "hidup"){
                        echo
                    '<td>
                        <a href="edit-klinik.php?update='.$data['id_klinik'].';">Edit</a> | 
                        <a href="delete-klinik.php?hapus='.$data['id_klinik'].';">Hapus</a>
                    </td>';
                    } ?>
                </tr>
            <?php } ?>
        </table>
    </body>

</html>