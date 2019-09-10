<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";
include "lib/configweb.php";
$sql = mysqli_query($koneksi, "SELECT id_transaksi from transaksi ORDER BY id_transaksi DESC LIMIT 1");
$id = mysqli_fetch_array($sql); 
$idtr=$id['id_transaksi'];
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
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
              <h3 class="box-title">Tambah Transaksi Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="proses_tambah_detail.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Transaksi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly="readonly" name="kodetransaksi" value="<?php echo $id['id_transaksi'];?>">
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
                <button type="submit" class="btn btn-success pull-right">Tambah Data Transaksi</button>
                <input type="button" class="btn btn-warning" onclick="location='data_transaksi.php?menu=data_transaksi'" value="kembali">
              </div>
              </form>
              </div>
                <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Buku yang dipinjam</h3>
                <div class="box-body">
              <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                <th style="width: 40px;">Kode Detail</th>
                  <th style="width: 280px;">Judul Buku</th>
                  <th style="width: 30px;">Aksi</th>
                </tr>
                </thead>
               <tbody>
               <?php
              $sql = mysqli_query($koneksi, "SELECT id_detail_transaksi, judul_buku
              FROM detail_transaksi INNER JOIN buku USING (id_buku)  where id_transaksi=$idtr;");
              while ($data = mysqli_fetch_array($sql))
              {
              ?>
                <td><?php echo $data['id_detail_transaksi'];?></td>
                <td><?php echo $data['judul_buku'];?></td>
                <td>
                <a href="<?php echo $web_url; ?>proses_hapus_detail.php?id_detail_transaksi=<?php echo $data['id_detail_transaksi'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">
                <button class="btn btn-danger">Hapus</button></a></td>

                </tr>
                </tr>
                <?php } ?>
              </tbody>
              </table>
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
