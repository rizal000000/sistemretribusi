<?php
if (isset($_POST['submit'])){
// get link
// $link=$_POST['link'];
// /get link
	// declare table
	$table="pedagang";
	$link_from="pedagang";
	// /declare table
	// declare directory
	$dir="../../media/pedagang/";		
	// /declare directory
	// data
	// $jenis="listening";
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$tmp_lhr=$_POST['tmp_lhr'];
	$tgl_lhr=$_POST['tgl_lhr'];
	$jk=$_POST['jk'];
	$agama=$_POST['agama'];
	$nohp=$_POST['nohp'];
	$file=$_FILES['file']['name'];


	// /data
		// process
			if (is_uploaded_file($_FILES['file']['tmp_name'])) {
$move_files=move_uploaded_file($_FILES['file']['tmp_name'], $dir.$file);
$process=$crud->add8($table,$nama,$alamat,$tgl_lhr,$tmp_lhr,$jk,$agama,$nohp,$file);
			} else {
$process=$crud->add8($table,$nama,$alamat,$tgl_lhr,$tmp_lhr,$jk,$agama,$nohp,'');
			}
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
