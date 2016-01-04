<?php
$dataku=$crud->ReadAllClausa('p_hakpedagang','id',$_GET['id']);
switch ($dataku['jenis_dagangan']) {
  case 'los': $jenis1="selected"; break;
  case 'kios': $jenis2="selected"; break;
  case 'kakilima': $jenis3="selected"; break;
}

?>
<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=retribusi">Retribusi</a></li>
    <li><a href="index.php?content=retribusi_hak">Penetapan Hak Pedagang</a></li>
    <li class="active">Edit Penetapan Hak Pedagang</li>
</ul>



 <form method="POST" action="index.php?aksi=eretribusi_hak" ENCTYPE="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <tr>
            <td width="20%">Nomor Penetapan</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="no"  required="required" value="<?php echo $dataku['no']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Pedagang</td><td width="2%">:</td>
            <td>
              <select name="id_pedagang">
                <option>-- Pilih Pedagang --</option>
              <?php
                $q=mysql_query("SELECT * FROM pedagang");
                while ($d=mysql_fetch_assoc($q)) {
                  if ($dataku['id_pedagang']==$d['id']){
                    echo "<option value='$d[id]' selected>".ucfirst($d['nama'])."</option>";
                  } else {
                    echo "<option value='$d[id]'>".ucfirst($d['nama'])."</option>";
                  }
                }
            ?>
          </select>
          </td>
          </tr>
          <tr>
            <td width="20%">Pasar</td><td width="2%">:</td>
            <td>
              <select name="id_pasar">
                <option>-- Pilih Pasar --</option>
              <?php
                $q=mysql_query("SELECT * FROM pasar");
                while ($d2=mysql_fetch_assoc($q)) {
                  if ($dataku['id_pasar']==$d2['id']){
                    echo "<option value='$d2[id]' selected>".ucfirst($d2['nama'])." (Los : ".ucfirst($d2['jumlah_los'])." - Kios : ".ucfirst($d2['jumlah_kios']).")</option>";
                  } else {
                    echo "<option value='$d2[id]'>".ucfirst($d2['nama'])." (Los : ".ucfirst($d2['jumlah_los'])." - Kios : ".ucfirst($d2['jumlah_kios']).")</option>";
                  }

                }
            ?>
          </select>            
            </td>
          </tr>
          <tr>
            <td width="20%">Jenis Dagangan</td><td width="2%">:</td>
            <td><select name="jenis" required="required">
              <option>-- Pilih Jenis Dagangan --</option>
              <option value="los" <?php echo $jenis1; ?> >Los</option>
              <option value="kios" <?php echo $jenis2; ?> >Kios</option>
              <option value="kakilima" <?php echo $jenis3; ?> >Kaki Lima</option>
            </select></td>
          </tr>
          <tr>
            <td width="20%">Tanggal Persetujuan</td><td width="2%">:</td>
            <td><input type="date" class="input-type" name="tgl_1"  required="required"  value="<?php echo $dataku['tgl_persetujuan']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Tanggal Berlaku</td><td width="2%">:</td>
            <td><input type="date" class="input-type" name="tgl_2"  required="required"  value="<?php echo $dataku['tgl_berlaku']; ?>"></td>
          </tr>
    		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Simpan Perubahan ?');\">Simpan"; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=retribusi_hak"><button class="btn btn-success">Kembali</button></a>
</div>
