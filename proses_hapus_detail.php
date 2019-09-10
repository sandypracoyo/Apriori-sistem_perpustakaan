<?php
    include "lib/koneksi.php";

    $iddetail = $_GET['id_detail_transaksi'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM detail_transaksi WHERE id_detail_transaksi='$iddetail'");
    if ($queryHapus) {
        echo "<script> alert('Data Transaksi Berhasil Dihapus'); window.location = 'detail_pinjam.php?menu=data_transaksi';</script>";
    } else {
        echo "<script> alert('Data Transaksi Gagal Dihapus'); window.location = 'detail_pinjam.php?menu=data_transaksi';</script>";

    }
?>