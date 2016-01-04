<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li class="active">User</li>
</ul>




<div class="col_1_of_12 span_1_of_12">
</div>
<div class="clear"></div>





              <div align="right" style="margin-right:10px">
                <a href="index.php?content=iuser"><button class="btn btn-primary"><i class="icon-plus-sign"></i> Input User Baru</button></a>
              </div><br/>
              
<!-- content -->
<?php
$table="user";
$link="user";

  // delete data
  if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="hapus"){
  // delete file 
        $id=$_GET['id'];
        $data=$crud->ReadAllClausa($table,'id',$id);
        // $unlink=unlink("../../media/user/$data[file]");
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
            <th rowspan="1" colspan="1">Username</th>
            <th rowspan="1" colspan="1">Password</th>
            <th rowspan="1" colspan="1">Hak Akses</th>
            <th rowspan="1" colspan="1">Nama</th>
            <th rowspan="1" colspan="1">Jenis Kelamin</th>
            <th rowspan="1" colspan="1">Opsi</th>
          </tr>
        </thead>
        <tbody>
         <?php
            $q=mysql_query("SELECT * FROM $table ORDER BY id DESC");
            while($d=mysql_fetch_assoc($q)){
                  $no+=1;

                  echo "
                            <tr role='row' class='odd'>
                              <td width='1%'>".$no.".</td>
                              <td>".$d['user']."</td>
                              <td>".$d['pass_asli']."</td>
                              <td>".ucfirst($main->level($d['level']))."</td>
                              <td>".ucfirst($d['nama'])."</td>
                              <td>".ucfirst($main->jk($d['jk']))."</td>
                              <td>
                              <a href='index.php?content=e".$link."&id=$d[id]' style='color:#6aaaaa'>Edit</a> 
                              | 
                              <a href='index.php?content=".$link."&aksi=hapus&id=$d[id]' style='color:#6aaaaa' onClick=\"return confirm('Delete Data ini?');\">Delete</a>
                              </td>
                            </tr>
                  ";
            }


        ?>    
        </tbody>
      </table>




