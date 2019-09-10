<?php
    include "lib/koneksi.php";

    $idbuku = $_GET['id_buku'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$idbuku'");
    if ($queryHapus) {
        echo "<script> alert('Data Buku Berhasil Dihapus'); window.location = 'data_buku.php?menu=data_buku';</script>";
    } else {
        echo "<script> alert('Data Buku Gagal Dihapus'); window.location = 'data_buku.php?menu=data_buku';</script>";

    }
?>