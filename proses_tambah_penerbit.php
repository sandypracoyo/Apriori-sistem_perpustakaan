<?php
	// untuk memasukkan file config_web.php dan file koneksi.php

	include "lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' yang dikirim oleh form_tambah.php
	$penerbit = $_POST['penerbit'];
	$alamat = $_POST['alamat'];


	// query untuk menyimpan ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "INSERT INTO penerbit (nama_penerbit,alamat) VALUES ('$penerbit','$alamat')");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
		echo "<script> alert('Data Penerbit Berhasil ditambah'); window.location = 'data_penerbit.php?menu=data_penerbit';</script>";
		//jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
	echo "<script> alert('Data Penerbit Gagal Dimasukkan'); window.location = 'tambah_penerbit.php';</script>";
	}
?>