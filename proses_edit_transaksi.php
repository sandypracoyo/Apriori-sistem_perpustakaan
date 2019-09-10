<?php
	// untuk memasukkan file config_web.php dan file koneksi.php
	include "lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' dan 'id_kategori' yang dikirim oleh form_edit.php
	$id_detail = $_POST['detail'];
	$id_buku = $_POST['judul'];


	// query untuk mengubah ke tabel tbl_kategori
	
		$querySimpan = mysqli_query($koneksi, "UPDATE detail_transaksi SET id_buku = '$id_buku' WHERE id_detail_transaksi='$id_detail'");


	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
	if ($querySimpan) {
		echo "<script> alert('Data Transaksi Berhasil Diubah'); window.location = history.go(-2);</script>";
		// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
		echo "<script> alert('Data Transaksi Gagal Diubah'); window.location = 'edit_detail_transaksi.php';</script>";
	}
?>