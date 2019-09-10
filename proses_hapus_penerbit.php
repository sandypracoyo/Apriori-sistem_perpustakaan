<?php
    include "lib/koneksi.php";

    $idpenerbit = $_GET['id_penerbit'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM penerbit WHERE id_penerbit='$idpenerbit'");
    if ($queryHapus) {
        echo "<script> alert('Data Penerbit Berhasil Dihapus'); window.location = 'data_penerbit.php?menu=data_penerbit';</script>";
    } else {
        echo "<script> alert('Data Penerbit Gagal Dihapus'); window.location = 'data_penerbit.php?menu=data_penerbit';</script>";

    }
?>