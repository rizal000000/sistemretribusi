<?php $d=$crud->ReadAllClausa('pedagang','id',$_GET['id']); 
                  $tgl=substr($d['tgl_lhr'],8,2);
                  $bulan=substr($d['tgl_lhr'],5,2);
                  $bln=$main->change_date($bulan);
                  $thn=substr($d['tgl_lhr'],0,4);
                  $hari_ini=$tgl." ".$bln." ".$thn;


?>

<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=pedagang">Pedagang</a></li>
    <li class="active"><?php echo ucfirst($d['nama']); ?></li>
</ul>


<!-- content -->
<h3><?php echo ucfirst($d['nama']); ?></h3>
  
        <table class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%">
        <thead>
          <tr>
            <td rowspan="6" width="20%"><a href="../../media/pedagang/<?php echo ucfirst($d['file']); ?>" target="_blank"><img src="../../media/pedagang/<?php echo ucfirst($d['file']); ?>" width="400px" height="230px"></img></a></td>
            <td width="20%"><b>Nama</b></td>
            <td><i><?php echo ucfirst($d['nama']); ?></i></td>
          </tr>  
          <tr>
            <td width="20%"><b>Alamat</b></td>
            <td><p align="justify"><i><?php echo ucfirst($d['alamat']); ?></i></p></td>
          </tr>  
          <tr>
            <td width="20%"><b>Tempat / Tanggal Lahir</b></td>
            <td><i><?php echo $hari_ini;  ?></i></td>
          </tr>  
          <tr>
            <td width="20%"><b>Jenis Kelamin</b></td>
            <td><i><?php echo ucfirst($main->jk($d['jk'])); ?></i></td>
          </tr>  
          <tr>
            <td width="20%"><b>Agama</b></td>
            <td><i><?php echo ucfirst($main->agama($d['agama'])); ?></i></td>
          </tr>  
          <tr>
            <td width="20%"><b>Nomor HP</b></td>
            <td><i>+62<?php echo ucfirst($d['no_hp']); ?></i></td>
          </tr>  
        </thead>
      </table>


              
<div style="margin-left:10px">
  <a href="index.php?content=pedagang"><button class="btn btn-success">Kembali</button></a>
</div>


<br/>