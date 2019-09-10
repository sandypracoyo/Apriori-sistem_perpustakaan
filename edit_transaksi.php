<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";
include "lib/configweb.php";

$idtrans=$_GET['id_transaksi'];
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
<div class="col-md-9">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->              <div class="box-body">
                <div class="form-group">
                </div>
               <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th style="width: 40px;">Kode Detail Transaksi</th>
                  <th style="width: 340px;">Judul Buku</th>
                  <th style="width: 80px;">Aksi</th>
                </tr>
                </thead>
               <tbody>
                <?php
              $sql = mysqli_query($koneksi, "SELECT id_detail_transaksi,judul_buku FROM detail_transaksi JOIN buku ON detail_transaksi.id_buku = buku.id_buku where id_transaksi=$idtrans");
              while ($data = mysqli_fetch_array($sql))
              {
              ?>
                <td><?php echo $data['id_detail_transaksi'];?></td>
                <td><?php echo $data['judul_buku'];?></td>
               <td><a href="<?php echo $web_url; ?>edit_detail_transaksi.php?id_detail_transaksi=<?php echo $data['id_detail_transaksi'];?>">
                <button class="btn btn-warning">Edit Data</button>
                </tr>
                <?php } ?>
              </tbody>
              </table>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="button" class="btn btn-warning" onclick="location='datatransaksi.php?menu=data_transaksi'" value="kembali">
              </div>
              <!-- /.box-footer -->
          </div>

    	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php
include 'footer.php'
?>
