<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=retribusi">Retribusi</a></li>
    <li><a href="index.php?content=retribusi_pembayaran">Input Pembayaran</a></li>
    <li class="active">Input Retribusi Pembayaran</li>
</ul>



 <form method="POST" action="index.php?content=iretribusi_pembayaran2" ENCTYPE="multipart/form-data">
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
                  echo "<option value='$pedagang[id]'>".ucfirst($pedagang['nama'])."</option>";
                }
            ?>
          </select>
          </td>
          </tr>
    		  <tr>
            <td colspan="9">
            <?php echo "<button class='btn btn-primary' type='submit' name='submit' value='Simpan' class='input-submit'>Selanjutnya "; ?>
            </td>
          </tr>




        </table></form>
        
<div style="margin-left:10px">
  <a href="index.php?content=retribusi"><button class="btn btn-success">Kembali</button></a>
</div>
