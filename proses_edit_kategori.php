<?php
	// untuk memasukkan file config_web.php dan file koneksi.php

	include "lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' yang dikirim oleh form_tambah.php
	$idkategori = $_POST['idkategori'];
	$kategori = $_POST['kategori'];


	// query untuk menyimpan ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$kategori' WHERE id_kategori=$idkategori");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
		echo "<script> alert('Data Buku Berhasil Diubah'); window.location = 'data_kategori.php?menu=data_kategori';</script>";
		//jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
		echo "<script> alert('Data Buku Gagal Diubah'); window.location = history.go(-1);</script>";
	}
?>
