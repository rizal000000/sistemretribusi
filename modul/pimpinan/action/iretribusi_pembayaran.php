<?php
if (isset($_POST['submit'])){
// get link
// $link=$_POST['link'];
// /get link
	// declare table
	$table="pembayaran";
	$link_from="retribusi_pembayaran";
	// /declare table
	// declare directory
	// $dir="../../media/user/";		
	// /declare directory
	// data
	// $jenis="listening";
	$id_pedagang=$_POST['id_pedagang'];
	$jenis=$_POST['jenis'];
                if ($jenis=="los" OR $jenis=="kios"){
                	$pembayaran_ke=date('Y')."-".$_POST['pembayaran_ke']."-".date('d');
                } else {
                	$pembayaran_ke=$_POST['pembayaran_ke'];
                }

	date_default_timezone_set('Asia/Jakarta');
			$tgl=date('d');
			$bulan=date('m');
			$thn=date('Y');
	$tgl=$thn."-".$bulan."-".$tgl;
	$ket=$_POST['ket'];


if ($jenis=="los" OR $jenis=="kios"){
	$cek=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$id_pedagang' AND pembayaran_ke LIKE '%$pembayaran_ke%'"));
} else {
	$cek=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$id_pedagang' AND pembayaran_ke='$pembayaran_ke'"));
}

if ($cek!=0){
		echo "<script type='text/javascript'>";
		echo "window.location='index.php?content=$link_from&success=3'";
		echo "</script>";		

} else {

	// /data
		// process
			// if (is_uploaded_file($_FILES['file']['tmp_name'])) {
// $move_files=move_uploaded_file($_FILES['file']['tmp_name'], $dir.$file);
$process=$crud->add5($table,$id_pedagang,$jenis,$pembayaran_ke,$tgl,$ket);
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

}
//  /back link
} else {
	$main->home_link();		
}


?>
