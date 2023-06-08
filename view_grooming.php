<?php
session_start();
?>
<html>
<link rel="stylesheet" href="style.css" />
    <head></head>
    <a class='link-b' href="home.php">Back</a> 
    <center>
    <body>
        <h2>Data Toko Grooming</h2>
        <table border="1">
            <tr class="c">
                <th>No</th>
                <th>Nama Toko</th>
                <th>Lokasi</th>
                <?php if($_SESSION['status_admin']== "hidup"){
                    echo
                '<th>Aksi</th>';
                }?>
            </tr>
            <a href="add-grooming.php">Tambahkan Data</a>
        <?php 
        include "koneksi.php";
        $query_mysql = mysqli_query($host,"SELECT*FROM grooming");
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['id_grooming']; ?></td>
                <td><?php echo $data['nama_toko']; ?></td>
                <td><?php echo $data['lokasi']; ?></td>
                <?php if($_SESSION['status_admin'] == "hidup"){
                    echo
                '<td>
                    <a href="edit-grooming.php?update='.$data['id_grooming'].';">Edit</a> | <a href="delete-grooming.php?hapus='.$data['id_grooming'].';">Hapus</a>  
                </td>';
                }?>
             </tr>
             <?php } ?>
        </table>
    </body>
</html>