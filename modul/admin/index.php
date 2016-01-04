<?php
session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['user'])) {
    if ($_SESSION['level']=="admin"){
        include "../../config/Classes.php";
        // start by 
        /*
          for ConfigClass  $main->function(); 
          for CrudClass  $crud->function(); 
        */
          error_reporting(0);
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Administrator | Sistem Informasi Pengelolaan Retribusi Pasar</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../../js/jquery1.min.js"></script>
<!-- start menu -->
<link href="../../css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../../js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="../../js/jquery.easydropdown.js"></script>




   <!-- Bootstrap core CSS -->
    <link href="../../files/bootstrap.min.css" rel="stylesheet">
    <link href="../../files/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
  <!--   <link href="files/font-awesome.css" rel="stylesheet">
    <link href="files/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="files/owl.carousel.css" type="text/css"> -->

      <!--right slidebar-->
      <!-- <link href="files/slidebars.css" rel="stylesheet"> -->
    <!-- Custom styles for this template -->

    <!-- <link href="files/style.css" rel="stylesheet"> -->
    <!-- <link href="files/style-responsive.css" rel="stylesheet"> -->
    <!-- <link href="files/cssfont.css" rel="stylesheet"> -->


    <!-- data table -->

    <link rel="stylesheet" type="text/css" href="../../files/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../files/shCore.css">
    <script type="text/javascript" language="javascript" src="../../files/jquery (2).js"></script>
    <script type="text/javascript" language="javascript" src="../../files/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="../../files/dataTables.tableTools.js"></script>
    <script type="text/javascript" language="javascript" src="../../files/dataTables.bootstrap.js"></script>
    <script type="text/javascript" language="javascript" src="../../files/shCore.js"></script>
    <script type="text/javascript" language="javascript" class="init">
     $(document).ready(function() {
      var table = $('#example').DataTable();
     } );


     
    </script>

    <!-- /data table -->


<!-- autocomplete -->
    <link rel="stylesheet" href="../../autocomplete/jquery-ui.css" />
    <script src="../../autocomplete/jquery-1.8.3.js"></script>
    <script src="../../autocomplete/jquery-ui.js"></script>

<!-- autocomplete -->

  <!-- Proses Logout -->
    <script type="text/javascript">
      function logout(){
        var x=window.confirm("Apakah anda ingin Logout ?")
          if(x)
            window.location="../../logout.php";     
      } 
    </script>
  <!-- End Proses Logout -->


</head>
<body> 
  <div class="header-top" style="min-height:1px">
  </div>
   <div class="header-bottom">
			<img src="../../images/header.jpg" height="100%" width="100%"></img>
  	 	<?php include "dest/menu.php";?>
     </div>
	</div>
  
  <?php
      if ($_GET['content']=="retribusi_kartu_detail"){
          $margin="margin-left:1,2px;";
      }
  ?>

    <div class="">
        <div class="wrap" style="min-height:400px;<?php echo $margin; ?>">

            <!-- content --> 
              <?php
              if(isset($_GET['content'])){
                  switch ($_GET['content']) {
                      case $_GET['content'] : include("content/".$_GET['content'].".php");
                      break;
                      default: "tidak terdapat menu";
                  } 
              } elseif (isset($_GET['aksi'])) {
                  switch ($_GET['aksi']) {
                      case $_GET['aksi'] : include("action/".$_GET['aksi'].".php");
                      break;
                      default: "tidak terdapat menu";
                  } 
              } else {
                include "content/default.php";
              }
              ?>
            <!-- /content -->



    	</div>
    </div>
    <div class="footer">
		<?php include "dest/footer.php"; ?>
	</div>
</body>
</html>
<?php
} else {
  echo "<script type='text/javascript'>window.location='../../index.php'</script>";
}

} else {
  echo "<script type='text/javascript'>window.location='../../index.php'</script>";
}
?>

