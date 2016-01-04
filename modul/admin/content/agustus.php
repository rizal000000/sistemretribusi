  <tr align="center">
    <td>AGUSTUS<?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// agustus 01
$agustus_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-01%'"));
$agustus_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-01%'"));          
// agustus 02
$agustus_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-02%'"));
$agustus_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-02%'"));          
// agustus 03
$agustus_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-03%'"));
$agustus_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-03%'"));          
// agustus 04
$agustus_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-04%'"));
$agustus_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-04%'"));          
// agustus 05
$agustus_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-05%'"));
$agustus_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-05%'"));          
// agustus 06
$agustus_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-06%'"));
$agustus_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-06%'"));          
// agustus 07
$agustus_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-07%'"));
$agustus_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-07%'"));          
// agustus 08
$agustus_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-08%'"));
$agustus_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-08%'"));          
// agustus 09
$agustus_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-09%'"));
$agustus_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-09%'"));          
// agustus 10
$agustus_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-10%'"));
$agustus_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-10%'"));          
// agustus 11
$agustus_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-11%'"));
$agustus_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-11%'"));          
// agustus 12
$agustus_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-12%'"));
$agustus_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-12%'"));          
// agustus 13
$agustus_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-13%'"));
$agustus_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-13%'"));          
// agustus 14
$agustus_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-14%'"));
$agustus_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-14%'"));          
// agustus 15
$agustus_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-15%'"));
$agustus_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-15%'"));          
// agustus 16
$agustus_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-16%'"));
$agustus_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-16%'"));          
// agustus 17
$agustus_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-17%'"));
$agustus_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-17%'"));          
// agustus 18
$agustus_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-18%'"));
$agustus_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-18%'"));          
// agustus 19
$agustus_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-19%'"));
$agustus_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-19%'"));          
// agustus 20
$agustus_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-20%'"));
$agustus_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-20%'"));          
// agustus 21
$agustus_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-21%'"));
$agustus_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-21%'"));          
// agustus 22
$agustus_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-22%'"));
$agustus_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-22%'"));          
// agustus 23
$agustus_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-23%'"));
$agustus_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-23%'"));          
// agustus 24
$agustus_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-24%'"));
$agustus_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-24%'"));          
// agustus 25
$agustus_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-25%'"));
$agustus_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-25%'"));          
// agustus 26
$agustus_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-26%'"));
$agustus_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-26%'"));          
// agustus 27
$agustus_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-27%'"));
$agustus_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-27%'"));          
// agustus 28
$agustus_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-28%'"));
$agustus_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-28%'"));          
// agustus 29
$agustus_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-29%'"));
$agustus_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-29%'"));          
// agustus 30
$agustus_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-30%'"));
$agustus_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-30%'"));          
// agustus 31
$agustus_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-31%'"));
$agustus_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-08-31%'"));          

        

    if($agustus_1==0){ 
        $warna_agustus1="red"; 
        $agustus_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus1="green"; 
        $agustus_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_2==0){ 
        $warna_agustus2="red"; 
        $agustus_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus2="green"; 
        $agustus_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_3==0){ 
        $warna_agustus3="red"; 
        $agustus_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus3="green"; 
        $agustus_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_4==0){ 
        $warna_agustus4="red"; 
        $agustus_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus4="green"; 
        $agustus_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_5==0){ 
        $warna_agustus5="red"; 
        $agustus_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus5="green"; 
        $agustus_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_6==0){ 
        $warna_agustus6="red"; 
        $agustus_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus6="green"; 
        $agustus_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_7==0){ 
        $warna_agustus7="red"; 
        $agustus_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus7="green"; 
        $agustus_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_8==0){ 
        $warna_agustus8="red"; 
        $agustus_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus8="green"; 
        $agustus_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_9==0){ 
        $warna_agustus9="red"; 
        $agustus_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus9="green"; 
        $agustus_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_10==0){ 
        $warna_agustus10="red"; 
        $agustus_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus10="green"; 
        $agustus_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_11==0){ 
        $warna_agustus11="red"; 
        $agustus_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus11="green"; 
        $agustus_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_12==0){ 
        $warna_agustus12="red"; 
        $agustus_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus12="green"; 
        $agustus_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_13==0){ 
        $warna_agustus13="red"; 
        $agustus_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus13="green"; 
        $agustus_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_14==0){ 
        $warna_agustus14="red"; 
        $agustus_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus14="green"; 
        $agustus_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_15==0){ 
        $warna_agustus15="red"; 
        $agustus_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus15="green"; 
        $agustus_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_16==0){ 
        $warna_agustus16="red"; 
        $agustus_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus16="green"; 
        $agustus_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_17==0){ 
        $warna_agustus17="red"; 
        $agustus_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus17="green"; 
        $agustus_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_18==0){ 
        $warna_agustus18="red"; 
        $agustus_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus18="green"; 
        $agustus_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_19==0){ 
        $warna_agustus19="red"; 
        $agustus_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus19="green"; 
        $agustus_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_20==0){ 
        $warna_agustus20="red"; 
        $agustus_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus20="green"; 
        $agustus_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_21==0){ 
        $warna_agustus21="red"; 
        $agustus_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus21="green"; 
        $agustus_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_22==0){ 
        $warna_agustus22="red"; 
        $agustus_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus22="green"; 
        $agustus_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_23==0){ 
        $warna_agustus23="red"; 
        $agustus_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus23="green"; 
        $agustus_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_24==0){ 
        $warna_agustus24="red"; 
        $agustus_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus24="green"; 
        $agustus_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_25==0){ 
        $warna_agustus25="red"; 
        $agustus_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus25="green"; 
        $agustus_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_26==0){ 
        $warna_agustus26="red"; 
        $agustus_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus26="green"; 
        $agustus_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_27==0){ 
        $warna_agustus27="red"; 
        $agustus_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus27="green"; 
        $agustus_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_28==0){ 
        $warna_agustus28="red"; 
        $agustus_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus28="green"; 
        $agustus_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_29==0){ 
        $warna_agustus29="red"; 
        $agustus_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus29="green"; 
        $agustus_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_30==0){ 
        $warna_agustus30="red"; 
        $agustus_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus30="green"; 
        $agustus_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($agustus_31==0){ 
        $warna_agustus31="red"; 
        $agustus_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_agustus31="green"; 
        $agustus_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_agustus1; ?>"><?php echo $agustus_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_agustus2  ?>"><?php echo $agustus_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_agustus3; ?>"><?php echo $agustus_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_agustus4; ?>"><?php echo $agustus_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_agustus5; ?>"><?php echo $agustus_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_agustus6; ?>"><?php echo $agustus_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_agustus7; ?>"><?php echo $agustus_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_agustus8; ?>"><?php echo $agustus_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_agustus9; ?>"><?php echo $agustus_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_agustus10; ?>"><?php echo $agustus_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_agustus11; ?>"><?php echo $agustus_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_agustus12; ?>"><?php echo $agustus_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_agustus13; ?>"><?php echo $agustus_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_agustus14; ?>"><?php echo $agustus_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_agustus15; ?>"><?php echo $agustus_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_agustus16; ?>"><?php echo $agustus_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_agustus17; ?>"><?php echo $agustus_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_agustus18; ?>"><?php echo $agustus_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_agustus19; ?>"><?php echo $agustus_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_agustus20; ?>"><?php echo $agustus_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_agustus21; ?>"><?php echo $agustus_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_agustus22; ?>"><?php echo $agustus_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_agustus23; ?>"><?php echo $agustus_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_agustus24; ?>"><?php echo $agustus_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_agustus25; ?>"><?php echo $agustus_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_agustus26; ?>"><?php echo $agustus_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_agustus27; ?>"><?php echo $agustus_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_agustus28; ?>"><?php echo $agustus_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_agustus29; ?>"><?php echo $agustus_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_agustus30; ?>"><?php echo $agustus_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_agustus31; ?>"><?php echo $agustus_gambar31; ?></td>
    <td></td>
  </tr>
