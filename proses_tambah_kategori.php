<?php
	// untuk memasukkan file config_web.php dan file koneksi.php

	include "lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' yang dikirim oleh form_tambah.php
	$kategori = $_POST['kategori'];


	// query untuk menyimpan ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori) VALUES ('$kategori')");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
		echo "<script> alert('Data Kategori Berhasil ditambah'); window.location = 'data_kategori.php?menu=data_kategori';</script>";
		//jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
	echo "<script> alert('Data Kategori Gagal Dimasukkan'); window.location = 'tambah_kategori.php';</script>";
	}
?>