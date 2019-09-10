<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";
include "lib/configweb.php";
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
<div class="col-md-12">
           <div class="box">
           <div class="box-header">
                      <div class="form-group">
                 <form method="post" action="tambah_transaksi.php">  
                <div class="form-group">
                    <button name="tambah" type="submit"  class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah Data Transaksi Baru
                    </button>
                </div>
                </form>
                      </div>
            </form>
</div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   <th style="width: 10px;">No.</th>
                  <th style="width: 40px;">Kode Transaksi</th>
                  <th style="width: 40px;">Tanggal</th>
                  <th style="width: 390px;">Judul Buku</th>
                  <th style="width: 80px;">Aksi</th>
                </tr>
                </thead>
               <tbody>
                <?php
              $noUrut = 0;
              $sql = mysqli_query($koneksi, "SELECT 
              transaksi.id_transaksi, transaksi.tanggal, GROUP_CONCAT(buku.judul_buku SEPARATOR ', ') AS judul_buku
              FROM detail_transaksi
              JOIN transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi
              JOIN buku ON detail_transaksi.id_buku = buku.id_buku
              GROUP BY id_transaksi");
              while ($data = mysqli_fetch_array($sql))
              {
               $noUrut++; // increment untuk menampilkan nomor urut
              echo "<td>".$noUrut."</td>"
              ?>
                <td><?php echo $data['id_transaksi'];?></td>
                <td><?php echo $data['tanggal'];?></td>
                <td><?php echo $data['judul_buku'];?></td>
               <td><a href="<?php echo $web_url; ?>edit_transaksi.php?id_transaksi=<?php echo $data['id_transaksi'];?>">
                <button class="btn btn-warning">Edit Data</button>
                <a href="<?php echo $web_url; ?>proses_hapus_transaksi.php?id_transaksi=<?php echo $data['id_transaksi'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">
                <button class="btn btn-danger">Hapus</button></a></td>

                </tr>

                <?php } ?>


              </tbody>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>


          <!-- /.box -->
</div>

    	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php
include 'footer.php'
?>
