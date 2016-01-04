<?php
if (isset($_POST['submit'])){
// get link
// $link=$_POST['link'];
// /get link
	// declare table
	$table="p_tarif";
	$link_from="retribusi_tarif";
	// /declare table
	// declare directory
	// $dir="../../media/user/";		
	// /declare directory
	// data
	// $jenis="listening";
	$t_los=$_POST['t_los'];
	$t_kios=$_POST['t_kios'];
	$t_kakilima=$_POST['t_kakilima'];
	$t_kebersihan_los=$_POST['t_kebersihan1'];
	$t_kebersihan_kios=$_POST['t_kebersihan2'];
	$t_kebersihan_kakilima=$_POST['t_kebersihan3'];


	// /data
		// process
			// if (is_uploaded_file($_FILES['file']['tmp_name'])) {
// $move_files=move_uploaded_file($_FILES['file']['tmp_name'], $dir.$file);
$process=$crud->add6($table,$t_los,$t_kios,$t_kakilima,$t_kebersihan_los,$t_kebersihan_kios,$t_kebersihan_kakilima);
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
