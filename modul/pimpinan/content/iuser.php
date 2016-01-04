<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=user">User</a></li>
    <li class="active">Input User Baru</li>
</ul>


 <form method="POST" action="index.php?aksi=iuser" ENCTYPE="multipart/form-data">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <tr>
            <td width="20%">Username</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="user"  required="required"></td>
          </tr>
          <tr>
            <td width="20%">Password</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="pass"  required="required"></td>
          </tr>
          <tr>
            <td width="20%">Nama</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="nama"  required="required"></td>
          </tr>
          <tr>
            <td width="20%">Level</td><td width="2%">:</td>
            <td><select name="level" required="required">
              <option>-- Pilih Level --</option>
              <option value="admin">Administrator</option>
              <option value="pimpinan">Pimpinan</option>
            </select></td>
          </tr>
          <tr>
            <td width="20%">Jenis Kelamin</td><td width="2%">:</td>
            <td>
              <input type="radio" class="input-type" name="jk" value="lk" required="required"> Laki- Laki 
              &nbsp;&nbsp;&nbsp;
              <input type="radio" class="input-type" name="jk" value="pr" required="required"> Perempuan
            </td>
          </tr>
		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Tambah data baru?');\">Tambah"; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=user"><button class="btn btn-success">Kembali</button></a>
</div>
