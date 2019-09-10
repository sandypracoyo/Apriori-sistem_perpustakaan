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
        Penulis
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Penulis</li>
      </ol>
    </section>

 <!-- Main content -->
    <section class="content">
    	  <div class="row">
<div class="col-md-12">
           <div class="box">
           <div class="box-header">
                      <div class="form-group">
                 <form method="post" action="tambah_penulis.php">  
                <div class="form-group">
                    <button name="tambah" type="submit"  class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah Data Penulis Baru
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
                  <th style="width: 340px;">Nama Penulis</th>
                  <th style="width: 90px;">Aksi</th>
                </tr>
                </thead>
               <tbody>
                <?php
                $noUrut = 0;
              $sql = mysqli_query($koneksi,"SELECT * FROM penulis");
              while ($data = mysqli_fetch_array($sql))
              {
              $noUrut++; // increment untuk menampilkan nomor urut
              echo "<td>".$noUrut."</td>"
              ?>
                <td><?php echo $data['nama_penulis'];?></td>
                <td><a href="<?php echo $web_url; ?>edit_penulis.php?id_penulis=<?php echo $data['id_penulis'];?>">
                <button class="btn btn-warning">Edit Data</button>
                <a href="<?php echo $web_url; ?>proses_hapus_penulis.php?id_penulis=<?php echo $data['id_penulis'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">
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
