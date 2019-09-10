<?php
include "lib/koneksi.php";
$tglawal = $_POST['tgl_awal'];
$tglakhir = $_POST['tgl_akhir'];
$minsup = $_POST['minsup'];
$minconf = $_POST['minconf'];

    $fh = fopen('file/data.txt', 'w');

    /* insert field values into data.txt */

    $result = mysqli_query($koneksi,"SELECT
                GROUP_CONCAT(b.judul_buku) as barang
            FROM
                detail_transaksi pi
                    JOIN transaksi p
                    ON p.id_transaksi = pi.id_transaksi
                    JOIN buku b
                    ON b.id_buku = pi.id_buku
            WHERE
                p.tanggal
                    BETWEEN '$tglawal' AND '$tglakhir'
            GROUP BY
                p.id_transaksi");   
    while ($row = mysqli_fetch_array($result)) {          
        $num = mysqli_num_fields($result) ;    
        $last = $num - 1;
        for($i = 0; $i < $num; $i++) {            
            fwrite($fh, $row[$i]);                       
            if ($i != $last) {
                fwrite($fh, ",");
            }
        }                                                                 
        fwrite($fh, "\r\n");
    }
    fclose($fh);
/*
echo $tglawal;
echo $tglakhir;
echo $minsup;
echo $minconf;
*/
echo "<script> 
    alert('Proses Selesai'); 
    window.location = 'hasil_apriori.php?menu=proses_apriori&tglawal=$tglawal&tglakhir=$tglakhir&minsup=$minsup&minconf=$minconf';
</script>";

?>