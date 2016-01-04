<?php $d=$crud->ReadAllClausa('user','id',$_SESSION['id']); ?>

<ul class="breadcrumb">
    <li><a href="index.php">Beranda</a></li>
    <li>Pengaturan</li>
</ul>


<!-- content -->
<h3><?php echo ucfirst($d['nama']); ?></h3>
  
        <table class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%">
        <thead>
          <tr>
            <td width="20%"><b>Username</b></td>
            <td><i><?php echo $d['user']; ?></i></td>
          </tr>  
          <tr>
            <td width="20%"><b>Password</b></td>
            <td><i><?php echo $d['pass_asli']; ?></i></td>
          </tr>  
          <tr>
            <td width="20%"><b>Nama</b></td>
            <td><i><?php echo ucfirst($d['nama']); ?></i></td>
          </tr>  
          <tr>
            <td width="20%"><b>Jenis Kelamin</b></td>
            <td><i><?php echo ucfirst($main->jk($d['jk'])); ?></i></td>
          </tr>  
        </thead>
      </table>


              
<div style="margin-left:10px">
  <a href="index.php?content=pengaturan_edit&id=<?php echo $_SESSION['id']; ?>"><button class="btn btn-primary">Edit Data</button></a>
</div>


<br/>