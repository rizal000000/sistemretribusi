  <tr align="center">
    <td>NOVEMBER <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// november 01
$november_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-01%'"));
$november_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-01%'"));          
// november 02
$november_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-02%'"));
$november_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-02%'"));          
// november 03
$november_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-03%'"));
$november_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-03%'"));          
// november 04
$november_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-04%'"));
$november_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-04%'"));          
// november 05
$november_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-05%'"));
$november_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-05%'"));          
// november 06
$november_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-06%'"));
$november_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-06%'"));          
// november 07
$november_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-07%'"));
$november_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-07%'"));          
// november 08
$november_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-08%'"));
$november_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-08%'"));          
// november 09
$november_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-09%'"));
$november_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-09%'"));          
// november 10
$november_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-10%'"));
$november_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-10%'"));          
// november 11
$november_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-11%'"));
$november_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-11%'"));          
// november 12
$november_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-12%'"));
$november_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-12%'"));          
// november 13
$november_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-13%'"));
$november_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-13%'"));          
// november 14
$november_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-14%'"));
$november_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-14%'"));          
// november 15
$november_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-15%'"));
$november_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-15%'"));          
// november 16
$november_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-16%'"));
$november_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-16%'"));          
// november 17
$november_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-17%'"));
$november_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-17%'"));          
// november 18
$november_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-18%'"));
$november_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-18%'"));          
// november 19
$november_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-19%'"));
$november_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-19%'"));          
// november 20
$november_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-20%'"));
$november_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-20%'"));          
// november 21
$november_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-21%'"));
$november_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-21%'"));          
// november 22
$november_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-22%'"));
$november_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-22%'"));          
// november 23
$november_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-23%'"));
$november_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-23%'"));          
// november 24
$november_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-24%'"));
$november_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-24%'"));          
// november 25
$november_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-25%'"));
$november_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-25%'"));          
// november 26
$november_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-26%'"));
$november_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-26%'"));          
// november 27
$november_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-27%'"));
$november_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-27%'"));          
// november 28
$november_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-28%'"));
$november_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-28%'"));          
// november 29
$november_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-29%'"));
$november_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-29%'"));          
// november 30
$november_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-30%'"));
$november_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-30%'"));          
// november 31
$november_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-31%'"));
$november_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-11-31%'"));          


        

    if($november_1==0){ 
        $warna_november1="red"; 
        $november_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november1="green"; 
        $november_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_2==0){ 
        $warna_november2="red"; 
        $november_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november2="green"; 
        $november_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_3==0){ 
        $warna_november3="red"; 
        $november_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november3="green"; 
        $november_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_4==0){ 
        $warna_november4="red"; 
        $november_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november4="green"; 
        $november_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_5==0){ 
        $warna_november5="red"; 
        $november_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november5="green"; 
        $november_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_6==0){ 
        $warna_november6="red"; 
        $november_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november6="green"; 
        $november_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_7==0){ 
        $warna_november7="red"; 
        $november_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november7="green"; 
        $november_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_8==0){ 
        $warna_november8="red"; 
        $november_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november8="green"; 
        $november_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_9==0){ 
        $warna_november9="red"; 
        $november_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november9="green"; 
        $november_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_10==0){ 
        $warna_november10="red"; 
        $november_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november10="green"; 
        $november_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_11==0){ 
        $warna_november11="red"; 
        $november_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november11="green"; 
        $november_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_12==0){ 
        $warna_november12="red"; 
        $november_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november12="green"; 
        $november_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_13==0){ 
        $warna_november13="red"; 
        $november_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november13="green"; 
        $november_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_14==0){ 
        $warna_november14="red"; 
        $november_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november14="green"; 
        $november_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_15==0){ 
        $warna_november15="red"; 
        $november_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november15="green"; 
        $november_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_16==0){ 
        $warna_november16="red"; 
        $november_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november16="green"; 
        $november_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_17==0){ 
        $warna_november17="red"; 
        $november_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november17="green"; 
        $november_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_18==0){ 
        $warna_november18="red"; 
        $november_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november18="green"; 
        $november_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_19==0){ 
        $warna_november19="red"; 
        $november_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november19="green"; 
        $november_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_20==0){ 
        $warna_november20="red"; 
        $november_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november20="green"; 
        $november_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_21==0){ 
        $warna_november21="red"; 
        $november_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november21="green"; 
        $november_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_22==0){ 
        $warna_november22="red"; 
        $november_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november22="green"; 
        $november_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_23==0){ 
        $warna_november23="red"; 
        $november_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november23="green"; 
        $november_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_24==0){ 
        $warna_november24="red"; 
        $november_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november24="green"; 
        $november_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_25==0){ 
        $warna_november25="red"; 
        $november_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november25="green"; 
        $november_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_26==0){ 
        $warna_november26="red"; 
        $november_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november26="green"; 
        $november_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_27==0){ 
        $warna_november27="red"; 
        $november_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november27="green"; 
        $november_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_28==0){ 
        $warna_november28="red"; 
        $november_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november28="green"; 
        $november_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_29==0){ 
        $warna_november29="red"; 
        $november_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november29="green"; 
        $november_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_30==0){ 
        $warna_november30="red"; 
        $november_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november30="green"; 
        $november_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($november_31==0){ 
        $warna_november31="red"; 
        $november_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_november31="green"; 
        $november_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_november1; ?>"><?php echo $november_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_november2  ?>"><?php echo $november_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_november3; ?>"><?php echo $november_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_november4; ?>"><?php echo $november_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_november5; ?>"><?php echo $november_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_november6; ?>"><?php echo $november_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_november7; ?>"><?php echo $november_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_november8; ?>"><?php echo $november_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_november9; ?>"><?php echo $november_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_november10; ?>"><?php echo $november_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_november11; ?>"><?php echo $november_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_november12; ?>"><?php echo $november_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_november13; ?>"><?php echo $november_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_november14; ?>"><?php echo $november_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_november15; ?>"><?php echo $november_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_november16; ?>"><?php echo $november_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_november17; ?>"><?php echo $november_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_november18; ?>"><?php echo $november_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_november19; ?>"><?php echo $november_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_november20; ?>"><?php echo $november_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_november21; ?>"><?php echo $november_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_november22; ?>"><?php echo $november_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_november23; ?>"><?php echo $november_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_november24; ?>"><?php echo $november_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_november25; ?>"><?php echo $november_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_november26; ?>"><?php echo $november_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_november27; ?>"><?php echo $november_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_november28; ?>"><?php echo $november_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_november29; ?>"><?php echo $november_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_november30; ?>"><?php echo $november_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_november31; ?>"><?php echo $november_gambar31; ?></td>
    <td></td>
  </tr>
