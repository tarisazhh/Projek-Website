<?php
session_start();
?>
<html>
<link rel="stylesheet" href="style.css" />

<head></head>
<div>
    <a href="home.php">Back</a>
</div>
<center>

    <body>
        <h2 align='center'>Data Transaksi</h2>
        <table border="1" class="table">
            <tr class="c">
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Customer</th>
                <th>Nama Hewan</th>
                <th>Nama Dokter</th>
                <th>Nama Klinik</th>
                <th>Jenis Pelayanan</th>
                <th>Jenis Pembayaran</th>
                <?php if($_SESSION['status_admin'] == "hidup"){
                    echo
                '<th>Aksi</th>';
                } ?>
            </tr>
            <?php
            include "koneksi.php";
            $no = 1;
            $query_mysql = mysqli_query(
                $host,
                "SELECT transaksi.*, customer.nama_customer,hewan.nama_hewan,dokter.nama_dokter,klinik.nama_klinik,opsi.jenis_opsi,pembayaran.jenis_pembayaran 
        FROM transaksi 
        INNER JOIN customer ON customer.id_customer = transaksi.id_customer 
        INNER JOIN hewan ON hewan.id_hewan = transaksi.id_hewan 
        INNER JOIN dokter ON dokter.id_dokter = transaksi.id_dokter 
        INNER JOIN klinik ON klinik.id_klinik = transaksi.id_klinik 
        INNER JOIN opsi ON opsi.id_opsi = transaksi.id_opsi 
        INNER JOIN pembayaran ON pembayaran.id_pembayaran = transaksi.id_pembayaran;"
            );
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr align="center">
                    <td>
                        <?php echo $data['id_transaksi']; ?>
                    </td>
                    <td>
                        <?php echo $data['tanggal']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_customer']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_hewan']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_dokter']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_klinik']; ?>
                    </td>
                    <td>
                        <?php echo $data['jenis_opsi']; ?>
                    </td>
                    <td>
                        <?php echo $data['jenis_pembayaran']; ?>
                    </td>
                    <?php if($_SESSION['status_admin'] == "hidup"){
                        echo
                    '<td>
                        <a href="edit-transaksi.php?update='.$data['id_transaksi'].';">Edit</a> | <a href="delete-transaksi.php?hapus='.$data['id_transaksi'].';">Hapus</a>
                    </td>';
                    } ?>
                </tr>
            <?php } ?>
        </table>
    </body>

</html>