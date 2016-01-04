<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=pasar">Pasar</a></li>
    <li class="active">Input Pasar Baru</li>
</ul>


 <form method="POST" action="index.php?aksi=ipasar" ENCTYPE="multipart/form-data">
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
            <td width="20%">Jumlah Los</td><td width="2%">:</td>
            <td><input type="number" class="input-type" name="jumlah_los"  required="required"></td>
          </tr>
          <tr>
            <td width="20%">Jumlah Kios</td><td width="2%">:</td>
            <td><input type="number" class="input-type" name="jumlah_kios"  required="required"></td>
          </tr>
    		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Tambah data baru?');\">Tambah"; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=pasar"><button class="btn btn-success">Kembali</button></a>
</div>
<br/>
