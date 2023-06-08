<?php
session_start();
if ($_SESSION['username'] == '') {
    header("location:login.php");
}
?>
<html>
<link rel="stylesheet" href="ui.css" >

<head></head>
<nav class="navigasi">
    <div class="home">Muf-Pet</div>
    <div class="llo">
        <a class="lo" href="logout.php">Log-out</a>
    </div>
</nav>

<body>
    <ul class="pilihan">
        <?php
        if ($_SESSION['status_admin'] == "hidup") {
            echo
                '<li><a class="link-c" href="view_customer.php">User</a></li>
            <li><a class="link-a" href="view_dokter.php">Dokter</a></li>
            <li><a class="link-b" href="view_hewan.php">Hewan</a></li>
            <li><a class="link-d" href="view_klinik.php">Klinik</a></li>
            <li><a class="link-e" href="view_transaksi.php">Transaksi</a></li>
            <li><a class="link-f" href="view_petfeed.php">Toko Petfeed</a></li>
            <li><a class="link-g" href="view_grooming.php">Toko Grooming</a></li>
            <li><a class="link-h" href="view_opsi.php">Opsi</a></li>';
        } else{
            echo'
            <li><a class="link-b" href="view_dokter.php">Dokter</a></li>
            <li><a class="link-c" href="view_hewan.php">Hewan</a></li>
            <li><a class="link-a" href="view_klinik.php">Klinik</a></li>
            <li><a class="link-h" href="view_transaksi.php">Transaksi</a></li>
            <li><a class="link-e" href="view_petfeed.php">Toko Petfeed</a></li>
            <li><a class="link-f" href="view_grooming.php">Toko Grooming</a></li>
            <li><a class="link-d" href="view_opsi.php">Opsi</a></li>';

        }
        ?>
    </ul>
        <table class="tabel" border="1">
            <tr class="c">
                <th>No</th>
                <th>Nama Customer</th>
                <th>Alamat</th>
                <th>Nomor Telpon</th>
                <th>Username</th>
                <th>Password</th>
                <th>Status Admin</th>
                <?php if($_SESSION['status_admin'] == "hidup"){
                    echo
                '<th>Aksi</th>';
                } ?>
            </tr>
            <?php 
            include "koneksi.php";
            $idc = $_SESSION['id_customer'];
            $status = $_SESSION['status_admin'];
            $query_mysql = mysqli_query($host,"SELECT * FROM customer WHERE id_customer = '$idc'");
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
                <?php if($_SESSION['status_admin'] == "hidup"){
                    echo
                '<td>
                    <a href="edit.php?update='.$data['id_customer'].';">Edit</a> | <a href="delete-customer.php?hapus=echo '.$data['id_customer'].';">Hapus</a>
                    
                </td>';
                } ?>
            </tr>
            <?php } ?>
        </table>
</body>
</div>

</html>

