<?php
if (isset($_POST['submit'])){
// get link
// $link=$_POST['link'];
// /get link
	// declare table
	$table="user";
	$link_from="pengaturan";
	// /declare table
	// declare directory
	// $dir="../../media/user/";		
	// /declare directory
	// data
	// $jenis="listening";
	$id=$_POST['id'];
	$user=$_POST['user'];
	$pass_asli=$_POST['pass'];
	$pass=md5("dinas".$_POST['pass']."dinas");
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];


	// /data
		// process
			// if (is_uploaded_file($_FILES['file']['tmp_name'])) {
// $move_files=move_uploaded_file($_FILES['file']['tmp_name'], $dir.$file);
$process=$crud->edit5($table,'user','pass','pass_asli','nama','jk',$id,$user,$pass,$pass_asli,$nama,$jk);
			// } else {
				// $process=$crud->add14($table,$user,$pass,$pass_asli,$nama,$level,$nip,$golongan,$jabatan_pangkat,$nohp,$alamat,$jk,$email,'',$jenis);
			// }
		// /process
// back link
if ($process){
// $main->back_link($link);
		echo "<script type='text/javascript'>";
		echo "window.location='index.php?content=$link_from&success=1'";
		echo "</script>";		
} else {
// $main->back_link($link);
		echo "<script type='text/javascript'>";
		echo "window.location='index.php?content=$link_from&success=0'";
		echo "</script>";			
}
//  /back link
} else {
	$main->home_link();		
}


?>
