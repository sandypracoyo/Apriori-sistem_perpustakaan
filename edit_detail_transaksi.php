<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";
include "lib/configweb.php";
$kode = $_GET['id_detail_transaksi'];
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit
        Data
        Transaksi
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Transaksi</li>
      </ol>
    </section>

 <!-- Main content -->
    <section class="content">
    	  <div class="row">
<div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Detail Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="proses_edit_transaksi.php">
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Transaksi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly="readonly" id="inputEmail3" name="detail" value="<?php echo $kode;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="judul" data-placeholder="Pilih Judul Buku"
                        style="width: 100%;">
                     <?php
              $query = mysqli_query($koneksi, "SELECT * FROM buku");
              while ($data = mysqli_fetch_array($query))
              {
              ?>
              <option value="<?php echo $data['id_buku'];?>"><?php echo $data['judul_buku'];?></option>
              <?php } ?>
                </select>
                  </div>

                </div>
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Simpan Data Transaksi</button>
                <input type="button" class="btn btn-warning" onclick="history.go(-1);" value="kembali">
              </div>
              </form>
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
