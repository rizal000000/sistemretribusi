<?php
/*
	Include Classes
*/
# configuration class
include "ConfigClass.php";
# redirect class
include "ValidationClass.php";
# crud class
include "CrudClass.php";

// Class Database
$host="localhost";
$user="root";
$pass="";
$name="dinas_pasar";

// object configclass
$main=new ConfigClass($host,$user,$pass,$name);
echo $main->ConnectHost();
$main->ConnectDb();
// object crudclass
$crud=new CrudClass();


// end of php codes
	// wrote by prianggaemilsyah a.k.a juniorsumbar
?>