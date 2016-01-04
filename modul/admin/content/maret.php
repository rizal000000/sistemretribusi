  <tr align="center">
    <td>MARET <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// maret 01
$maret_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-01%'"));
$maret_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-01%'"));          
// maret 02
$maret_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-02%'"));
$maret_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-02%'"));          
// maret 03
$maret_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-03%'"));
$maret_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-03%'"));          
// maret 04
$maret_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-04%'"));
$maret_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-04%'"));          
// maret 05
$maret_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-05%'"));
$maret_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-05%'"));          
// maret 06
$maret_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-06%'"));
$maret_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-06%'"));          
// maret 07
$maret_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-07%'"));
$maret_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-07%'"));          
// maret 08
$maret_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-08%'"));
$maret_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-08%'"));          
// maret 09
$maret_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-09%'"));
$maret_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-09%'"));          
// maret 10
$maret_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-10%'"));
$maret_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-10%'"));          
// maret 11
$maret_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-11%'"));
$maret_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-11%'"));          
// maret 12
$maret_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-12%'"));
$maret_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-12%'"));          
// maret 13
$maret_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-13%'"));
$maret_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-13%'"));          
// maret 14
$maret_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-14%'"));
$maret_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-14%'"));          
// maret 15
$maret_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-15%'"));
$maret_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-15%'"));          
// maret 16
$maret_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-16%'"));
$maret_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-16%'"));          
// maret 17
$maret_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-17%'"));
$maret_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-17%'"));          
// maret 18
$maret_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-18%'"));
$maret_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-18%'"));          
// maret 19
$maret_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-19%'"));
$maret_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-19%'"));          
// maret 20
$maret_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-20%'"));
$maret_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-20%'"));          
// maret 21
$maret_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-21%'"));
$maret_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-21%'"));          
// maret 22
$maret_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-22%'"));
$maret_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-22%'"));          
// maret 23
$maret_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-23%'"));
$maret_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-23%'"));          
// maret 24
$maret_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-24%'"));
$maret_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-24%'"));          
// maret 25
$maret_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-25%'"));
$maret_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-25%'"));          
// maret 26
$maret_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-26%'"));
$maret_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-26%'"));          
// maret 27
$maret_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-27%'"));
$maret_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-27%'"));          
// maret 28
$maret_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-28%'"));
$maret_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-28%'"));          
// maret 29
$maret_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-29%'"));
$maret_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-29%'"));          
// maret 30
$maret_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-30%'"));
$maret_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-30%'"));          
// maret 31
$maret_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-31%'"));
$maret_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-03-31%'"));          

        

    if($maret_1==0){ 
        $warna_maret1="red"; 
        $maret_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret1="green"; 
        $maret_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_2==0){ 
        $warna_maret2="red"; 
        $maret_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret2="green"; 
        $maret_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_3==0){ 
        $warna_maret3="red"; 
        $maret_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret3="green"; 
        $maret_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_4==0){ 
        $warna_maret4="red"; 
        $maret_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret4="green"; 
        $maret_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_5==0){ 
        $warna_maret5="red"; 
        $maret_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret5="green"; 
        $maret_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_6==0){ 
        $warna_maret6="red"; 
        $maret_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret6="green"; 
        $maret_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_7==0){ 
        $warna_maret7="red"; 
        $maret_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret7="green"; 
        $maret_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_8==0){ 
        $warna_maret8="red"; 
        $maret_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret8="green"; 
        $maret_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_9==0){ 
        $warna_maret9="red"; 
        $maret_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret9="green"; 
        $maret_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_10==0){ 
        $warna_maret10="red"; 
        $maret_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret10="green"; 
        $maret_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_11==0){ 
        $warna_maret11="red"; 
        $maret_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret11="green"; 
        $maret_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_12==0){ 
        $warna_maret12="red"; 
        $maret_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret12="green"; 
        $maret_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_13==0){ 
        $warna_maret13="red"; 
        $maret_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret13="green"; 
        $maret_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_14==0){ 
        $warna_maret14="red"; 
        $maret_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret14="green"; 
        $maret_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_15==0){ 
        $warna_maret15="red"; 
        $maret_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret15="green"; 
        $maret_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_16==0){ 
        $warna_maret16="red"; 
        $maret_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret16="green"; 
        $maret_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_17==0){ 
        $warna_maret17="red"; 
        $maret_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret17="green"; 
        $maret_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_18==0){ 
        $warna_maret18="red"; 
        $maret_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret18="green"; 
        $maret_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_19==0){ 
        $warna_maret19="red"; 
        $maret_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret19="green"; 
        $maret_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_20==0){ 
        $warna_maret20="red"; 
        $maret_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret20="green"; 
        $maret_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_21==0){ 
        $warna_maret21="red"; 
        $maret_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret21="green"; 
        $maret_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_22==0){ 
        $warna_maret22="red"; 
        $maret_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret22="green"; 
        $maret_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_23==0){ 
        $warna_maret23="red"; 
        $maret_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret23="green"; 
        $maret_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_24==0){ 
        $warna_maret24="red"; 
        $maret_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret24="green"; 
        $maret_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_25==0){ 
        $warna_maret25="red"; 
        $maret_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret25="green"; 
        $maret_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_26==0){ 
        $warna_maret26="red"; 
        $maret_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret26="green"; 
        $maret_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_27==0){ 
        $warna_maret27="red"; 
        $maret_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret27="green"; 
        $maret_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_28==0){ 
        $warna_maret28="red"; 
        $maret_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret28="green"; 
        $maret_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_29==0){ 
        $warna_maret29="red"; 
        $maret_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret29="green"; 
        $maret_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_30==0){ 
        $warna_maret30="red"; 
        $maret_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret30="green"; 
        $maret_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($maret_31==0){ 
        $warna_maret31="red"; 
        $maret_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_maret31="green"; 
        $maret_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_maret1; ?>"><?php echo $maret_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_maret2  ?>"><?php echo $maret_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_maret3; ?>"><?php echo $maret_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_maret4; ?>"><?php echo $maret_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_maret5; ?>"><?php echo $maret_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_maret6; ?>"><?php echo $maret_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_maret7; ?>"><?php echo $maret_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_maret8; ?>"><?php echo $maret_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_maret9; ?>"><?php echo $maret_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_maret10; ?>"><?php echo $maret_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_maret11; ?>"><?php echo $maret_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_maret12; ?>"><?php echo $maret_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_maret13; ?>"><?php echo $maret_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_maret14; ?>"><?php echo $maret_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_maret15; ?>"><?php echo $maret_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_maret16; ?>"><?php echo $maret_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_maret17; ?>"><?php echo $maret_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_maret18; ?>"><?php echo $maret_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_maret19; ?>"><?php echo $maret_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_maret20; ?>"><?php echo $maret_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_maret21; ?>"><?php echo $maret_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_maret22; ?>"><?php echo $maret_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_maret23; ?>"><?php echo $maret_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_maret24; ?>"><?php echo $maret_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_maret25; ?>"><?php echo $maret_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_maret26; ?>"><?php echo $maret_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_maret27; ?>"><?php echo $maret_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_maret28; ?>"><?php echo $maret_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_maret29; ?>"><?php echo $maret_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_maret30; ?>"><?php echo $maret_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_maret31; ?>"><?php echo $maret_gambar31; ?></td>
    <td></td>
  </tr>
