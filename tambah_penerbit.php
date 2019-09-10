<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";

?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        Penerbit
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Penerbit</li>
      </ol>
    </section>

 <!-- Main content -->
    <section class="content">
    	  <div class="row">
<div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Penerbit Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="proses_tambah_penerbit.php">
              <div class="box-body">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Penerbit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="penerbit">
                  </div>
                </div>
            	<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat Penerbit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="alamat">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Tambah Data Penerbit</button>
                <input type="button" class="btn btn-warning" onclick="location='data_penerbit.php?menu=data_penerbit'" value="kembali">
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
