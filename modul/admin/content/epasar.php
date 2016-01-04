<?php $d=$crud->ReadAllClausa('pasar','id',$_GET['id']); ?>
<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=pasar">Pasar</a></li>
    <li class="active">Edit Pasar</li>
</ul>


 <form method="POST" action="index.php?aksi=epasar" ENCTYPE="multipart/form-data">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
          <tr>
            <td width="20%">Nama</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="nama"  required="required" value="<?php echo $d['nama']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Alamat</td><td width="2%">:</td>
            <td><textarea cols="50" rows="5" class="input-type" name="alamat"  required="required"><?php echo $d['alamat']; ?></textarea></td>
          </tr>
          <tr>
            <td width="20%">Jumlah Los</td><td width="2%">:</td>
            <td><input type="number" class="input-type" name="jumlah_los"  required="required" value="<?php echo $d['jumlah_los']; ?>"></td>
          </tr>
          <tr>
            <td width="20%">Jumlah Kios</td><td width="2%">:</td>
            <td><input type="number" class="input-type" name="jumlah_kios"  required="required" value="<?php echo $d['jumlah_kios']; ?>"></td>
          </tr>
    		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Simpan Perubahan ?');\">Simpan"; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=pasar"><button class="btn btn-success">Kembali</button></a>
</div>
