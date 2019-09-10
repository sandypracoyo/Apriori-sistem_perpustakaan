<?php
    include "lib/koneksi.php";

    $idkategori = $_GET['id_kategori'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$idkategori'");
    if ($queryHapus) {
        echo "<script> alert('Data Kategori Berhasil Dihapus'); window.location = 'data_kategori.php?menu=data_kategori';</script>";
    } else {
        echo "<script> alert('Data Kategori Gagal Dihapus'); window.location = 'data_kategori.php?menu=data_kategori';</script>";

    }
?>