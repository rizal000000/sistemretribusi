  <tr align="center">
    <td>MEI <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// mei 01
$mei_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-01%'"));
$mei_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-01%'"));          
// mei 02
$mei_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-02%'"));
$mei_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-02%'"));          
// mei 03
$mei_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-03%'"));
$mei_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-03%'"));          
// mei 04
$mei_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-04%'"));
$mei_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-04%'"));          
// mei 05
$mei_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-05%'"));
$mei_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-05%'"));          
// mei 06
$mei_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-06%'"));
$mei_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-06%'"));          
// mei 07
$mei_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-07%'"));
$mei_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-07%'"));          
// mei 08
$mei_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-08%'"));
$mei_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-08%'"));          
// mei 09
$mei_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-09%'"));
$mei_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-09%'"));          
// mei 10
$mei_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-10%'"));
$mei_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-10%'"));          
// mei 11
$mei_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-11%'"));
$mei_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-11%'"));          
// mei 12
$mei_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-12%'"));
$mei_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-12%'"));          
// mei 13
$mei_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-13%'"));
$mei_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-13%'"));          
// mei 14
$mei_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-14%'"));
$mei_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-14%'"));          
// mei 15
$mei_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-15%'"));
$mei_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-15%'"));          
// mei 16
$mei_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-16%'"));
$mei_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-16%'"));          
// mei 17
$mei_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-17%'"));
$mei_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-17%'"));          
// mei 18
$mei_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-18%'"));
$mei_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-18%'"));          
// mei 19
$mei_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-19%'"));
$mei_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-19%'"));          
// mei 20
$mei_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-20%'"));
$mei_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-20%'"));          
// mei 21
$mei_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-21%'"));
$mei_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-21%'"));          
// mei 22
$mei_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-22%'"));
$mei_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-22%'"));          
// mei 23
$mei_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-23%'"));
$mei_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-23%'"));          
// mei 24
$mei_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-24%'"));
$mei_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-24%'"));          
// mei 25
$mei_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-25%'"));
$mei_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-25%'"));          
// mei 26
$mei_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-26%'"));
$mei_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-26%'"));          
// mei 27
$mei_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-27%'"));
$mei_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-27%'"));          
// mei 28
$mei_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-28%'"));
$mei_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-28%'"));          
// mei 29
$mei_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-29%'"));
$mei_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-29%'"));          
// mei 30
$mei_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-30%'"));
$mei_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-30%'"));          
// mei 31
$mei_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-31%'"));
$mei_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-05-31%'"));          

        

    if($mei_1==0){ 
        $warna_mei1="red"; 
        $mei_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei1="green"; 
        $mei_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_2==0){ 
        $warna_mei2="red"; 
        $mei_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei2="green"; 
        $mei_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_3==0){ 
        $warna_mei3="red"; 
        $mei_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei3="green"; 
        $mei_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_4==0){ 
        $warna_mei4="red"; 
        $mei_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei4="green"; 
        $mei_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_5==0){ 
        $warna_mei5="red"; 
        $mei_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei5="green"; 
        $mei_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_6==0){ 
        $warna_mei6="red"; 
        $mei_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei6="green"; 
        $mei_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_7==0){ 
        $warna_mei7="red"; 
        $mei_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei7="green"; 
        $mei_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_8==0){ 
        $warna_mei8="red"; 
        $mei_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei8="green"; 
        $mei_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_9==0){ 
        $warna_mei9="red"; 
        $mei_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei9="green"; 
        $mei_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_10==0){ 
        $warna_mei10="red"; 
        $mei_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei10="green"; 
        $mei_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_11==0){ 
        $warna_mei11="red"; 
        $mei_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei11="green"; 
        $mei_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_12==0){ 
        $warna_mei12="red"; 
        $mei_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei12="green"; 
        $mei_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_13==0){ 
        $warna_mei13="red"; 
        $mei_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei13="green"; 
        $mei_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_14==0){ 
        $warna_mei14="red"; 
        $mei_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei14="green"; 
        $mei_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_15==0){ 
        $warna_mei15="red"; 
        $mei_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei15="green"; 
        $mei_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_16==0){ 
        $warna_mei16="red"; 
        $mei_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei16="green"; 
        $mei_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_17==0){ 
        $warna_mei17="red"; 
        $mei_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei17="green"; 
        $mei_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_18==0){ 
        $warna_mei18="red"; 
        $mei_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei18="green"; 
        $mei_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_19==0){ 
        $warna_mei19="red"; 
        $mei_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei19="green"; 
        $mei_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_20==0){ 
        $warna_mei20="red"; 
        $mei_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei20="green"; 
        $mei_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_21==0){ 
        $warna_mei21="red"; 
        $mei_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei21="green"; 
        $mei_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_22==0){ 
        $warna_mei22="red"; 
        $mei_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei22="green"; 
        $mei_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_23==0){ 
        $warna_mei23="red"; 
        $mei_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei23="green"; 
        $mei_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_24==0){ 
        $warna_mei24="red"; 
        $mei_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei24="green"; 
        $mei_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_25==0){ 
        $warna_mei25="red"; 
        $mei_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei25="green"; 
        $mei_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_26==0){ 
        $warna_mei26="red"; 
        $mei_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei26="green"; 
        $mei_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_27==0){ 
        $warna_mei27="red"; 
        $mei_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei27="green"; 
        $mei_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_28==0){ 
        $warna_mei28="red"; 
        $mei_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei28="green"; 
        $mei_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_29==0){ 
        $warna_mei29="red"; 
        $mei_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei29="green"; 
        $mei_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_30==0){ 
        $warna_mei30="red"; 
        $mei_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei30="green"; 
        $mei_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($mei_31==0){ 
        $warna_mei31="red"; 
        $mei_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_mei31="green"; 
        $mei_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_mei1; ?>"><?php echo $mei_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_mei2  ?>"><?php echo $mei_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_mei3; ?>"><?php echo $mei_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_mei4; ?>"><?php echo $mei_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_mei5; ?>"><?php echo $mei_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_mei6; ?>"><?php echo $mei_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_mei7; ?>"><?php echo $mei_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_mei8; ?>"><?php echo $mei_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_mei9; ?>"><?php echo $mei_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_mei10; ?>"><?php echo $mei_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_mei11; ?>"><?php echo $mei_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_mei12; ?>"><?php echo $mei_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_mei13; ?>"><?php echo $mei_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_mei14; ?>"><?php echo $mei_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_mei15; ?>"><?php echo $mei_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_mei16; ?>"><?php echo $mei_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_mei17; ?>"><?php echo $mei_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_mei18; ?>"><?php echo $mei_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_mei19; ?>"><?php echo $mei_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_mei20; ?>"><?php echo $mei_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_mei21; ?>"><?php echo $mei_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_mei22; ?>"><?php echo $mei_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_mei23; ?>"><?php echo $mei_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_mei24; ?>"><?php echo $mei_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_mei25; ?>"><?php echo $mei_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_mei26; ?>"><?php echo $mei_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_mei27; ?>"><?php echo $mei_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_mei28; ?>"><?php echo $mei_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_mei29; ?>"><?php echo $mei_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_mei30; ?>"><?php echo $mei_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_mei31; ?>"><?php echo $mei_gambar31; ?></td>
    <td></td>
  </tr>
