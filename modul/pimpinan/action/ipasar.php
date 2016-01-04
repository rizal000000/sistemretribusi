<?php
if (isset($_POST['submit'])){
// get link
// $link=$_POST['link'];
// /get link
	// declare table
	$table="pasar";
	$link_from="pasar";
	// /declare table
	// declare directory
	// $dir="../../media/user/";		
	// /declare directory
	// data
	// $jenis="listening";
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$jumlah_los=$_POST['jumlah_los'];
	$jumlah_kios=$_POST['jumlah_kios'];


	// /data
		// process
			// if (is_uploaded_file($_FILES['file']['tmp_name'])) {
// $move_files=move_uploaded_file($_FILES['file']['tmp_name'], $dir.$file);
$process=$crud->add4($table,$nama,$alamat,$jumlah_los,$jumlah_kios);
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
