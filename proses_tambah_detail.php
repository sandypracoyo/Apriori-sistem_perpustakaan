<?php
	// untuk memasukkan file config_web.php dan file koneksi.php

	include "lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' yang dikirim oleh form_tambah.php
	$id = $_POST['kodetransaksi'];
	$buku = $_POST['judul'];


	// query untuk menyimpan ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_transaksi,id_buku) VALUES ('$id', '$buku')");
	echo $buku;

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
		echo "<script> window.location = 'detail_pinjam.php';</script>";
		//jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
	echo "<script> alert('Data Transaksi Gagal Dimasukkan'); window.location = 'detail_pinjam.php';</script>";
	}
?>