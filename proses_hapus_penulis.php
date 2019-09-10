<?php
    include "lib/koneksi.php";

    $idpenulis = $_GET['id_penulis'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM penulis WHERE id_penulis='$idpenulis'");
    if ($queryHapus) {
        echo "<script> alert('Data penulis Berhasil Dihapus'); window.location = 'data_penulis.php?menu=data_penulis';</script>";
    } else {
        echo "<script> alert('Data penulis Gagal Dihapus'); window.location = 'data_penulis.php?menu=data_penulis';</script>";

    }
?>