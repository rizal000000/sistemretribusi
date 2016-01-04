<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=retribusi">Retribusi</a></li>
    <li><a href="index.php?content=retribusi_hak">Penetapan Hak Pedagang</a></li>
    <li class="active">Input Penetapan Hak Pedagang</li>
</ul>



 <form method="POST" action="index.php?aksi=iretribusi_hak" ENCTYPE="multipart/form-data">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <tr>
            <td width="20%">Nomor Penetapan</td><td width="2%">:</td>
            <td><input type="text" class="input-type" name="no"  required="required"></td>
          </tr>
          <tr>
            <td width="20%">Pedagang</td><td width="2%">:</td>
            <td>
              <select name="id_pedagang">
                <option>-- Pilih Pedagang --</option>
              <?php
                $q=mysql_query("SELECT * FROM pedagang");
                while ($d=mysql_fetch_assoc($q)) {
                  echo "<option value='$d[id]'>".ucfirst($d['nama'])."</option>";
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
                  echo "<option value='$d2[id]'>".ucfirst($d2['nama'])." (Los : ".ucfirst($d2['jumlah_los'])." - Kios : ".ucfirst($d2['jumlah_kios']).")</option>";
                }
            ?>
          </select>            
            </td>
          </tr>
          <tr>
            <td width="20%">Jenis Dagangan</td><td width="2%">:</td>
            <td><select name="jenis" required="required">
              <option>-- Pilih Jenis Dagangan --</option>
              <option value="los">Los</option>
              <option value="kios">Kios</option>
              <option value="kakilima">Kaki Lima</option>
            </select></td>
          </tr>
          <tr>
            <td width="20%">Tanggal Persetujuan</td><td width="2%">:</td>
            <td><input type="date" class="input-type" name="tgl_1"  required="required"></td>
          </tr>
          <tr>
            <td width="20%">Tanggal Berlaku</td><td width="2%">:</td>
            <td><input type="date" class="input-type" name="tgl_2"  required="required"></td>
          </tr>
    		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Tambah data baru?');\">Tambah"; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=retribusi_hak"><button class="btn btn-success">Kembali</button></a>
</div>
