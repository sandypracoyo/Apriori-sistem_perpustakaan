<?php
	// untuk memasukkan file config_web.php dan file koneksi.php

	include "lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' yang dikirim oleh form_tambah.php
	$idpenulis = $_POST['idpenulis'];
	$penulis = $_POST['penulis'];


	// query untuk menyimpan ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "UPDATE penulis SET nama_penulis='$penulis' WHERE id_penulis=$idpenulis");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
		echo "<script> alert('Data Penulis Berhasil Diubah'); window.location = 'data_penulis.php?menu=data_penulis';</script>";
		//jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
		echo "<script> alert('Data Penulis Gagal Diubah'); window.location = history.go(-1);</script>";
	}
?>
