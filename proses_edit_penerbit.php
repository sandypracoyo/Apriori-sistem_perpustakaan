<?php
	// untuk memasukkan file config_web.php dan file koneksi.php

	include "lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' yang dikirim oleh form_tambah.php
	$idpenerbit = $_POST['idpenerbit'];
	$penerbit = $_POST['penerbit'];
	$alamat = $_POST['alamat'];


	// query untuk menyimpan ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "UPDATE penerbit SET nama_penerbit='$penerbit',alamat='$alamat' WHERE id_penerbit=$idpenerbit");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
		echo "<script> alert('Data penerbit Berhasil Diubah'); window.location = 'data_penerbit.php?menu=data_penerbit';</script>";
		//jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
		echo "<script> alert('Data penerbit Gagal Diubah'); window.location = history.go(-1);</script>";
	}
?>
