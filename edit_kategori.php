<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";
$idkategori=$_GET['id_kategori'];
$query = mysqli_query($koneksi, "SELECT * FROM kategori
                    WHERE id_kategori='$idkategori'");
$kategori= mysqli_fetch_array($query); 
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      	Edit
        Data
        Kategori
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Kategori</li>
      </ol>
    </section>

 <!-- Main content -->
    <section class="content">
    	  <div class="row">
<div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="proses_edit_kategori.php">
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" readonly="readonly" class="form-control" id="inputEmail3" name="idkategori" value="<?php echo $idkategori; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="kategori" value="<?php echo $kategori['nama_kategori']; ?>">
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
