<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=pedagang">Pedagang</a></li>
    <li class="active">Input Pedagang Baru</li>
</ul>


 <form method="POST" action="index.php?aksi=ipedagang" ENCTYPE="multipart/form-data">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <tr>
            <td width="20%">Nama</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="nama"  required="required"></td>
          </tr>
          <tr>
            <td width="20%">Alamat</td><td width="2%">:</td>
            <td><textarea cols="50" rows="5" class="input-type" name="alamat"  required="required"></textarea></td>
          </tr>
          <tr>
            <td width="20%">Tempat Lahir</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="tmp_lhr"  required="required"></td>
          </tr>
          <tr>
            <td width="20%">Tanggal Lahir</td><td width="2%">:</td>
            <td><input type="date" class="input-type" name="tgl_lhr"  required="required"></td>
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
            <td width="20%">Agama</td><td width="2%">:</td>
            <td><select name="agama" required="required">
              <option>-- Pilih Agama --</option>
              <option value="1">Islam</option>
              <option value="2">Kristen Protestan</option>
              <option value="3">Kristen Katolik</option>
              <option value="4">Buddha</option>
              <option value="5">Hindu</option>
              <option value="6">Tionghoa</option>
            </select></td>
          </tr>
          <tr>
            <td width="20%">No. HP</td><td width="2%">:</td>
            <td><input type="number" class="input-type" name="nohp"  required="required"></td>
          </tr>
          <tr>
            <td width="20%">File</td><td width="2%">:</td>
            <td><input type="file" class="input-type" name="file"  required="required"></td>
          </tr>
     		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Tambah data baru?');\">Tambah"; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=pedagang"><button class="btn btn-success">Kembali</button></a>
</div>

<br/>