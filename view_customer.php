<html>  
    <head></head>
    <link rel="stylesheet" href="style.css" />
    <body>
         <a href="home.php" >Back</a>
    <center>
        <h2>Data User</h2>
        <table width="65%" border="1">
            <tr class="c">
                <th>No</th>
                <th>Nama Customer</th>
                <th>Alamat</th>
                <th>Nomor Telpon</th>
                <th>Username</th>
                <th>Password</th>
                <th>Status Admin</th>
                <th>Aksi</th>
            </tr>
            <a href="add.php">Tambahkan Data</a>
    </body>
            <?php 
            include "koneksi.php";
            session_start();
            $idc = $_SESSION['id_customer'];
            $query_mysql = mysqli_query($host,"SELECT * FROM customer WHERE $idc");
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr align="center">
                <td><?php echo$data['id_customer']; ?></td>
                <td><?php echo$data['nama_customer']; ?></td>
                <td><?php echo$data['alamat']; ?></td>
                <td><?php echo$data['notelp']; ?></td>
                <td><?php echo$data['username']; ?></td>
                <td><?php echo$data['password']; ?></td>
                <td><?php echo$data['status_admin']; ?></td>
                <td>
                    <a href="edit.php?update=<?php echo $data['id_customer'];?>">Edit</a> | <a href="delete-customer.php?hapus=<?php echo $data['id_customer'];?>">Hapus</a>
                    
                </td>
            </tr>
            <?php } ?>
        </table>
</html>