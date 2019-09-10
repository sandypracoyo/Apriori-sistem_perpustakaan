<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";

$data = mysqli_query($koneksi,"select * from transaksi order by id_transaksi DESC LIMIT 0,1");
$i= mysqli_fetch_array($data) ;
// ID OTOMATIS//***************************************************
$kodeawal=substr($i['id_transaksi'],3,4)+1;
if($kodeawal<10){
  $kode='111000'.$kodeawal;
}elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='11100'.$kodeawal;
}else{
  $kode='11100'.$kodeawal;
}

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
            <form class="form-horizontal" method="post" action="proses_tambah_transaksi.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Transaksi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly="readonly" id="inputEmail3" name="kodetransaksi" value="<?php echo $kode;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Pinjam</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div> 
                  <input type="text" class="form-control pull-right" id="datepicker" data-date-format="yyyy-mm-dd" name="tanggal">
                </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Tambah Data Transaksi</button>
                <input type="button" class="btn btn-warning" onclick="location='data_transaksi.php?menu=data_transaksi'" value="kembali">
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
