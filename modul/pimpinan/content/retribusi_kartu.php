<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=retribusi">Retribusi</a></li>
    <li class="active">Kartu Kendali Retribusi</li>
</ul>



 <form method="POST" action="index.php?content=retribusi_kartu_detail" ENCTYPE="multipart/form-data">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <tr>
            <td width="20%">Pedagang</td><td width="2%">:</td>
            <td>
              <select name="id_pedagang">
                <option>-- Pilih Pedagang --</option>
              <?php
                $q=mysql_query("SELECT * FROM p_hakpedagang");
                while ($d=mysql_fetch_assoc($q)) {
                  $pedagang=$crud->ReadAllClausa('pedagang','id',$d['id_pedagang']);
                  $pasar=$crud->ReadAllClausa('pasar','id',$d['id_pasar']);
                    switch ($d['jenis_dagangan']) {
                      case 'los': $jj="Los"; break;
                      case 'kios': $jj="Kios"; break;
                      case 'kakilima': $jj="Kaki Lima"; break;
                    }
                  echo "<option value='$pedagang[id]'>No. Penetapan $d[no] / ".ucfirst($pedagang['nama'])." / ".$jj." / Pasar ".ucfirst($pasar['nama'])."</option>";
                }
            ?>
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
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit'>Lihat Kartu Kendali "; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=retribusi"><button class="btn btn-success">Kembali</button></a>
</div>
