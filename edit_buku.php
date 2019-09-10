<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";
$kodebuku=$_GET['id_buku'];
$query = mysqli_query($koneksi, "SELECT buku.judul_buku, kategori.nama_kategori, penulis.nama_penulis, penerbit.nama_penerbit
                 FROM buku
                  JOIN kategori ON buku.id_kategori = kategori.id_kategori
                  JOIN penulis ON buku.id_penulis = penulis.id_penulis
                    JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
                    WHERE id_buku='$kodebuku'");
$databuku= mysqli_fetch_array($query); 
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      	Edit
        Data
        Buku
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Buku</li>
      </ol>
    </section>

 <!-- Main content -->
    <section class="content">
    	  <div class="row">
<div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="proses_edit_buku.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Buku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly="readonly" id="inputEmail3" name="kodebuku" value="<?php echo $kodebuku?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Judul Buku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="judulbuku" value="<?php echo $databuku['judul_buku']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="kategori"
                        style="width: 100%;">
                     <?php
              $query = mysqli_query($koneksi, "SELECT * FROM Kategori");
              while ($data = mysqli_fetch_array($query))
              {
              ?>
              <option value="<?php echo $data['id_kategori'];?>"><?php echo $data['nama_kategori'];?></option>
              <?php } ?>
                </select>
                  </div>
                  </div>
                     <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Penulis</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="penulis"
                        style="width: 100%;">
                     <?php
              $query = mysqli_query($koneksi, "SELECT * FROM penulis");
              while ($data = mysqli_fetch_array($query))
              {
              ?>
              <option value="<?php echo $data['id_penulis'];?>"><?php echo $data['nama_penulis'];?></option>
              <?php } ?>
                </select>
                  </div>
                  </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Penerbit</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="penerbit"
                        style="width: 100%;">
                     <?php
              $query = mysqli_query($koneksi, "SELECT * FROM penerbit");
              while ($data = mysqli_fetch_array($query))
              {
              ?>
              <option value="<?php echo $data['id_penerbit'];?>"><?php echo $data['nama_penerbit'];?></option>
              <?php } ?>
                </select>
                  </div>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Simpan Data Buku</button>
                <input type="button" class="btn btn-warning" onclick="location='data_buku.php?menu=data_buku'" value="kembali">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php
include 'footer.php'
?>
