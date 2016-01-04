<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=laporan">Laporan</a></li>
    <li class="active">Laporan Penerimaan PAD Pertahun</li>
</ul>



 <form method="POST" action="index.php?content=laporan_pertahun_detail" ENCTYPE="multipart/form-data">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
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
