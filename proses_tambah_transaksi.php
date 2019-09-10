<?php
	// untuk memasukkan file config_web.php dan file koneksi.php

	include "lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' yang dikirim oleh form_tambah.php
	$id = $_POST['kodetransaksi'];
	$tanggal = $_POST['tanggal'];


	// query untuk menyimpan ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "INSERT INTO transaksi (id_transaksi,tanggal) VALUES ('$id', '$tanggal')");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
		echo "<script> alert('Data Transaksi Berhasil ditambah'); window.location = 'detail_pinjam.php';</script>";
		//jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
	echo "<script> alert('Data Transaksi Gagal Dimasukkan'); window.location = 'tambah.php';</script>";
	}
?>