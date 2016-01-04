<?php
// Classes
include 'config/Classes.php';
$validation=new ValidationClass();

	if (!isset($_POST['submit']))
	{
		echo "<script type='text/javascript'>window.location='index.php'</script>";
	} 
	else 
	{
		# get Variables
		$getUser=$_POST['user'];
		$getPass=$_POST['pass'];
		$getLevel=$_POST['level'];
			# do validation/checking function for login user
			$validation->validate_login($getUser,$getPass,$getLevel,'user');
	}


// end of php codes
	// wrote by prianggaemilsyah a.k.a juniorsumbar
?>