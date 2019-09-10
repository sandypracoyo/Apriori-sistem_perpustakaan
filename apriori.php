<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";

$query = mysqli_query($koneksi,"SELECT tanggal from transaksi");
$tgl = mysqli_fetch_array($query); 

if(file_exists("file/data.txt")){
  unlink("file/data.txt");
}

?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Proses Apriori
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Proses Apriori</li>
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
        <div class="row">
<!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pilih Transaksi Yang Akan Dianalisa Berdasarkan Tanggal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="proses_dataset.php">
              <div class="box-body">
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal awal</label>
                  <div class="col-sm-10">
                   <select name ="tgl_awal"class="form-control select2" style="width: 100%;">
                <?php
              $query = mysqli_query($koneksi, "SELECT tanggal FROM transaksi GROUP BY tanggal");
              while ($data = mysqli_fetch_array($query))
              {
              ?>
              <option value="<?php echo $data['tanggal'];?>"><?php echo $data['tanggal'];?></option>
              <?php } ?>
                </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal akhir</label>
                  <div class="col-sm-10">
                   <select name ="tgl_akhir" class="form-control select2" style="width: 100%;">
                  <?php
              $query = mysqli_query($koneksi, "SELECT tanggal FROM transaksi GROUP BY tanggal");
              while ($data = mysqli_fetch_array($query))
              {
              ?>
              <option value="<?php echo $data['tanggal'];?>"><?php echo $data['tanggal'];?></option>
              <?php } ?>
                </select>
                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Minimum Support</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputEmail3" name="minsup">
                </div>
              </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Minimum Confidence</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputEmail3" name="minconf">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <input name="submit" type="submit" value="Proses"  class="btn btn-info pull-right">
              </div>
              <!-- /.box-footer -->
            </form>
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
<!--SELECT
                COUNT(pi.id_buku) as jumlah,
                pi.id_buku,
                b.judul_buku,
                (
                    SELECT COUNT(*)
                        FROM
                            transaksi p
                        WHERE
                           tanggal BETWEEN '2018-12-1' AND '2018-12-21'
                ) as total
                FROM
                    detail_transaksi pi
                        JOIN transaksi p
                        ON p.id_transaksi = pi.id_transaksi
                        JOIN buku b
                        ON b.id_buku = pi.id_buku
                WHERE
                    p.tanggal
                        BETWEEN '2018-12-1' AND '2018-12-21'
                GROUP BY pi.id_buku, b.judul_buku



                SELECT
                GROUP_CONCAT(b.judul_buku) as barang
            FROM
                detail_transaksi pi
                    JOIN transaksi p
                    ON p.id_transaksi = pi.id_transaksi
                    JOIN buku b
                    ON b.id_buku = pi.id_buku
            WHERE
                p.tanggal
                    BETWEEN '2018-12-01' AND '2018-12-21'
            GROUP BY
                p.id_transaksi

                $belian = array();
        foreach($data_belian as $item){
            $belian_new = $item->barang;
            array_push($belian, $belian_new);
        }
        return $belian;
