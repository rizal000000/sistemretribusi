<?php
$pembayaran=$crud->ReadAllClausa('pembayaran','id_pedagang',$_POST['id_pedagang']);
$pedagang=$crud->ReadAllClausa('pedagang','id',$pembayaran['id_pedagang']);
$hak=$crud->ReadAllClausa('p_hakpedagang','id_pedagang',$pedagang['id']);
$pasar=$crud->ReadAllClausa('pasar','id',$hak['id_pasar']);
$tahun=$_POST['tahun'];

$ret_pasar=$hak['total_retribusi_pasar'];
$ret_keb=$hak['total_retribusi_kebersihan'];

$total=$ret_pasar+$ret_keb;
// tanggal hari ini

    $thn=date('Y');
    $bulan=date('m');
      $bln=$main->change_date($bulan);
    $tgl=date('d');
    $tgl_hari_ini=$tgl." ".$bln." ".$thn;


?>
<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=retribusi">Laporan</a></li>
    <li><a href="index.php?content=laporan_pertahun">Laporan Penerimaan PAD Pertahun</a></li>
    <li class="active">Tahun <?php echo ucfirst($_POST['tahun']); ?></li>
</ul>

 <a class="no-print" href="javascript:printDiv('area-1');"> <img src="../../images/print.ico" height="3%" width="3%"></img> Klik Disini Untuk Mencetak Laporan</a>
<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
//<![CDATA[
function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
//]]>
</script>

<div id="area-1">

<!-- dimulai kartu los dan kios -->
<h4 align="center">DAFTAR REKAP REALISASI PENERIMAAN PAD</h4>
<h4 align="center">DINAS PASAR KOTA PEKANBARU </h4> 
<h4 align="center">TAHUN ANGGARAN <?php echo $_POST['tahun']; ?></h4>
<hr/>
<center>
<table id="example" border="1" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%">
  <tr>
    <td rowspan="2" valign="center" align="center"><b>URAIAN</b></td>
    <td colspan="2" valign="center" align="center"><b>JUMLAH REALISASI PENERIMAAN PERTAHUN</b></td>
  </tr>
  <tr>
    <td valign="center" align="center"><b><?php echo strtoupper($main->change_date($_POST['bulan']));?></b></td>
    <td valign="center" align="center"><b>TOTAL</b></td>
  </tr>
  <?php
    $jumlah_pasar=mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS total FROM pasar ORDER BY nama ASC"));
    $jumlah_pasar_total=$jumlah_pasar['total']+1;
  ?>
<!-- isi -->
<!-- tarif -->
<?php 
  $tarif=mysql_fetch_assoc(mysql_query("SELECT * FROM p_tarif"));
  $ret_keb_kakilima=$tarif['t_kebersihan_kakilima'];
  $ret_keb_kios=$tarif['t_kebersihan_kios']*30;
  $ret_keb_los=$tarif['t_kebersihan_los']*30;

  $ret_pasar_kakilima=$tarif['t_kakilima'];
  $ret_pasar_kios=$tarif['t_kios'];
  $ret_pasar_los=$tarif['t_kios'];


  $tahundanbulan=$_POST['tahun'];;

?>
<!-- retribusi kebersihan -->
  <tr align="center">
    <td><b>PELAYANAN KEBERSIHAN<b></td>
    <td></td>
    <td rowspan="<?php echo $jumlah_pasar_total; ?>"></td>
  </tr>
  <?php
    $sql_pasar=mysql_query("SELECT * FROM pasar ORDER BY nama ASC");
    while ($d_pasar=mysql_fetch_assoc($sql_pasar)) {
      // hitung penghasilan kakilima
      $total_kakilima=mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS total FROM pembayaran WHERE id_pasar='$d_pasar[id]' AND jenis_dagangan='kakilima' AND pembayaran_ke LIKE '%$tahundanbulan%'"));
      // hitung penghasilan kios
      $total_kios=mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS total FROM pembayaran WHERE id_pasar='$d_pasar[id]' AND jenis_dagangan='kios' AND pembayaran_ke LIKE '%$tahundanbulan%'"));
      // hitung penghasilan los
      $total_los=mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS total FROM pembayaran WHERE id_pasar='$d_pasar[id]' AND jenis_dagangan='los' AND pembayaran_ke LIKE '%$tahundanbulan%'"));
            
      $uptd_keb=($ret_keb_kakilima*$total_kakilima['total'])+($ret_keb_kios*$total_kios['total'])+($ret_keb_los*$total_los['total']);
      $ar_uptd_keb[]=$uptd_keb;

      echo "
          <tr align='center'>
            <td>UPTD PASAR ".strtoupper($d_pasar['nama'])."</td>
            <td>Rp. ".number_format($uptd_keb,0)."</td>
          </tr>
      ";
    }
  ?>
  <tr align="center">
    <td><b>RETRIBUSI PELAYANAN KEBERSIHAN</b></td>
    <td></td>
    <td><b>Rp. <?php        echo number_format(array_sum($ar_uptd_keb),0); ?></b></td>
  </tr>
<!-- retribusi kebersihan -->
  <tr align="center">
    <td>PELAYANAN PASAR</td>
    <td></td>
    <td rowspan="<?php echo $jumlah_pasar_total; ?>"></td>
  </tr>
  <?php
    $sql_pasar=mysql_query("SELECT * FROM pasar ORDER BY nama ASC");
    while ($d_pasar=mysql_fetch_assoc($sql_pasar)) {
      // hitung penghasilan kakilima
      $total_kakilima=mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS total FROM pembayaran WHERE id_pasar='$d_pasar[id]' AND jenis_dagangan='kakilima' AND pembayaran_ke LIKE '%$tahundanbulan%'"));
      // hitung penghasilan kios
      $total_kios=mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS total FROM pembayaran WHERE id_pasar='$d_pasar[id]' AND jenis_dagangan='kios' AND pembayaran_ke LIKE '%$tahundanbulan%'"));
      // hitung penghasilan los
      $total_los=mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS total FROM pembayaran WHERE id_pasar='$d_pasar[id]' AND jenis_dagangan='los' AND pembayaran_ke LIKE '%$tahundanbulan%'"));
            
      $uptd_pasar=($ret_pasar_kakilima*$total_kakilima['total'])+($ret_pasar_kios*$total_kios['total'])+($ret_pasar_los*$total_los['total']);
      $ar_uptd_pasar[]=$uptd_pasar;

      echo "
          <tr align='center'>
            <td>UPTD PASAR ".strtoupper($d_pasar['nama'])."</td>
            <td>Rp. ".number_format($uptd_pasar,0)."</td>
          </tr>
      ";
    }
  ?>
  <tr align="center">
    <td><b>RETRIBUSI PELAYANAN PASAR</b</td>
    <td></td>
    <td><b>Rp. <?php        echo number_format(array_sum($ar_uptd_pasar),0); ?></b></td>
  </tr>

  <tr align="center">
    <td><b>JUMLAH PENERIMAAN</b></td>
    <td colspan="2"><b>Rp. <?php       
    $datadata1=array_sum($ar_uptd_keb);
    $datadata2=array_sum($ar_uptd_pasar);
    $jumlah_datadata=$datadata1+$datadata2;
    echo number_format($jumlah_datadata,0);
     ?></b></td>
  </tr>


</table>



</center>
<br/>






</div>


<br/>
<br/>
<br/>
        
<div style="margin-left:10px">
  <a href="index.php?content=laporan_pertahun"><button class="btn btn-success">Kembali</button></a>
</div>
<br/>
