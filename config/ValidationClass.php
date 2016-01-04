<?php
session_start();

/**
* 
*/
class ValidationClass
{
	// table name and primary key that being use
	var $table;
	var $pk;

	// validate function 
	function validate_login($user,$pass,$level,$table)
	{
		$salt=md5("dinas".$pass."dinas");
		// query
			$query=mysql_query("SELECT * FROM $table WHERE user='$user' AND pass='$salt' AND level='$level'");
		$data=mysql_fetch_assoc($query);
		// checking user exist or not
		$exist=mysql_num_rows($query);
		// level declaration
		$level=$data['level'];
		// user declaration
		if ($exist>0)
		{
			$_SESSION['id']=$data['id'];
			$_SESSION['user']=$data['user'];
			$_SESSION['pass_asli']=$data['pass_asli'];
			$_SESSION['nama']=$data['nama'];
			$_SESSION['level']=$data['level'];
			$_SESSION['jk']=$data['jk'];
			

			// choose link
			switch ($level) {
				case 'admin':
					# if user exist
					echo "<script type='text/javascript'>window.location='modul/admin/index.php'</script>";
					break;
				case 'pimpinan':
					# if user exist
					echo "<script type='text/javascript'>window.location='modul/pimpinan/index.php'</script>";
					break;
			}
				
		} else {
			echo "<script type='text/javascript'>alert('Login gagal. Silahkan masukkan username dan password anda dengan benar !')</script>";
			echo "<script type='text/javascript'>window.location='index.php?content=login'</script>";
		}
	}





// validate function 
	function validate_tanpalogin($table,$id)
	{
			$data=mysql_fetch_assoc(mysql_query("SELECT * FROM $table WHERE id='$id'"));
			
			$_SESSION['id']=$data['id'];
			$_SESSION['user']=$data['user'];
			$_SESSION['level']=$data['level'];
			$_SESSION['nama']=$data['nama'];
			$_SESSION['jk']=$data['jk'];
			$_SESSION['status']=$data['status'];
			$_SESSION['jenis_identitas']=$data['jenis_identitas'];
			$_SESSION['nomor_identitas']=$data['nomor_identitas'];
			$_SESSION['profesi']=$data['profesi'];
			$_SESSION['tgl_lhr']=$data['tgl_lhr'];
			$_SESSION['tmp_lhr']=$data['tmp_lhr'];
			$_SESSION['alamat']=$data['alamat'];
			$_SESSION['kodepos']=$data['kodepos'];
			$_SESSION['kabupaten']=$data['kabupaten'];
			$_SESSION['nohp']=$data['nohp'];
			$_SESSION['bank']=$data['bank'];
			$_SESSION['norek']=$data['norek'];
			$_SESSION['atasnama']=$data['atasnama'];
			$_SESSION['id_upline']=$data['id_upline'];
			
	}



// end of php codes
	// wrote by prianggaemilsyah a.k.a juniorsumbar
}
?>