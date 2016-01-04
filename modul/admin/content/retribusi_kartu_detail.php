<?php
// mendapatkan id pedagang
$set_id=mysql_fetch_assoc(mysql_query("SELECT * FROM pedagang WHERE nama LIKE '%$_POST[negara]%'"));
$id_pedagang=$set_id['id'];

$pembayaran=$crud->ReadAllClausa('pembayaran','id_pedagang',$id_pedagang);
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
    <li><a href="index.php?content=retribusi">Retribusi</a></li>
    <li><a href="index.php?content=retribusi_kartu">Kartu Kendali Retribusi</a></li>
    <li class="active"><?php echo ucfirst($pedagang['nama']); ?></li>
</ul>

 <a class="no-print" href="javascript:printDiv('area-1');"> <img src="../../images/print.ico" height="3%" width="3%"></img> Klik Disini Untuk Mencetak Kartu Kendali</a>
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

<?php
$jenis=$pembayaran['jenis_dagangan'];

switch ($jenis) {
  case 'los': $jj="Los"; break;
  case 'kios': $jj="Kios"; break;
  case 'kakilima': $jj="Kaki Lima"; break;
}

if ($jenis=="los" OR $jenis=="kios"){
  $ret_keb=30*$ret_keb;
  $total=$ret_pasar+$ret_keb;
?>
<!-- dimulai kartu los dan kios -->
<h4 align="center">KARTU KENDALI PEMBAYARAN RETRIBUSI</h4>
<h4 align="center">PASAR <?php  echo strtoupper($pasar['nama']); ?> TAHUN ANGGARAN <?php echo $_POST['tahun']; ?></h4>
<hr/>
<center>
<table align="center" width="100%">
  <tr>
    <td width="20%">Nama Pedagang</td><td width="2%">:</td>
    <td><?php echo ucfirst($pedagang['nama']);?></td>
  </tr>
  <tr>
    <td width="20%">Nomor <?php echo ucfirst($jj); ?></td><td width="2%">:</td>
    <td><?php echo ucfirst($hak['no']); ?></td>
  </tr>
</table>
<font size="1,5px">
<table id="example" border="1" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%">
  <tr>
    <td rowspan="2" valign="center" align="center"><b>BULAN</b></td>
    <td colspan="2" valign="center" align="center"><b>TARIF RETRIBUSI</b></td>
    <td rowspan="2" valign="center" align="center"><b>JUMLAH</b></td>
    <td rowspan="2" valign="center" align="center"><b>TANGGAL PEMBAYARAN</b></td>
    <td rowspan="2" valign="center" align="center"><b>PARAF PETUGAS</b></td>
    <td rowspan="2" valign="center" align="center"><b>KET</b></td>
  </tr>
  <tr>
    <td colspan="1" valign="center" align="center"><b>RETRIBUSI PASAR</b></td>
    <td colspan="1" valign="center" align="center"><b>RETRIBUSI KEB</b></td>
  </tr>
<!-- isi -->
  <tr align="center">
    <td>JANUARI <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01%'"));
        $bayar_tanggal1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01%'"));
        if($cek_tanggal1==0){
          echo "-";
          $warna1="red";
          $gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        } else {
          
echo $main->view_tgl($bayar_tanggal1['pembayaran_ke']);

          $warna1="green";
          $gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
        }
      ?>
    </td>
    <td bgcolor="<?php echo $warna1; ?>"><?php echo $gambar1; ?></td>
    <td><?php 
      if ($bayar_tanggal1['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal1['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>FEBRUARI <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02%'"));
        $bayar_tanggal2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02%'"));
        if($cek_tanggal2==0){
          echo "-";
          $warna2="red";
          $gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";

        } else {
echo $main->view_tgl($bayar_tanggal2['pembayaran_ke']);
          $warna2="green";
          $gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";

        }
      ?>
    </td>
    <td bgcolor="<?php echo $warna2; ?>"><?php echo $gambar2; ?></td>
    <td><?php 
      if ($bayar_tanggal2['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal2['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>MARET <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03%'"));
        $bayar_tanggal3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03%'"));
        if($cek_tanggal3==0){
          echo "-";
          $warna3="red";
          $gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        } else {
echo $main->view_tgl($bayar_tanggal3['pembayaran_ke']);
          $warna3="green";
          $gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
      ?>
    </td>
    <td bgcolor="<?php echo $warna3; ?>"><?php echo $gambar3; ?></td>
    <td><?php 
      if ($bayar_tanggal3['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal3['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>APRIL <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04%'"));
        $bayar_tanggal4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04%'"));
        if($cek_tanggal4==0){
          echo "-";
          $warna4="red";
          $gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
    } else {
echo $main->view_tgl($bayar_tanggal4['pembayaran_ke']);
          $warna4="green";
          $gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
      ?>
    </td>
    <td bgcolor="<?php echo $warna4; ?>"><?php echo $gambar4; ?></td>
    <td><?php 
      if ($bayar_tanggal4['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal4['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>MEI <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05%'"));
        $bayar_tanggal5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05%'"));
        if($cek_tanggal5==0){
          echo "-";
          $warna5="red";
            $gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
      } else {
echo $main->view_tgl($bayar_tanggal5['pembayaran_ke']);
          $warna5="green";
                $gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
  }
      ?>
    </td>
    <td bgcolor="<?php echo $warna5; ?>"><?php echo $gambar5; ?></td>
    <td><?php 
      if ($bayar_tanggal5['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal5['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>JUNI <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06%'"));
        $bayar_tanggal6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06%'"));
        if($cek_tanggal6==0){
          echo "-";
          $warna6="red";
          $gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        } else {
echo $main->view_tgl($bayar_tanggal6['pembayaran_ke']);
          $warna6="green";
          $gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
        }
      ?>
    </td>
    <td bgcolor="<?php echo $warna6; ?>"><?php echo $gambar6; ?></td>
    <td><?php 
      if ($bayar_tanggal6['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal6['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>,JULI <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07%'"));
        $bayar_tanggal7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07%'"));
        if($cek_tanggal7==0){
          echo "-";
          $warna7="red";
          $gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        } else {
echo $main->view_tgl($bayar_tanggal7['pembayaran_ke']);
          $warna7="green";
          $gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        }
      ?>
    </td>
    <td bgcolor="<?php echo $warna7; ?>"><?php echo $gambar7; ?></td>
    <td><?php 
      if ($bayar_tanggal7['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal7['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>AGUSTUS <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08%'"));
        $bayar_tanggal8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08%'"));
        if($cek_tanggal8==0){
          echo "-";
          $warna8="red";
          $gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        } else {
echo $main->view_tgl($bayar_tanggal8['pembayaran_ke']);
          $warna8="green";
          $gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
        }
      ?>
    </td>
    <td bgcolor="<?php echo $warna8; ?>"><?php echo $gambar8; ?></td>
    <td><?php 
      if ($bayar_tanggal8['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal8['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>SEPTEMBER <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09%'"));
        $bayar_tanggal9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09%'"));
        if($cek_tanggal9==0){
          echo "-";
          $warna9="red";
          $gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        } else {
echo $main->view_tgl($bayar_tanggal9['pembayaran_ke']);
          $warna9="green";
          $gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
        }
      ?>
    </td>
    <td bgcolor="<?php echo $warna9; ?>"><?php echo $gambar9; ?></td>
    <td><?php 
      if ($bayar_tanggal9['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal9['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>OKTOBER <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10%'"));
        $bayar_tanggal10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10%'"));
        if($cek_tanggal10==0){
          echo "-";
          $warna10="red";
          $gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        } else {
echo $main->view_tgl($bayar_tanggal10['pembayaran_ke']);
          $warna10="green";
          $gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
        }
      ?>
    </td>
    <td bgcolor="<?php echo $warna10; ?>"><?php echo $gambar10; ?></td>
    <td><?php 
      if ($bayar_tanggal10['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal10['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>NOVEMBER <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11%'"));
        $bayar_tanggal11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11%'"));
        if($cek_tanggal11==0){
          echo "-";
          $warna11="red";
          $gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        } else {
echo $main->view_tgl($bayar_tanggal11['pembayaran_ke']);
          $warna11="green";
          $gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
        }
      ?>
    </td>
    <td bgcolor="<?php echo $warna11; ?>"><?php echo $gambar11; ?></td>
    <td><?php 
      if ($bayar_tanggal11['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal11['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>
  <tr align="center">
    <td>DESEMBER <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
    <td>
      <?php
        $cek_tanggal12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12%'"));
        $bayar_tanggal12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12%'"));
        if($cek_tanggal12==0){
          echo "-";
          $warna12="red";
          $gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>";
        } else {
echo $main->view_tgl($bayar_tanggal12['pembayaran_ke']);
          $warna12="green";
          $gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
        }
      ?>
    </td>
    <td bgcolor="<?php echo $warna12; ?>"><?php echo $gambar12; ?></td>
    <td><?php 
      if ($bayar_tanggal12['keterangan']==""){
        echo "-";
      } else {
        echo substr($bayar_tanggal12['keterangan'], 0,20)." ...";
      }
    ?></td>
  </tr>


</table>



</center>
<br/>


<table>
  <tr>
    <td width="60%">
      Catatan : 
      <ul>
      <li><b>- Kartu ini agar dijaga dan dirawat</b></li>
      <li><b>- Apabila Kartu ini hilang segera lapor ke UPTD</b></li>
      <li><b>- Penetapan Tarif Retribusi dapat berubah-ubah sewaktu - waktu berdasarkan Peraturan Daerah Kota Pekanbaru</b></li>
      </ul>
      <h5><?php echo $tgl_hari_ini; ?></h5> 
      <img src="../../images/img_merah.png" height="10px" width="50px"></img><small><b>&nbsp;&nbsp;Belum Membayar</b></small><br/> 
      <img src="../../images/img_hijau.png" height="10px" width="50px"></img><small><b>&nbsp;&nbsp;Telah Membayar</b></small> 
    </td>
    <td>
        Pekanbaru, <?php echo $tgl_hari_ini; ?>
        <br/>
        Mengetahui
        <br/>
        KEPALA UPTD PASAR
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <?php $pimpinan=$crud->ReadAllClausa('user','level','pimpinan');;?>
        (<?php echo strtoupper($pimpinan['nama']);?>)
        <br/>
        NIP.19670705 199703 1 005 
    </td>
  </tr>
</table>




<?php
} else {
?>
<!-- dimulai kartu kaki lima -->
<h4 align="center">KARTU KENDALI PEMBAYARAN RETRIBUSI</h4>
<h4 align="center">PASAR <?php  echo strtoupper($pasar['nama']); ?> TAHUN ANGGARAN <?php echo $_POST['tahun']; ?></h4>
<hr/>
<h6 align="center"></h6>
<center>
<table align="center" width="100%">
  <tr>
    <td width="20%">Nama Pedagang</td><td width="2%">:</td>
    <td><?php echo ucfirst($pedagang['nama']);?></td>
  </tr>
  <tr>
    <td width="20%">Nomor <?php echo ucfirst($jj); ?></td><td width="2%">:</td>
    <td><?php echo ucfirst($hak['no']); ?></td>
  </tr>
</table>
<font size="1,5px">
<table style="margin-left:0;" border="1" id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%">
  <tr>
    <td rowspan="2" valign="center" align="center"><b>BULAN</b></td>
    <td colspan="2" valign="center" align="center"><b>TARIF RETRIBUSI</b></td>
    <td rowspan="2" valign="center" align="center"><b>JUMLAH PERHARI</b></td>
    <td colspan="31" valign="center" align="center"><b>TANGGAL PEMBAYARAN</b></td>
    <td rowspan="2" valign="center" align="center"><b>KET</b></td>
  </tr>
  <tr>
    <td colspan="1" valign="center" align="center"><b>RET. PASAR</b></td>
    <td colspan="1" valign="center" align="center"><b>RET. KEB</b></td>
    <td colspan="1" valign="center" align="center"><b>1</b></td>
    <td colspan="1" valign="center" align="center"><b>2</b></td>
    <td colspan="1" valign="center" align="center"><b>3</b></td>
    <td colspan="1" valign="center" align="center"><b>4</b></td>
    <td colspan="1" valign="center" align="center"><b>5</b></td>
    <td colspan="1" valign="center" align="center"><b>6</b></td>
    <td colspan="1" valign="center" align="center"><b>7</b></td>
    <td colspan="1" valign="center" align="center"><b>8</b></td>
    <td colspan="1" valign="center" align="center"><b>9</b></td>
    <td colspan="1" valign="center" align="center"><b>10</b></td>
    <td colspan="1" valign="center" align="center"><b>11</b></td>
    <td colspan="1" valign="center" align="center"><b>12</b></td>
    <td colspan="1" valign="center" align="center"><b>13</b></td>
    <td colspan="1" valign="center" align="center"><b>14</b></td>
    <td colspan="1" valign="center" align="center"><b>15</b></td>
    <td colspan="1" valign="center" align="center"><b>16</b></td>
    <td colspan="1" valign="center" align="center"><b>17</b></td>
    <td colspan="1" valign="center" align="center"><b>18</b></td>
    <td colspan="1" valign="center" align="center"><b>19</b></td>
    <td colspan="1" valign="center" align="center"><b>20</b></td>
    <td colspan="1" valign="center" align="center"><b>21</b></td>
    <td colspan="1" valign="center" align="center"><b>22</b></td>
    <td colspan="1" valign="center" align="center"><b>23</b></td>
    <td colspan="1" valign="center" align="center"><b>24</b></td>
    <td colspan="1" valign="center" align="center"><b>25</b></td>
    <td colspan="1" valign="center" align="center"><b>26</b></td>
    <td colspan="1" valign="center" align="center"><b>27</b></td>
    <td colspan="1" valign="center" align="center"><b>28</b></td>
    <td colspan="1" valign="center" align="center"><b>29</b></td>
    <td colspan="1" valign="center" align="center"><b>30</b></td>
    <td colspan="1" valign="center" align="center"><b>31</b></td>
  </tr>
<!-- isi -->
<!-- Januari -->
<?php include "content/januari.php"; ?>
<?php include "content/februari.php"; ?>
<?php include "content/maret.php"; ?>
<?php include "content/april.php"; ?>
<?php include "content/mei.php"; ?>
<?php include "content/juni.php"; ?>
<?php include "content/juli.php"; ?>
<?php include "content/agustus.php"; ?>
<?php include "content/september.php"; ?>
<?php include "content/oktober.php"; ?>
<?php include "content/november.php"; ?>
<?php include "content/desember.php"; ?>

</table>



</center>
<br/>
<br/>
<br/>


<table>
  <tr>
    <td width="80%">
      Catatan : 
      <ul>
      <li><b>- Kartu ini agar dijaga dan dirawat</b></li>
      <li><b>- Apabila Kartu ini hilang segera lapor ke UPTD</b></li>
      <li><b>- Penetapan Tarif Retribusi dapat berubah-ubah sewaktu - waktu berdasarkan Peraturan Daerah Kota Pekanbaru</b></li>
      </ul>
      <h5><?php echo $tgl_hari_ini; ?></h5> 
      <img src="../../images/img_merah.png" height="10px" width="50px"></img><small><b>&nbsp;&nbsp;Belum Membayar</b></small><br/> 
      <img src="../../images/img_hijau.png" height="10px" width="50px"></img><small><b>&nbsp;&nbsp;Telah Membayar</b></small> 
    </td>
    <td>
        Pekanbaru, <?php echo $tgl_hari_ini; ?>
        <br/>
        Mengetahui
        <br/>
        KEPALA UPTD PASAR
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <?php $pimpinan=$crud->ReadAllClausa('user','level','pimpinan');;?>
        (<?php echo strtoupper($pimpinan['nama']);?>)
        <br/>
        NIP.19670705 199703 1 005 
    </td>
  </tr>
</table>



<?php
}
?>


</div>


<br/>
<br/>
<br/>
        
<div style="margin-left:10px">
  <a href="index.php?content=retribusi_kartu"><button class="btn btn-success">Kembali</button></a>
</div>
<br/>
