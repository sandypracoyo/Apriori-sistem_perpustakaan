<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";
$idpenerbit=$_GET['id_penerbit'];
$query = mysqli_query($koneksi, "SELECT * FROM penerbit
                    WHERE id_penerbit='$idpenerbit'");
$penerbit= mysqli_fetch_array($query); 
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      	Edit
        Data
        Penerbit
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Penerbit</li>
      </ol>
    </section>

 <!-- Main content -->
    <section class="content">
    	  <div class="row">
<div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Penerbit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="proses_edit_penerbit.php">
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Penerbit</label>
                  <div class="col-sm-10">
                    <input type="text" readonly="readonly" class="form-control" id="inputEmail3" name="idpenerbit" value="<?php echo $idpenerbit; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Penerbit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="penerbit" value="<?php echo $penerbit['nama_penerbit']; ?>">
                  </div>
                </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat Penerbit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="alamat" value="<?php echo $penerbit['alamat']; ?>">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Simpan Data penerbit</button>
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
