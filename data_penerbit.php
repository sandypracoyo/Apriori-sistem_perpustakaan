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
<div class="col-md-12">
           <div class="box">
           <div class="box-header">
                      <div class="form-group">
                 <form method="post" action="tambah_penerbit.php">  
                <div class="form-group">
                    <button name="tambah" type="submit"  class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah Data Penerbit Baru
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
                  <th style="width: 330px;">Nama Penerbit</th>
                  <th style="width: 230px;">Alamat</th>
                  <th style="width: 100px;">Aksi</th>
                </tr>
                </thead>
               <tbody>
                <?php
                $noUrut = 0;
              $sql = mysqli_query($koneksi,"SELECT * FROM Penerbit");
              while ($data = mysqli_fetch_array($sql))
              {
              $noUrut++; // increment untuk menampilkan nomor urut
              echo "<td>".$noUrut."</td>"
              ?>
                <td><?php echo $data['nama_penerbit'];?></td>
                <td><?php echo $data['alamat'];?></td>
                <td><a href="<?php echo $web_url; ?>edit_penerbit.php?id_penerbit=<?php echo $data['id_penerbit'];?>">
                <button class="btn btn-warning">Edit Data</button>
                <a href="<?php echo $web_url; ?>proses_hapus_penerbit.php?id_penerbit=<?php echo $data['id_penerbit'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">
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
