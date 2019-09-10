<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";
include "lib/configweb.php";
include "class.apriori.php";

$tglawal=$_GET['tglawal'];
$tglakhir=$_GET['tglakhir'];
$minsup=$_GET['minsup'];
$minconf=$_GET['minconf'];

$file = 'file/data.txt';
$total_transaksi = count(file($file));
$sup = (($minsup/100)*$total_transaksi);
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hasil Proses Apriori
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
           <h5 align="center">Tanggal Transaksi Yang Di Analisis : <?php echo date("d F Y", strtotime($tglawal));?> - <?php echo date("d F Y", strtotime($tglakhir));?></h5>
            <h5 align="center">Minimum Support    : <?php echo $minsup;?> %</h5>
            <h5 align="center">Minimum Confidence : <?php echo $minconf;?> %</h5>
            <h5 align="center">Total Transaksi    : <?php echo $total_transaksi;?></h5>
           <h3 align="center">Aturan Asosiasi Yang Terbentuk</h3>
</div>
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <?php 
            $Apriori = new apriori();
            $Apriori->setMaxScan(20);       //Scan 2, 3, ...
            $Apriori->setMinSup(round($sup));         //Minimum support 1, 2, 3, ...
            $Apriori->setMinConf($minconf);       //Minimum confidence - Percent 1, 2, ..., 100
            $Apriori->setDelimiter(',');    //Delimiter 
            $Apriori->process($file);
            $Apriori->printAssociationRules();
            ?>
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
