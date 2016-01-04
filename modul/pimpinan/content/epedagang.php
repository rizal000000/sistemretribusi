<?php $d=$crud->ReadAllClausa('pedagang','id',$_GET['id']); 
switch ($d['jk']) {
  case 'lk': $jk1="checked"; break;
  case 'pr': $jk2="checked"; break;
}
switch ($d['agama']) {
  case 1 : $agama1="selected"; break;
  case 2 : $agama2="selected"; break;
  case 3 : $agama2="selected"; break;
  case 4 : $agama2="selected"; break;
  case 5 : $agama2="selected"; break;
  case 6 : $agama2="selected"; break;
}
?>
<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=pedagang">Pedagang</a></li>
    <li class="active">Edit Pedagang</li>
</ul>


 <form method="POST" action="index.php?aksi=epedagang" ENCTYPE="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  <input type="hidden" name="foto" value="<?php echo $d['file']; ?>">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <tr>
            <td width="20%">Nama</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="nama"  required="required" value="<?php echo $d['nama']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Alamat</td><td width="2%">:</td>
            <td><textarea cols="50" rows="5" class="input-type" name="alamat"  required="required"><?php echo $d['alamat']; ?></textarea></td>
          </tr>
          <tr>
            <td width="20%">Tempat Lahir</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="tmp_lhr"  required="required"  value="<?php echo $d['tmp_lhr']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Tanggal Lahir</td><td width="2%">:</td>
            <td><input type="date" class="input-type" name="tgl_lhr"  required="required"  value="<?php echo $d['tgl_lhr']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Jenis Kelamin</td><td width="2%">:</td>
            <td>
              <input type="radio" class="input-type" name="jk" value="lk" required="required" <?php echo $jk1; ?>> Laki- Laki 
              &nbsp;&nbsp;&nbsp;
              <input type="radio" class="input-type" name="jk" value="pr" required="required" <?php echo $jk2; ?>> Perempuan
            </td>
          </tr>
          <tr>
            <td width="20%">Agama</td><td width="2%">:</td>
            <td><select name="agama" required="required">
              <option>-- Pilih Agama --</option>
              <option value="1" <?php echo $agama1; ?>>Islam</option>
              <option value="2" <?php echo $agama2; ?>>Kristen Protestan</option>
              <option value="3" <?php echo $agama3; ?>>Kristen Katolik</option>
              <option value="4" <?php echo $agama4; ?>>Buddha</option>
              <option value="5" <?php echo $agama5; ?>>Hindu</option>
              <option value="6" <?php echo $agama6; ?>>Tionghoa</option>
            </select></td>
          </tr>
          <tr>
            <td width="20%">No. HP</td><td width="2%">:</td>
            <td><input type="number" class="input-type" name="nohp"  required="required" value="<?php echo $d['no_hp']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">File</td><td width="2%">:</td>
            <td>
              <img src="../../media/pedagang/<?php echo $d['file']; ?>" width="90px" height="90px"></img>
              <br/><br/>
              <input type="file" class="input-type" name="file"></td>
          </tr>
     		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Simpan Perubahan ?');\">Simpan"; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=pedagang"><button class="btn btn-success">Kembali</button></a>
</div>

<br/>