<?php
if (isset($_POST['submit'])){
// get link
// $link=$_POST['link'];
// /get link
	// declare table
	$table="p_hakpedagang";
	$link_from="retribusi_hak";
	// /declare table
	// declare directory
	// $dir="../../media/user/";		
	// /declare directory
	// data
	// $jenis="listening";
	$id=$_POST['id'];

	$no=$_POST['no'];
	$id_pedagang=$_POST['id_pedagang'];
	$id_pasar=$_POST['id_pasar'];
	$jenis=$_POST['jenis'];
	$tgl_1=$_POST['tgl_1'];
	$tgl_2=$_POST['tgl_2'];


	if ($jenis=="los"){
		$data=mysql_fetch_assoc(mysql_query("SELECT t_los AS total FROM p_tarif"));
		$bersih=mysql_fetch_assoc(mysql_query("SELECT t_kebersihan_los AS total FROM p_tarif"));
		// pilih pasar kemudian hapus pasar
		$data_pasar=mysql_fetch_assoc(mysql_query("SELECT * FROM pasar WHERE id='$id_pasar'"));
		$jumlah=$data_pasar['jumlah_los']-1;
		$pasar=mysql_query("UPDATE pasar SET jumlah_los='$jumlah' WHERE id='$id_pasar'");

	} elseif ($jenis=="kios") {
		$data=mysql_fetch_assoc(mysql_query("SELECT t_kios AS total FROM p_tarif"));
		$bersih=mysql_fetch_assoc(mysql_query("SELECT t_kebersihan_kios AS total FROM p_tarif"));
		// pilih pasar kemudian hapus pasar
		$data_pasar2=mysql_fetch_assoc(mysql_query("SELECT * FROM pasar WHERE id='$id_pasar'"));
		$jumlah2=$data_pasar2['jumlah_kios']-1;
		$pasar=mysql_query("UPDATE pasar SET jumlah_kios='$jumlah2' WHERE id='$id_pasar'");
		
	} elseif ($jenis=="kakilima") {
		$data=mysql_fetch_assoc(mysql_query("SELECT t_kakilima AS total FROM p_tarif"));		
		$bersih=mysql_fetch_assoc(mysql_query("SELECT t_kebersihan_kakilima AS total FROM p_tarif"));		
		// pilih pasar kemudian hapus pasar
	}


	// /data
		// process
			// if (is_uploaded_file($_FILES['file']['tmp_name'])) {
// $move_files=move_uploaded_file($_FILES['file']['tmp_name'], $dir.$file);
$process=mysql_query("INSERT INTO $table VALUES (null,'$no','$id_pedagang','$id_pasar','$jenis','$tgl_1','$tgl_2','$data[total]','$bersih[total]')");
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
