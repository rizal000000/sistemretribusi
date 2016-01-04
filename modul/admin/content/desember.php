  <tr align="center">
    <td>DESEMBER <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// desember 01
$desember_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-01%'"));
$desember_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-01%'"));          
// desember 02
$desember_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-02%'"));
$desember_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-02%'"));          
// desember 03
$desember_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-03%'"));
$desember_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-03%'"));          
// desember 04
$desember_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-04%'"));
$desember_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-04%'"));          
// desember 05
$desember_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-05%'"));
$desember_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-05%'"));          
// desember 06
$desember_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-06%'"));
$desember_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-06%'"));          
// desember 07
$desember_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-07%'"));
$desember_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-07%'"));          
// desember 08
$desember_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-08%'"));
$desember_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-08%'"));          
// desember 09
$desember_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-09%'"));
$desember_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-09%'"));          
// desember 10
$desember_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-10%'"));
$desember_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-10%'"));          
// desember 11
$desember_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-11%'"));
$desember_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-11%'"));          
// desember 12
$desember_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-12%'"));
$desember_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-12%'"));          
// desember 13
$desember_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-13%'"));
$desember_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-13%'"));          
// desember 14
$desember_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-14%'"));
$desember_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-14%'"));          
// desember 15
$desember_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-15%'"));
$desember_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-15%'"));          
// desember 16
$desember_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-16%'"));
$desember_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-16%'"));          
// desember 17
$desember_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-17%'"));
$desember_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-17%'"));          
// desember 18
$desember_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-18%'"));
$desember_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-18%'"));          
// desember 19
$desember_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-19%'"));
$desember_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-19%'"));          
// desember 20
$desember_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-20%'"));
$desember_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-20%'"));          
// desember 21
$desember_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-21%'"));
$desember_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-21%'"));          
// desember 22
$desember_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-22%'"));
$desember_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-22%'"));          
// desember 23
$desember_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-23%'"));
$desember_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-23%'"));          
// desember 24
$desember_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-24%'"));
$desember_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-24%'"));          
// desember 25
$desember_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-25%'"));
$desember_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-25%'"));          
// desember 26
$desember_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-26%'"));
$desember_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-26%'"));          
// desember 27
$desember_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-27%'"));
$desember_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-27%'"));          
// desember 28
$desember_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-28%'"));
$desember_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-28%'"));          
// desember 29
$desember_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-29%'"));
$desember_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-29%'"));          
// desember 30
$desember_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-30%'"));
$desember_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-30%'"));          
// desember 31
$desember_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-31%'"));
$desember_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-12-31%'"));          


        

    if($desember_1==0){ 
        $warna_desember1="red"; 
        $desember_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember1="green"; 
        $desember_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_2==0){ 
        $warna_desember2="red"; 
        $desember_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember2="green"; 
        $desember_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_3==0){ 
        $warna_desember3="red"; 
        $desember_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember3="green"; 
        $desember_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_4==0){ 
        $warna_desember4="red"; 
        $desember_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember4="green"; 
        $desember_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_5==0){ 
        $warna_desember5="red"; 
        $desember_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember5="green"; 
        $desember_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_6==0){ 
        $warna_desember6="red"; 
        $desember_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember6="green"; 
        $desember_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_7==0){ 
        $warna_desember7="red"; 
        $desember_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember7="green"; 
        $desember_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_8==0){ 
        $warna_desember8="red"; 
        $desember_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember8="green"; 
        $desember_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_9==0){ 
        $warna_desember9="red"; 
        $desember_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember9="green"; 
        $desember_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_10==0){ 
        $warna_desember10="red"; 
        $desember_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember10="green"; 
        $desember_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_11==0){ 
        $warna_desember11="red"; 
        $desember_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember11="green"; 
        $desember_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_12==0){ 
        $warna_desember12="red"; 
        $desember_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember12="green"; 
        $desember_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_13==0){ 
        $warna_desember13="red"; 
        $desember_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember13="green"; 
        $desember_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_14==0){ 
        $warna_desember14="red"; 
        $desember_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember14="green"; 
        $desember_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_15==0){ 
        $warna_desember15="red"; 
        $desember_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember15="green"; 
        $desember_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_16==0){ 
        $warna_desember16="red"; 
        $desember_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember16="green"; 
        $desember_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_17==0){ 
        $warna_desember17="red"; 
        $desember_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember17="green"; 
        $desember_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_18==0){ 
        $warna_desember18="red"; 
        $desember_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember18="green"; 
        $desember_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_19==0){ 
        $warna_desember19="red"; 
        $desember_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember19="green"; 
        $desember_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_20==0){ 
        $warna_desember20="red"; 
        $desember_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember20="green"; 
        $desember_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_21==0){ 
        $warna_desember21="red"; 
        $desember_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember21="green"; 
        $desember_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_22==0){ 
        $warna_desember22="red"; 
        $desember_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember22="green"; 
        $desember_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_23==0){ 
        $warna_desember23="red"; 
        $desember_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember23="green"; 
        $desember_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_24==0){ 
        $warna_desember24="red"; 
        $desember_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember24="green"; 
        $desember_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_25==0){ 
        $warna_desember25="red"; 
        $desember_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember25="green"; 
        $desember_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_26==0){ 
        $warna_desember26="red"; 
        $desember_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember26="green"; 
        $desember_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_27==0){ 
        $warna_desember27="red"; 
        $desember_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember27="green"; 
        $desember_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_28==0){ 
        $warna_desember28="red"; 
        $desember_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember28="green"; 
        $desember_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_29==0){ 
        $warna_desember29="red"; 
        $desember_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember29="green"; 
        $desember_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_30==0){ 
        $warna_desember30="red"; 
        $desember_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember30="green"; 
        $desember_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($desember_31==0){ 
        $warna_desember31="red"; 
        $desember_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_desember31="green"; 
        $desember_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_desember1; ?>"><?php echo $desember_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_desember2  ?>"><?php echo $desember_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_desember3; ?>"><?php echo $desember_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_desember4; ?>"><?php echo $desember_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_desember5; ?>"><?php echo $desember_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_desember6; ?>"><?php echo $desember_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_desember7; ?>"><?php echo $desember_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_desember8; ?>"><?php echo $desember_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_desember9; ?>"><?php echo $desember_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_desember10; ?>"><?php echo $desember_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_desember11; ?>"><?php echo $desember_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_desember12; ?>"><?php echo $desember_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_desember13; ?>"><?php echo $desember_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_desember14; ?>"><?php echo $desember_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_desember15; ?>"><?php echo $desember_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_desember16; ?>"><?php echo $desember_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_desember17; ?>"><?php echo $desember_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_desember18; ?>"><?php echo $desember_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_desember19; ?>"><?php echo $desember_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_desember20; ?>"><?php echo $desember_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_desember21; ?>"><?php echo $desember_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_desember22; ?>"><?php echo $desember_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_desember23; ?>"><?php echo $desember_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_desember24; ?>"><?php echo $desember_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_desember25; ?>"><?php echo $desember_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_desember26; ?>"><?php echo $desember_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_desember27; ?>"><?php echo $desember_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_desember28; ?>"><?php echo $desember_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_desember29; ?>"><?php echo $desember_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_desember30; ?>"><?php echo $desember_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_desember31; ?>"><?php echo $desember_gambar31; ?></td>
    <td></td>
  </tr>
