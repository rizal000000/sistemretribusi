  <tr align="center">
    <td>JANUARI <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// Januari 01
$januari_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-01%'"));
$januari_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-01%'"));          
// Januari 02
$januari_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-02%'"));
$januari_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-02%'"));          
// Januari 03
$januari_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-03%'"));
$januari_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-03%'"));          
// Januari 04
$januari_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-04%'"));
$januari_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-04%'"));          
// Januari 05
$januari_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-05%'"));
$januari_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-05%'"));          
// Januari 06
$januari_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-06%'"));
$januari_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-06%'"));          
// Januari 07
$januari_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-07%'"));
$januari_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-07%'"));          
// Januari 08
$januari_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-08%'"));
$januari_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-08%'"));          
// Januari 09
$januari_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-09%'"));
$januari_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-09%'"));          
// Januari 10
$januari_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-10%'"));
$januari_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-10%'"));          
// Januari 11
$januari_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-11%'"));
$januari_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-11%'"));          
// Januari 12
$januari_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-12%'"));
$januari_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-12%'"));          
// Januari 13
$januari_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-13%'"));
$januari_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-13%'"));          
// Januari 14
$januari_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-14%'"));
$januari_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-14%'"));          
// Januari 15
$januari_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-15%'"));
$januari_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-15%'"));          
// Januari 16
$januari_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-16%'"));
$januari_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-16%'"));          
// Januari 17
$januari_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-17%'"));
$januari_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-17%'"));          
// Januari 18
$januari_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-18%'"));
$januari_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-18%'"));          
// Januari 19
$januari_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-19%'"));
$januari_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-19%'"));          
// Januari 20
$januari_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-20%'"));
$januari_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-20%'"));          
// Januari 21
$januari_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-21%'"));
$januari_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-21%'"));          
// Januari 22
$januari_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-22%'"));
$januari_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-22%'"));          
// Januari 23
$januari_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-23%'"));
$januari_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-23%'"));          
// Januari 24
$januari_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-24%'"));
$januari_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-24%'"));          
// Januari 25
$januari_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-25%'"));
$januari_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-25%'"));          
// Januari 26
$januari_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-26%'"));
$januari_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-26%'"));          
// Januari 27
$januari_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-27%'"));
$januari_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-27%'"));          
// Januari 28
$januari_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-28%'"));
$januari_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-28%'"));          
// Januari 29
$januari_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-29%'"));
$januari_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-29%'"));          
// Januari 30
$januari_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-30%'"));
$januari_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-30%'"));          
// Januari 31
$januari_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-31%'"));
$januari_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-01-31%'"));          

         

    if($januari_1==0){ 
        $warna_januari1="red"; 
        $januari_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari1="green"; 
        $januari_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_2==0){ 
        $warna_januari2="red"; 
        $januari_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari2="green"; 
        $januari_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_3==0){ 
        $warna_januari3="red"; 
        $januari_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari3="green"; 
        $januari_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_4==0){ 
        $warna_januari4="red"; 
        $januari_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari4="green"; 
        $januari_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_5==0){ 
        $warna_januari5="red"; 
        $januari_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari5="green"; 
        $januari_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_6==0){ 
        $warna_januari6="red"; 
        $januari_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari6="green"; 
        $januari_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_7==0){ 
        $warna_januari7="red"; 
        $januari_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari7="green"; 
        $januari_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_8==0){ 
        $warna_januari8="red"; 
        $januari_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari8="green"; 
        $januari_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_9==0){ 
        $warna_januari9="red"; 
        $januari_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari9="green"; 
        $januari_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_10==0){ 
        $warna_januari10="red"; 
        $januari_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari10="green"; 
        $januari_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_11==0){ 
        $warna_januari11="red"; 
        $januari_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari11="green"; 
        $januari_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_12==0){ 
        $warna_januari12="red"; 
        $januari_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari12="green"; 
        $januari_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_13==0){ 
        $warna_januari13="red"; 
        $januari_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari13="green"; 
        $januari_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_14==0){ 
        $warna_januari14="red"; 
        $januari_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari14="green"; 
        $januari_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_15==0){ 
        $warna_januari15="red"; 
        $januari_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari15="green"; 
        $januari_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_16==0){ 
        $warna_januari16="red"; 
        $januari_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari16="green"; 
        $januari_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_17==0){ 
        $warna_januari17="red"; 
        $januari_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari17="green"; 
        $januari_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_18==0){ 
        $warna_januari18="red"; 
        $januari_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari18="green"; 
        $januari_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_19==0){ 
        $warna_januari19="red"; 
        $januari_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari19="green"; 
        $januari_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_20==0){ 
        $warna_januari20="red"; 
        $januari_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari20="green"; 
        $januari_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_21==0){ 
        $warna_januari21="red"; 
        $januari_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari21="green"; 
        $januari_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_22==0){ 
        $warna_januari22="red"; 
        $januari_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari22="green"; 
        $januari_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_23==0){ 
        $warna_januari23="red"; 
        $januari_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari23="green"; 
        $januari_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_24==0){ 
        $warna_januari24="red"; 
        $januari_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari24="green"; 
        $januari_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_25==0){ 
        $warna_januari25="red"; 
        $januari_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari25="green"; 
        $januari_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_26==0){ 
        $warna_januari26="red"; 
        $januari_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari26="green"; 
        $januari_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_27==0){ 
        $warna_januari27="red"; 
        $januari_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari27="green"; 
        $januari_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_28==0){ 
        $warna_januari28="red"; 
        $januari_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari28="green"; 
        $januari_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_29==0){ 
        $warna_januari29="red"; 
        $januari_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari29="green"; 
        $januari_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_30==0){ 
        $warna_januari30="red"; 
        $januari_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari30="green"; 
        $januari_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($januari_31==0){ 
        $warna_januari31="red"; 
        $januari_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_januari31="green"; 
        $januari_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_januari1; ?>"><?php echo $januari_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_januari2  ?>"><?php echo $januari_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_januari3; ?>"><?php echo $januari_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_januari4; ?>"><?php echo $januari_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_januari5; ?>"><?php echo $januari_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_januari6; ?>"><?php echo $januari_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_januari7; ?>"><?php echo $januari_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_januari8; ?>"><?php echo $januari_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_januari9; ?>"><?php echo $januari_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_januari10; ?>"><?php echo $januari_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_januari11; ?>"><?php echo $januari_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_januari12; ?>"><?php echo $januari_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_januari13; ?>"><?php echo $januari_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_januari14; ?>"><?php echo $januari_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_januari15; ?>"><?php echo $januari_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_januari16; ?>"><?php echo $januari_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_januari17; ?>"><?php echo $januari_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_januari18; ?>"><?php echo $januari_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_januari19; ?>"><?php echo $januari_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_januari20; ?>"><?php echo $januari_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_januari21; ?>"><?php echo $januari_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_januari22; ?>"><?php echo $januari_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_januari23; ?>"><?php echo $januari_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_januari24; ?>"><?php echo $januari_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_januari25; ?>"><?php echo $januari_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_januari26; ?>"><?php echo $januari_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_januari27; ?>"><?php echo $januari_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_januari28; ?>"><?php echo $januari_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_januari29; ?>"><?php echo $januari_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_januari30; ?>"><?php echo $januari_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_januari31; ?>"><?php echo $januari_gambar31; ?></td>
    <td></td>
  </tr>
