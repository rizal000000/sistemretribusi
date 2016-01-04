<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=laporan">Laporan</a></li>
    <li class="active">Laporan Penerimaan PAD Perbulan</li>
</ul>



 <form method="POST" action="index.php?content=laporan_perbulan_detail" ENCTYPE="multipart/form-data">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <tr>
            <td width="20%">Bulan</td><td width="2%">:</td>
            <td>
              <select name="bulan">
                <option>-- Pilih Bulan --</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
          </select>
          </td>
          </tr>
          <tr>
            <td width="20%">Tahun</td><td width="2%">:</td>
            <td>
              <select name="tahun">
                <option>-- Pilih Tahun --</option>
              <?php
                for ($a=2000; $a <=2020; $a++) { 
                  echo "<option value='$a'>$a</option>";
                }

              ?>
          </select>
          </td>
          </tr>
    		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit'>Lihat Laporan "; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=laporan"><button class="btn btn-success">Kembali</button></a>
</div>
