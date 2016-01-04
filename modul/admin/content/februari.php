  <tr align="center">
    <td>FEBRUARI <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// februari 01
$februari_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-01%'"));
$februari_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-01%'"));          
// februari 02
$februari_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-02%'"));
$februari_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-02%'"));          
// februari 03
$februari_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-03%'"));
$februari_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-03%'"));          
// februari 04
$februari_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-04%'"));
$februari_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-04%'"));          
// februari 05
$februari_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-05%'"));
$februari_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-05%'"));          
// februari 06
$februari_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-06%'"));
$februari_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-06%'"));          
// februari 07
$februari_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-07%'"));
$februari_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-07%'"));          
// februari 08
$februari_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-08%'"));
$februari_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-08%'"));          
// februari 09
$februari_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-09%'"));
$februari_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-09%'"));          
// februari 10
$februari_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-10%'"));
$februari_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-10%'"));          
// februari 11
$februari_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-11%'"));
$februari_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-11%'"));          
// februari 12
$februari_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-12%'"));
$februari_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-12%'"));          
// februari 13
$februari_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-13%'"));
$februari_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-13%'"));          
// februari 14
$februari_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-14%'"));
$februari_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-14%'"));          
// februari 15
$februari_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-15%'"));
$februari_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-15%'"));          
// februari 16
$februari_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-16%'"));
$februari_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-16%'"));          
// februari 17
$februari_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-17%'"));
$februari_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-17%'"));          
// februari 18
$februari_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-18%'"));
$februari_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-18%'"));          
// februari 19
$februari_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-19%'"));
$februari_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-19%'"));          
// februari 20
$februari_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-20%'"));
$februari_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-20%'"));          
// februari 21
$februari_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-21%'"));
$februari_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-21%'"));          
// februari 22
$februari_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-22%'"));
$februari_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-22%'"));          
// februari 23
$februari_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-23%'"));
$februari_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-23%'"));          
// februari 24
$februari_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-24%'"));
$februari_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-24%'"));          
// februari 25
$februari_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-25%'"));
$februari_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-25%'"));          
// februari 26
$februari_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-26%'"));
$februari_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-26%'"));          
// februari 27
$februari_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-27%'"));
$februari_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-27%'"));          
// februari 28
$februari_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-28%'"));
$februari_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-28%'"));          
// februari 29
$februari_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-29%'"));
$februari_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-29%'"));          
// februari 30
$februari_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-30%'"));
$februari_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-30%'"));          
// februari 31
$februari_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-31%'"));
$februari_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-02-31%'"));          

        

    if($februari_1==0){ 
        $warna_februari1="red"; 
        $februari_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari1="green"; 
        $februari_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_2==0){ 
        $warna_februari2="red"; 
        $februari_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari2="green"; 
        $februari_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_3==0){ 
        $warna_februari3="red"; 
        $februari_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari3="green"; 
        $februari_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_4==0){ 
        $warna_februari4="red"; 
        $februari_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari4="green"; 
        $februari_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_5==0){ 
        $warna_februari5="red"; 
        $februari_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari5="green"; 
        $februari_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_6==0){ 
        $warna_februari6="red"; 
        $februari_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari6="green"; 
        $februari_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_7==0){ 
        $warna_februari7="red"; 
        $februari_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari7="green"; 
        $februari_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_8==0){ 
        $warna_februari8="red"; 
        $februari_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari8="green"; 
        $februari_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_9==0){ 
        $warna_februari9="red"; 
        $februari_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari9="green"; 
        $februari_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_10==0){ 
        $warna_februari10="red"; 
        $februari_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari10="green"; 
        $februari_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_11==0){ 
        $warna_februari11="red"; 
        $februari_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari11="green"; 
        $februari_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_12==0){ 
        $warna_februari12="red"; 
        $februari_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari12="green"; 
        $februari_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_13==0){ 
        $warna_februari13="red"; 
        $februari_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari13="green"; 
        $februari_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_14==0){ 
        $warna_februari14="red"; 
        $februari_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari14="green"; 
        $februari_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_15==0){ 
        $warna_februari15="red"; 
        $februari_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari15="green"; 
        $februari_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_16==0){ 
        $warna_februari16="red"; 
        $februari_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari16="green"; 
        $februari_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_17==0){ 
        $warna_februari17="red"; 
        $februari_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari17="green"; 
        $februari_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_18==0){ 
        $warna_februari18="red"; 
        $februari_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari18="green"; 
        $februari_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_19==0){ 
        $warna_februari19="red"; 
        $februari_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari19="green"; 
        $februari_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_20==0){ 
        $warna_februari20="red"; 
        $februari_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari20="green"; 
        $februari_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_21==0){ 
        $warna_februari21="red"; 
        $februari_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari21="green"; 
        $februari_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_22==0){ 
        $warna_februari22="red"; 
        $februari_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari22="green"; 
        $februari_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_23==0){ 
        $warna_februari23="red"; 
        $februari_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari23="green"; 
        $februari_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_24==0){ 
        $warna_februari24="red"; 
        $februari_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari24="green"; 
        $februari_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_25==0){ 
        $warna_februari25="red"; 
        $februari_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari25="green"; 
        $februari_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_26==0){ 
        $warna_februari26="red"; 
        $februari_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari26="green"; 
        $februari_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_27==0){ 
        $warna_februari27="red"; 
        $februari_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari27="green"; 
        $februari_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_28==0){ 
        $warna_februari28="red"; 
        $februari_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari28="green"; 
        $februari_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_29==0){ 
        $warna_februari29="red"; 
        $februari_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari29="green"; 
        $februari_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_30==0){ 
        $warna_februari30="red"; 
        $februari_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari30="green"; 
        $februari_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($februari_31==0){ 
        $warna_februari31="red"; 
        $februari_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_februari31="green"; 
        $februari_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_februari1; ?>"><?php echo $februari_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_februari2  ?>"><?php echo $februari_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_februari3; ?>"><?php echo $februari_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_februari4; ?>"><?php echo $februari_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_februari5; ?>"><?php echo $februari_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_februari6; ?>"><?php echo $februari_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_februari7; ?>"><?php echo $februari_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_februari8; ?>"><?php echo $februari_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_februari9; ?>"><?php echo $februari_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_februari10; ?>"><?php echo $februari_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_februari11; ?>"><?php echo $februari_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_februari12; ?>"><?php echo $februari_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_februari13; ?>"><?php echo $februari_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_februari14; ?>"><?php echo $februari_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_februari15; ?>"><?php echo $februari_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_februari16; ?>"><?php echo $februari_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_februari17; ?>"><?php echo $februari_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_februari18; ?>"><?php echo $februari_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_februari19; ?>"><?php echo $februari_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_februari20; ?>"><?php echo $februari_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_februari21; ?>"><?php echo $februari_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_februari22; ?>"><?php echo $februari_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_februari23; ?>"><?php echo $februari_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_februari24; ?>"><?php echo $februari_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_februari25; ?>"><?php echo $februari_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_februari26; ?>"><?php echo $februari_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_februari27; ?>"><?php echo $februari_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_februari28; ?>"><?php echo $februari_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_februari29; ?>"><?php echo $februari_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_februari30; ?>"><?php echo $februari_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_februari31; ?>"><?php echo $februari_gambar31; ?></td>
    <td></td>
  </tr>
