<?php
    include "lib/koneksi.php";

    $idtransaksi = $_GET['id_transaksi'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$idtransaksi'");
    if ($queryHapus) {
        echo "<script> alert('Data Transaksi Berhasil Dihapus'); window.location = 'data_transaksi.php?menu=data_transaksi';</script>";
    } else {
        echo "<script> alert('Data Transaksi Gagal Dihapus'); window.location = 'data_transaksi.php?menu=data_transaksi';</script>";

    }
?>