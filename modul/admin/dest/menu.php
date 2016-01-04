<section class="navbar main-menu">
       <div class="header-bottom-center">
<!--          <div class="search">     
                <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="Subscribe" id="submit" name="submit">
                <div id="response"> </div>
         </div>
 --> 
<?php
if (!isset($_GET['content'])){
$class1="active";
} else {
    switch ($_GET['content']) {
        // case 'user': $class2="active"; break;
        case 'pedagang': $class3="active"; break;
        case 'pasar': $class4="active"; break;
        case 'retribusi': $class5="active"; break;
        case 'pengaturan': $class6="active"; break;
    }
}
?>




    <div class="navbar-inner main-menu">                
        <!-- <a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a> -->
        <nav id="menu" class="pull-right">
            <ul>
                <li class="<?php echo $class1; ?>"><a href="index.php" title="Halaman Utama">Beranda</a></li>       
                <!-- <li class="<?php echo $class2; ?>"><a href="index.php?content=user">User</a></li> -->
                <li class="<?php echo $class3; ?>"><a href="index.php?content=pedagang">Pedagang</a></li>
                <li class="<?php echo $class4; ?>"><a href="index.php?content=pasar">Pasar</a></li>
                <li class="<?php echo $class5; ?>"><a href="index.php?content=retribusi">Retribusi</a></li>
                <li class="<?php echo $class6; ?>"><a href="index.php?content=pengaturan">Pengaturan</a></li>
                <li><a href="#" onClick="logout()">Log Out <?php echo "(".ucfirst($main->level($_SESSION['level'])).")"; ?></a></li>
            </ul>
        </nav>
    </div>    
</section>
