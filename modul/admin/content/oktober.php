  <tr align="center">
    <td>OKTOBER <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// oktober 01
$oktober_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-01%'"));
$oktober_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-01%'"));          
// oktober 02
$oktober_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-02%'"));
$oktober_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-02%'"));          
// oktober 03
$oktober_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-03%'"));
$oktober_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-03%'"));          
// oktober 04
$oktober_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-04%'"));
$oktober_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-04%'"));          
// oktober 05
$oktober_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-05%'"));
$oktober_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-05%'"));          
// oktober 06
$oktober_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-06%'"));
$oktober_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-06%'"));          
// oktober 07
$oktober_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-07%'"));
$oktober_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-07%'"));          
// oktober 08
$oktober_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-08%'"));
$oktober_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-08%'"));          
// oktober 09
$oktober_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-09%'"));
$oktober_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-09%'"));          
// oktober 10
$oktober_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-10%'"));
$oktober_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-10%'"));          
// oktober 11
$oktober_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-11%'"));
$oktober_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-11%'"));          
// oktober 12
$oktober_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-12%'"));
$oktober_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-12%'"));          
// oktober 13
$oktober_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-13%'"));
$oktober_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-13%'"));          
// oktober 14
$oktober_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-14%'"));
$oktober_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-14%'"));          
// oktober 15
$oktober_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-15%'"));
$oktober_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-15%'"));          
// oktober 16
$oktober_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-16%'"));
$oktober_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-16%'"));          
// oktober 17
$oktober_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-17%'"));
$oktober_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-17%'"));          
// oktober 18
$oktober_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-18%'"));
$oktober_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-18%'"));          
// oktober 19
$oktober_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-19%'"));
$oktober_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-19%'"));          
// oktober 20
$oktober_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-20%'"));
$oktober_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-20%'"));          
// oktober 21
$oktober_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-21%'"));
$oktober_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-21%'"));          
// oktober 22
$oktober_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-22%'"));
$oktober_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-22%'"));          
// oktober 23
$oktober_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-23%'"));
$oktober_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-23%'"));          
// oktober 24
$oktober_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-24%'"));
$oktober_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-24%'"));          
// oktober 25
$oktober_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-25%'"));
$oktober_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-25%'"));          
// oktober 26
$oktober_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-26%'"));
$oktober_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-26%'"));          
// oktober 27
$oktober_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-27%'"));
$oktober_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-27%'"));          
// oktober 28
$oktober_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-28%'"));
$oktober_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-28%'"));          
// oktober 29
$oktober_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-29%'"));
$oktober_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-29%'"));          
// oktober 30
$oktober_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-30%'"));
$oktober_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-30%'"));          
// oktober 31
$oktober_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-31%'"));
$oktober_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-10-31%'"));          

        

    if($oktober_1==0){ 
        $warna_oktober1="red"; 
        $oktober_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober1="green"; 
        $oktober_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_2==0){ 
        $warna_oktober2="red"; 
        $oktober_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober2="green"; 
        $oktober_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_3==0){ 
        $warna_oktober3="red"; 
        $oktober_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober3="green"; 
        $oktober_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_4==0){ 
        $warna_oktober4="red"; 
        $oktober_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober4="green"; 
        $oktober_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_5==0){ 
        $warna_oktober5="red"; 
        $oktober_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober5="green"; 
        $oktober_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_6==0){ 
        $warna_oktober6="red"; 
        $oktober_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober6="green"; 
        $oktober_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_7==0){ 
        $warna_oktober7="red"; 
        $oktober_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober7="green"; 
        $oktober_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_8==0){ 
        $warna_oktober8="red"; 
        $oktober_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober8="green"; 
        $oktober_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_9==0){ 
        $warna_oktober9="red"; 
        $oktober_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober9="green"; 
        $oktober_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_10==0){ 
        $warna_oktober10="red"; 
        $oktober_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober10="green"; 
        $oktober_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_11==0){ 
        $warna_oktober11="red"; 
        $oktober_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober11="green"; 
        $oktober_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_12==0){ 
        $warna_oktober12="red"; 
        $oktober_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober12="green"; 
        $oktober_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_13==0){ 
        $warna_oktober13="red"; 
        $oktober_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober13="green"; 
        $oktober_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_14==0){ 
        $warna_oktober14="red"; 
        $oktober_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober14="green"; 
        $oktober_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_15==0){ 
        $warna_oktober15="red"; 
        $oktober_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober15="green"; 
        $oktober_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_16==0){ 
        $warna_oktober16="red"; 
        $oktober_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober16="green"; 
        $oktober_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_17==0){ 
        $warna_oktober17="red"; 
        $oktober_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober17="green"; 
        $oktober_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_18==0){ 
        $warna_oktober18="red"; 
        $oktober_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober18="green"; 
        $oktober_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_19==0){ 
        $warna_oktober19="red"; 
        $oktober_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober19="green"; 
        $oktober_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_20==0){ 
        $warna_oktober20="red"; 
        $oktober_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober20="green"; 
        $oktober_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_21==0){ 
        $warna_oktober21="red"; 
        $oktober_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober21="green"; 
        $oktober_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_22==0){ 
        $warna_oktober22="red"; 
        $oktober_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober22="green"; 
        $oktober_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_23==0){ 
        $warna_oktober23="red"; 
        $oktober_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober23="green"; 
        $oktober_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_24==0){ 
        $warna_oktober24="red"; 
        $oktober_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober24="green"; 
        $oktober_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_25==0){ 
        $warna_oktober25="red"; 
        $oktober_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober25="green"; 
        $oktober_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_26==0){ 
        $warna_oktober26="red"; 
        $oktober_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober26="green"; 
        $oktober_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_27==0){ 
        $warna_oktober27="red"; 
        $oktober_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober27="green"; 
        $oktober_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_28==0){ 
        $warna_oktober28="red"; 
        $oktober_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober28="green"; 
        $oktober_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_29==0){ 
        $warna_oktober29="red"; 
        $oktober_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober29="green"; 
        $oktober_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_30==0){ 
        $warna_oktober30="red"; 
        $oktober_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober30="green"; 
        $oktober_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($oktober_31==0){ 
        $warna_oktober31="red"; 
        $oktober_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_oktober31="green"; 
        $oktober_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_oktober1; ?>"><?php echo $oktober_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_oktober2  ?>"><?php echo $oktober_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_oktober3; ?>"><?php echo $oktober_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_oktober4; ?>"><?php echo $oktober_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_oktober5; ?>"><?php echo $oktober_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_oktober6; ?>"><?php echo $oktober_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_oktober7; ?>"><?php echo $oktober_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_oktober8; ?>"><?php echo $oktober_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_oktober9; ?>"><?php echo $oktober_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_oktober10; ?>"><?php echo $oktober_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_oktober11; ?>"><?php echo $oktober_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_oktober12; ?>"><?php echo $oktober_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_oktober13; ?>"><?php echo $oktober_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_oktober14; ?>"><?php echo $oktober_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_oktober15; ?>"><?php echo $oktober_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_oktober16; ?>"><?php echo $oktober_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_oktober17; ?>"><?php echo $oktober_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_oktober18; ?>"><?php echo $oktober_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_oktober19; ?>"><?php echo $oktober_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_oktober20; ?>"><?php echo $oktober_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_oktober21; ?>"><?php echo $oktober_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_oktober22; ?>"><?php echo $oktober_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_oktober23; ?>"><?php echo $oktober_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_oktober24; ?>"><?php echo $oktober_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_oktober25; ?>"><?php echo $oktober_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_oktober26; ?>"><?php echo $oktober_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_oktober27; ?>"><?php echo $oktober_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_oktober28; ?>"><?php echo $oktober_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_oktober29; ?>"><?php echo $oktober_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_oktober30; ?>"><?php echo $oktober_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_oktober31; ?>"><?php echo $oktober_gambar31; ?></td>
    <td></td>
  </tr>
