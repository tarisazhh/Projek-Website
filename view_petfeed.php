<?php
session_start();
?>
<html>
<link rel="stylesheet" href="style.css" />
    <head></head>
         <a href="home.php" >Back</a>
    <body>
    <center>
        <h2>Data Toko Petfeed</h2>
        <table border="1" class="table">
            <tr class="c">
                <th>No</th>
                <th>Nama Toko</th>
                <th>Lokasi</th>
                <?php if($_SESSION['status_admin'] == "hidup"){
                    echo
                '<th>Aksi</th>';
                } ?>
            </tr>
            <a href="add-petfeed.php">Tambahkan Data</a>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($host,"SELECT * FROM petfeed");
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['id_petfeed']; ?></td>
                <td><?php echo $data['nama_toko']; ?></td>
                <td><?php echo $data['lokasi']; ?></td>
                <?php if($_SESSION['status_admin'] == "hidup"){
                    echo
                '<td>
                    <a href="edit-petfeed.php?update='.$data['id_petfeed'].';">Edit</a>
                    <a href="delete-petfeed.php?hapus='.$data['id_petfeed'].';">Hapus</a>
                </td>';
                } ?>
             </tr>
             <?php } ?>
        </table>
    </body>
</html>