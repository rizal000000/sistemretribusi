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
    <li><a href="index.php?content=chart">Chart</a></li>
    <li><a href="index.php?content=chart_perbulan">Chart Penerimaan PAD Perbulan</a></li>
    <li class="active">Bulan <?php echo ucfirst($main->change_date($_POST['bulan'])); ?></li>
</ul>


<script type="text/javascript" src="../../js/jquery-1.4.js"></script>
<script type="text/javascript" src="../../js/jquery.fusioncharts.js"></script>


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
<h4 align="center">CHART JUMLAH PENDAPATAN RETRIBUSI PASAR BULAN <?php echo strtoupper($main->change_date($_POST['bulan'])); ?></h4>
<h4 align="center">DINAS PASAR KOTA PEKANBARU </h4> 
<h4 align="center">TAHUN ANGGARAN <?php echo $_POST['tahun']; ?></h4>
<hr/>
<center>
<table id="diagram" border="1" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%">
  <tr>
    <td valign="center" align="center"><b>PASAR</b></td>
    <td valign="center" align="center"><b>TOTAL PENDAPATAN</b></td>
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

  if ($_POST['bulan']<10){
    $bulan="0".$_POST['bulan'];
  } else {
    $bulan=$_POST['bulan'];
  }
  $tahundanbulan=$_POST['tahun']."-".$bulan;

?>
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

      $uptd_pasar=($ret_pasar_kakilima*$total_kakilima['total'])+($ret_pasar_kios*$total_kios['total'])+($ret_pasar_los*$total_los['total']);
      $ar_uptd_pasar[]=$uptd_pasar;

      $semuanya=$uptd_keb+$uptd_pasar;

      echo "
          <tr align='center'>
            <td>".strtoupper($d_pasar['nama'])."</td>
            <td>".$semuanya."</td>
          </tr>
      ";
    }
  ?>


</table>



</center>
<br/>






</div>


<br/>
<br/>
<br/>
        
<div style="margin-left:10px">
  <a href="index.php?content=chart_perbulan"><button class="btn btn-success">Kembali</button></a>
</div>
<br/>

<script type="text/javascript">
      $('#diagram').convertToFusionCharts({
        swfPath:"../../js/typecharts/",
        type:"MSColumn3D",
        data:"#diagram",
        dataFormat:"HTMLTable",
        width:"600"
      });

    </script>
