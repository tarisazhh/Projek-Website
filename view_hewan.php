<?php
session_start();
?>
<html>
<link rel="stylesheet" href="style.css" />
    <head></head>
    <body>
         <a href="home.php" >Back</a>
    <center>
        <h2>Data Hewan</h2>
        <table border="1">
            <tr class="c">
                <th>No</th>
                <th>Nama Hewan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            <a href="add-hewan.php">Tambahkan Data</a>
        <?php 
        include "koneksi.php";
        $idc = $_SESSION['id_customer'];
        $query_mysql = mysqli_query($host,"SELECT * FROM hewan where id_customer = $idc");
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr align="center">
                <td><?php echo $data['id_hewan']; ?></td>
                <td><?php echo $data['nama_hewan']; ?></td>
                <td><?php echo $data['keterangan']; ?></td>
                <td>
                <?php
                    echo
                '
                    <a href="edit-hewan.php?update='.$data['id_hewan'].';">Edit</a> |
                    <a href="add-transaksi.php?id_hewan='.$data['id_hewan'].';">Transaksi</a>
                ';
                }?>
                </td>
             </tr>
        </table>
    </body>
</html>