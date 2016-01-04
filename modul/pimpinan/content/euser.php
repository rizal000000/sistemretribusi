<?php $d=$crud->ReadAllClausa('user','id',$_GET['id']); 
switch ($d['level']) {
	case 'admin': $level1="selected"; break;
	case 'pimpinan': $level2="selected"; break;
}
switch ($d['jk']) {
	case 'lk': $jk1="checked"; break;
	case 'pr': $jk2="checked"; break;
}
?>
<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=user">User</a></li>
    <li class="active">Edit User</li>
</ul>


 <form method="POST" action="index.php?aksi=euser" ENCTYPE="multipart/form-data">
 	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <tr>
            <td width="20%">Username</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="user"  required="required" value="<?php echo $d['user']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Password</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="pass"  required="required" value="<?php echo $d['pass_asli']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Nama</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="nama"  required="required" value="<?php echo $d['nama']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Level</td><td width="2%">:</td>
            <td><select name="level" required="required">
              <option>-- Pilih Level --</option>
              <option value="admin" <?php echo $level1; ?>>Administrator</option>
              <option value="pimpinan" <?php echo $level2; ?>>Pimpinan</option>
            </select></td>
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
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Simpan data ini ?');\">Simpan"; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=user"><button class="btn btn-success">Kembali</button></a>
</div>
