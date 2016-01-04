<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=retribusi">Retribusi</a></li>
    <li><a href="index.php?content=retribusi_pembayaran">Input Pembayaran</a></li>
    <li><a href="index.php?content=iretribusi_pembayaran">Pilih Pedagang</a></li>
    <li class="active">Input Retribusi Pembayaran</li>
</ul>



 <form method="POST" action="index.php?aksi=iretribusi_pembayaran" ENCTYPE="multipart/form-data">
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <tr>
            <td width="20%">Pedagang</td><td width="2%">:</td>
            <td><?php $d=$crud->ReadAllClausa('pedagang','id',$_POST['id_pedagang']); 
            echo ucfirst($d['nama']);

            // ambil phak pedagangnya untuk menentukan hari atau bulan dia menggunakan sistem 
            $hak=$crud->ReadAllClausa('p_hakpedagang','id_pedagang',$d['id']);
            ?>
            <input type="hidden" name="id_pedagang" value="<?php echo $d['id'];?>">
          </td>
          </tr>
          <tr>
            <td width="20%">Pembayaran</td><td width="2%">:</td>
            <td>
              <?php
                if ($hak['jenis_dagangan']=="los" OR $hak['jenis_dagangan']=="kios"){
                  ?>
                  <input type="hidden" name="jenis" value="<?php echo $hak['jenis_dagangan']; ?>">
                  <!-- ini los dan kios -->
                  <select name="pembayaran_ke">
                    <option>-- Bulan --</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                  </select>
                  <?php
                } else {
                  ?>
                  <!-- ini kakilima -->
                  <input type="hidden" name="jenis" value="<?php echo $hak['jenis_dagangan']; ?>">
                  <input type="date" name="pembayaran_ke">
                  <?php
                }
              ?>
            </td>
          </tr>


          <?php 
 if ($hak['jenis_dagangan']=="los" OR $hak['jenis_dagangan']=="kios"){
?>

          <tr>
            <td width="20%">Tahun</td><td width="2%">:</td>
            <td>
              <?php
                echo date('Y');
              ?>  
            </td>
          </tr>

<?php
 }
?>

          <tr>
            <td width="20%">Keterangan</td><td width="2%">:</td>
            <td>
              <textarea name="ket" cols="40" rows="5"></textarea>
            </td>
          </tr>

    		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit' onClick=\"return confirm('Simpan Pembayaran ini ?');\">Simpan "; ?>
            </td>
          </tr>
        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=iretribusi_pembayaran"><button class="btn btn-success">Kembali</button></a>
</div>
