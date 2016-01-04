  <tr align="center">
    <td>JUNI <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// juni 01
$juni_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-01%'"));
$juni_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-01%'"));          
// juni 02
$juni_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-02%'"));
$juni_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-02%'"));          
// juni 03
$juni_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-03%'"));
$juni_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-03%'"));          
// juni 04
$juni_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-04%'"));
$juni_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-04%'"));          
// juni 05
$juni_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-05%'"));
$juni_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-05%'"));          
// juni 06
$juni_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-06%'"));
$juni_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-06%'"));          
// juni 07
$juni_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-07%'"));
$juni_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-07%'"));          
// juni 08
$juni_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-08%'"));
$juni_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-08%'"));          
// juni 09
$juni_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-09%'"));
$juni_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-09%'"));          
// juni 10
$juni_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-10%'"));
$juni_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-10%'"));          
// juni 11
$juni_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-11%'"));
$juni_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-11%'"));          
// juni 12
$juni_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-12%'"));
$juni_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-12%'"));          
// juni 13
$juni_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-13%'"));
$juni_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-13%'"));          
// juni 14
$juni_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-14%'"));
$juni_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-14%'"));          
// juni 15
$juni_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-15%'"));
$juni_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-15%'"));          
// juni 16
$juni_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-16%'"));
$juni_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-16%'"));          
// juni 17
$juni_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-17%'"));
$juni_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-17%'"));          
// juni 18
$juni_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-18%'"));
$juni_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-18%'"));          
// juni 19
$juni_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-19%'"));
$juni_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-19%'"));          
// juni 20
$juni_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-20%'"));
$juni_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-20%'"));          
// juni 21
$juni_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-21%'"));
$juni_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-21%'"));          
// juni 22
$juni_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-22%'"));
$juni_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-22%'"));          
// juni 23
$juni_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-23%'"));
$juni_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-23%'"));          
// juni 24
$juni_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-24%'"));
$juni_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-24%'"));          
// juni 25
$juni_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-25%'"));
$juni_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-25%'"));          
// juni 26
$juni_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-26%'"));
$juni_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-26%'"));          
// juni 27
$juni_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-27%'"));
$juni_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-27%'"));          
// juni 28
$juni_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-28%'"));
$juni_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-28%'"));          
// juni 29
$juni_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-29%'"));
$juni_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-29%'"));          
// juni 30
$juni_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-30%'"));
$juni_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-30%'"));          
// juni 31
$juni_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-31%'"));
$juni_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-06-31%'"));          
        

    if($juni_1==0){ 
        $warna_juni1="red"; 
        $juni_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni1="green"; 
        $juni_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_2==0){ 
        $warna_juni2="red"; 
        $juni_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni2="green"; 
        $juni_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_3==0){ 
        $warna_juni3="red"; 
        $juni_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni3="green"; 
        $juni_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_4==0){ 
        $warna_juni4="red"; 
        $juni_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni4="green"; 
        $juni_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_5==0){ 
        $warna_juni5="red"; 
        $juni_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni5="green"; 
        $juni_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_6==0){ 
        $warna_juni6="red"; 
        $juni_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni6="green"; 
        $juni_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_7==0){ 
        $warna_juni7="red"; 
        $juni_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni7="green"; 
        $juni_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_8==0){ 
        $warna_juni8="red"; 
        $juni_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni8="green"; 
        $juni_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_9==0){ 
        $warna_juni9="red"; 
        $juni_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni9="green"; 
        $juni_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_10==0){ 
        $warna_juni10="red"; 
        $juni_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni10="green"; 
        $juni_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_11==0){ 
        $warna_juni11="red"; 
        $juni_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni11="green"; 
        $juni_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_12==0){ 
        $warna_juni12="red"; 
        $juni_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni12="green"; 
        $juni_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_13==0){ 
        $warna_juni13="red"; 
        $juni_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni13="green"; 
        $juni_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_14==0){ 
        $warna_juni14="red"; 
        $juni_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni14="green"; 
        $juni_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_15==0){ 
        $warna_juni15="red"; 
        $juni_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni15="green"; 
        $juni_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_16==0){ 
        $warna_juni16="red"; 
        $juni_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni16="green"; 
        $juni_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_17==0){ 
        $warna_juni17="red"; 
        $juni_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni17="green"; 
        $juni_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_18==0){ 
        $warna_juni18="red"; 
        $juni_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni18="green"; 
        $juni_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_19==0){ 
        $warna_juni19="red"; 
        $juni_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni19="green"; 
        $juni_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_20==0){ 
        $warna_juni20="red"; 
        $juni_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni20="green"; 
        $juni_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_21==0){ 
        $warna_juni21="red"; 
        $juni_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni21="green"; 
        $juni_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_22==0){ 
        $warna_juni22="red"; 
        $juni_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni22="green"; 
        $juni_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_23==0){ 
        $warna_juni23="red"; 
        $juni_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni23="green"; 
        $juni_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_24==0){ 
        $warna_juni24="red"; 
        $juni_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni24="green"; 
        $juni_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_25==0){ 
        $warna_juni25="red"; 
        $juni_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni25="green"; 
        $juni_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_26==0){ 
        $warna_juni26="red"; 
        $juni_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni26="green"; 
        $juni_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_27==0){ 
        $warna_juni27="red"; 
        $juni_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni27="green"; 
        $juni_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_28==0){ 
        $warna_juni28="red"; 
        $juni_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni28="green"; 
        $juni_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_29==0){ 
        $warna_juni29="red"; 
        $juni_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni29="green"; 
        $juni_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_30==0){ 
        $warna_juni30="red"; 
        $juni_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni30="green"; 
        $juni_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juni_31==0){ 
        $warna_juni31="red"; 
        $juni_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juni31="green"; 
        $juni_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_juni1; ?>"><?php echo $juni_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_juni2  ?>"><?php echo $juni_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_juni3; ?>"><?php echo $juni_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_juni4; ?>"><?php echo $juni_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_juni5; ?>"><?php echo $juni_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_juni6; ?>"><?php echo $juni_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_juni7; ?>"><?php echo $juni_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_juni8; ?>"><?php echo $juni_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_juni9; ?>"><?php echo $juni_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_juni10; ?>"><?php echo $juni_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_juni11; ?>"><?php echo $juni_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_juni12; ?>"><?php echo $juni_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_juni13; ?>"><?php echo $juni_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_juni14; ?>"><?php echo $juni_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_juni15; ?>"><?php echo $juni_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_juni16; ?>"><?php echo $juni_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_juni17; ?>"><?php echo $juni_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_juni18; ?>"><?php echo $juni_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_juni19; ?>"><?php echo $juni_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_juni20; ?>"><?php echo $juni_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_juni21; ?>"><?php echo $juni_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_juni22; ?>"><?php echo $juni_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_juni23; ?>"><?php echo $juni_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_juni24; ?>"><?php echo $juni_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_juni25; ?>"><?php echo $juni_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_juni26; ?>"><?php echo $juni_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_juni27; ?>"><?php echo $juni_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_juni28; ?>"><?php echo $juni_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_juni29; ?>"><?php echo $juni_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_juni30; ?>"><?php echo $juni_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_juni31; ?>"><?php echo $juni_gambar31; ?></td>
    <td></td>
  </tr>
