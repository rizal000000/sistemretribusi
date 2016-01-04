<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="index.php?content=retribusi">Retribusi</a></li>
    <li class="active">Penetapan Hak Pedagang</li>
</ul>




<div class="col_1_of_12 span_1_of_12">
</div>
<div class="clear"></div>





              <div align="right" style="margin-right:10px">
                <a href="index.php?content=iretribusi_hak"><button class="btn btn-primary"><i class="icon-plus-sign"></i> Input Penetapan Hak Pedagang</button></a>
              </div><br/>
              
<!-- content -->
<?php
$table="p_hakpedagang";
$link="retribusi_hak";

  // delete data
  if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="hapus"){
  // delete file 
        $id=$_GET['id'];
        $data=$crud->ReadAllClausa($table,'id',$id);
        // $unlink=unlink("../../media/user/$data[file]");
        $pasar=$crud->ReadAllClausa('pasar','id',$data['id_pasar']);
        $jenis_dagangan=$data['jenis_dagangan'];
        $linkku="jumlah_".$jenis_dagangan;
        $jml=$pasar[$linkku]+1;
        $update=mysql_query("UPDATE pasar SET $linkku='$jml' WHERE id='$data[id_pasar]'");
        $delete_process=$crud->delete1($table,'id',$id);
        if ($delete_process){
          echo "<script type='text/javascript'>";
          echo "window.location='index.php?content=$link'";
          echo "</script>";
        }
  // delete file
    }
  }
  // /delete data
?>
  
        <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%">
        <thead>
           <tr>
            <th rowspan="1" colspan="1">No</th>
            <th rowspan="1" colspan="1">No. Penetapan</th>
            <th rowspan="1" colspan="1">Pedagang</th>
            <th rowspan="1" colspan="1">Pasar</th>
            <th rowspan="1" colspan="1">Jenis Dagangan</th>
            <th rowspan="1" colspan="1">Tanggal Persetujuan</th>
            <th rowspan="1" colspan="1">Berlaku Sampai</th>
            <th rowspan="1" colspan="1">Total Retribusi Pasar</th>
            <th rowspan="1" colspan="1">Total Retribusi Kebersihan</th>
            <th rowspan="1" colspan="1">Opsi</th>
          </tr>
        </thead>
        <tbody>
         <?php
            $q=mysql_query("SELECT * FROM $table ORDER BY id DESC");
            while($d=mysql_fetch_assoc($q)){
                  $no+=1;
                  $pedagang=$crud->ReadAllClausa('pedagang','id',$d['id_pedagang']);
                  $pasar=$crud->ReadAllClausa('pasar','id',$d['id_pasar']);


                                                $tgl1=substr($d['tgl_persetujuan'], 8,2);
                                                  $bulan1=substr($d['tgl_persetujuan'], 5,2);
                                                $bln1=$main->change_date($bulan1);
                                                $thn1=substr($d['tgl_persetujuan'], 0,4);

                                                $tgl2=substr($d['tgl_berlaku'], 8,2);
                                                  $bulan2=substr($d['tgl_berlaku'], 5,2);
                                                $bln2=$main->change_date($bulan2);
                                                $thn2=substr($d['tgl_berlaku'], 0,4);



                  echo "
                            <tr role='row' class='odd'>
                              <td width='1%'>".$no.".</td>
                              <td>".ucfirst($d['no'])."</td>
                              <td>".ucfirst($pedagang['nama'])."</td>
                              <td>".ucfirst($pasar['nama'])."</td>
                              <td>".ucfirst($main->jenis_dagangan($d['jenis_dagangan']))."</td>
                              <td>".ucfirst($tgl1." ".$bln1." ".$thn1)."</td>
                              <td>".ucfirst($tgl2." ".$bln2." ".$thn2)."</td>
                              <td>Rp. ".number_format($d['total_retribusi_pasar'])."</td>
                              <td>Rp. ".number_format($d['total_retribusi_kebersihan'])."</td>
                              <td>
                              <a href='index.php?content=".$link."&aksi=hapus&id=$d[id]' style='color:#6aaaaa' onClick=\"return confirm('Delete Data ini?');\">Delete</a>
                              </td>
                            </tr>
                  ";
            }

/*
                              <a href='index.php?content=e".$link."&id=$d[id]' style='color:#6aaaaa'>Edit</a> 
                              | 


*/


        ?>    
        </tbody>
      </table>




