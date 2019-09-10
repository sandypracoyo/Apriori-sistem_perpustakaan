<?php
	// untuk memasukkan file config_web.php dan file koneksi.php

	include "lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' yang dikirim oleh form_tambah.php
	$judul = $_POST['judulbuku'];
	$kategori = $_POST['kategori'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];


	// query untuk menyimpan ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "INSERT INTO buku (judul_buku,id_kategori,id_penulis,id_penerbit) VALUES ('$judul','$kategori', '$penulis','$penerbit')");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
		echo "<script> alert('Data Buku Berhasil ditambah'); window.location = 'data_buku.php?menu=data_buku';</script>";
		//jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
	echo "<script> alert('Data Buku Gagal Dimasukkan'); window.location = 'tambah_buku.php';</script>";
	}
?>