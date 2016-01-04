<?php $d=$crud->ReadAllClausa('pasar','id',$_GET['id']); ?>
<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=retribusi">Retribusi</a></li>
    <li class="active">Penetapan Tarif Retribusi</li>
</ul>

<?php
$check=mysql_num_rows(mysql_query("SELECT * FROM p_tarif"));
$d=mysql_fetch_assoc(mysql_query("SELECT * FROM p_tarif"));
if ($check==0){
?>

<!-- input -->
 <form method="POST" action="index.php?aksi=iretribusi1" ENCTYPE="multipart/form-data">
<?php
} else {
?>
<!-- edit -->
 <form method="POST" action="index.php?aksi=eretribusi1" ENCTYPE="multipart/form-data">
<?php
}
?>
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
          <tr>
            <td width="20%">Tarif Los</td><td width="2%">:</td>
            <td>Rp. <input type="text" class="input-type" name="t_los"  required="required" value="<?php echo $d['t_los']; ?>"> / bulan</td>
          </tr>
          <tr>
            <td width="20%">Tarif Kios</td><td width="2%">:</td>
            <td>Rp. <input type="text" class="input-type" name="t_kios"  required="required" value="<?php echo $d['t_kios']; ?>"> / bulan</td>
          </tr>
          <tr>
            <td width="20%">Tarif Kaki Lima</td><td width="2%">:</td>
            <td>Rp. <input type="text" class="input-type" name="t_kakilima"  required="required" value="<?php echo $d['t_kakilima']; ?>"> / hari</td>
          </tr>
          <tr>
            <td width="20%">Tarif Kebersihan Los</td><td width="2%">:</td>
            <td>Rp. <input type="text" class="input-type" name="t_kebersihan1"  required="required" value="<?php echo $d['t_kebersihan_los']; ?>"> / hari</td>
          </tr>
          <tr>
            <td width="20%">Tarif Kebersihan Kios</td><td width="2%">:</td>
            <td>Rp. <input type="text" class="input-type" name="t_kebersihan2"  required="required" value="<?php echo $d['t_kebersihan_kios']; ?>"> / hari</td>
          </tr>
          <tr>
            <td width="20%">Tarif Kebersihan Kaki Lima</td><td width="2%">:</td>
            <td>Rp. <input type="text" class="input-type" name="t_kebersihan3"  required="required" value="<?php echo $d['t_kebersihan_kakilima']; ?>"> / hari</td>
          </tr>
    		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Simpan Perubahan ?');\">Simpan"; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=retribusi"><button class="btn btn-success">Kembali</button></a>
</div>
<br/>