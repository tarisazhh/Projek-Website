<html>

    
    <head></head>
    <a class='link-b' href="home.php">Back</a>
    <center>
    <body>
        <h2>Data Admin</h2>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Nama Admin</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <a href="add-dokter.php">Tambahkan Data</a>
    </body>
            <?php 
            include "koneksi.php";
            $query_mysql = mysqli_query($host, "SELECT * FROM admin");
            while($data = mysqli_fetch_array($query_mysql)):
            ?>
            <tr>
                <td><?php echo$data['id_admin']; ?></td>
                <td><?php echo$data['nama_admin']; ?></td>
                <td><?php echo$data['alamat']; ?></td>
                <td><?php echo$data['username']; ?></td>
                <td><?php echo$data['password']; ?></td>
                <td>
                    <a href="edit.php?update=<?php echo $data['id_admin'];?>">Edit</a>
                    <a href="delete-admin.php?hapus=<?php echo $data['id_admin'];?>">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
</html>