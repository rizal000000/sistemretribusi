  <tr align="center">
    <td>JULI<?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// juli 01
$juli_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-01%'"));
$juli_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-01%'"));          
// juli 02
$juli_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-02%'"));
$juli_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-02%'"));          
// juli 03
$juli_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-03%'"));
$juli_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-03%'"));          
// juli 04
$juli_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-04%'"));
$juli_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-04%'"));          
// juli 05
$juli_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-05%'"));
$juli_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-05%'"));          
// juli 06
$juli_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-06%'"));
$juli_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-06%'"));          
// juli 07
$juli_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-07%'"));
$juli_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-07%'"));          
// juli 08
$juli_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-08%'"));
$juli_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-08%'"));          
// juli 09
$juli_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-09%'"));
$juli_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-09%'"));          
// juli 10
$juli_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-10%'"));
$juli_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-10%'"));          
// juli 11
$juli_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-11%'"));
$juli_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-11%'"));          
// juli 12
$juli_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-12%'"));
$juli_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-12%'"));          
// juli 13
$juli_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-13%'"));
$juli_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-13%'"));          
// juli 14
$juli_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-14%'"));
$juli_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-14%'"));          
// juli 15
$juli_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-15%'"));
$juli_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-15%'"));          
// juli 16
$juli_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-16%'"));
$juli_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-16%'"));          
// juli 17
$juli_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-17%'"));
$juli_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-17%'"));          
// juli 18
$juli_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-18%'"));
$juli_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-18%'"));          
// juli 19
$juli_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-19%'"));
$juli_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-19%'"));          
// juli 20
$juli_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-20%'"));
$juli_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-20%'"));          
// juli 21
$juli_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-21%'"));
$juli_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-21%'"));          
// juli 22
$juli_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-22%'"));
$juli_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-22%'"));          
// juli 23
$juli_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-23%'"));
$juli_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-23%'"));          
// juli 24
$juli_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-24%'"));
$juli_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-24%'"));          
// juli 25
$juli_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-25%'"));
$juli_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-25%'"));          
// juli 26
$juli_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-26%'"));
$juli_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-26%'"));          
// juli 27
$juli_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-27%'"));
$juli_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-27%'"));          
// juli 28
$juli_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-28%'"));
$juli_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-28%'"));          
// juli 29
$juli_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-29%'"));
$juli_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-29%'"));          
// juli 30
$juli_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-30%'"));
$juli_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-30%'"));          
// juli 31
$juli_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-31%'"));
$juli_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-07-31%'"));          
        

    if($juli_1==0){ 
        $warna_juli1="red"; 
        $juli_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli1="green"; 
        $juli_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_2==0){ 
        $warna_juli2="red"; 
        $juli_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli2="green"; 
        $juli_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_3==0){ 
        $warna_juli3="red"; 
        $juli_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli3="green"; 
        $juli_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_4==0){ 
        $warna_juli4="red"; 
        $juli_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli4="green"; 
        $juli_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_5==0){ 
        $warna_juli5="red"; 
        $juli_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli5="green"; 
        $juli_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_6==0){ 
        $warna_juli6="red"; 
        $juli_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli6="green"; 
        $juli_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_7==0){ 
        $warna_juli7="red"; 
        $juli_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli7="green"; 
        $juli_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_8==0){ 
        $warna_juli8="red"; 
        $juli_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli8="green"; 
        $juli_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_9==0){ 
        $warna_juli9="red"; 
        $juli_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli9="green"; 
        $juli_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_10==0){ 
        $warna_juli10="red"; 
        $juli_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli10="green"; 
        $juli_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_11==0){ 
        $warna_juli11="red"; 
        $juli_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli11="green"; 
        $juli_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_12==0){ 
        $warna_juli12="red"; 
        $juli_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli12="green"; 
        $juli_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_13==0){ 
        $warna_juli13="red"; 
        $juli_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli13="green"; 
        $juli_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_14==0){ 
        $warna_juli14="red"; 
        $juli_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli14="green"; 
        $juli_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_15==0){ 
        $warna_juli15="red"; 
        $juli_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli15="green"; 
        $juli_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_16==0){ 
        $warna_juli16="red"; 
        $juli_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli16="green"; 
        $juli_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_17==0){ 
        $warna_juli17="red"; 
        $juli_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli17="green"; 
        $juli_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_18==0){ 
        $warna_juli18="red"; 
        $juli_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli18="green"; 
        $juli_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_19==0){ 
        $warna_juli19="red"; 
        $juli_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli19="green"; 
        $juli_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_20==0){ 
        $warna_juli20="red"; 
        $juli_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli20="green"; 
        $juli_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_21==0){ 
        $warna_juli21="red"; 
        $juli_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli21="green"; 
        $juli_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_22==0){ 
        $warna_juli22="red"; 
        $juli_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli22="green"; 
        $juli_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_23==0){ 
        $warna_juli23="red"; 
        $juli_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli23="green"; 
        $juli_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_24==0){ 
        $warna_juli24="red"; 
        $juli_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli24="green"; 
        $juli_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_25==0){ 
        $warna_juli25="red"; 
        $juli_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli25="green"; 
        $juli_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_26==0){ 
        $warna_juli26="red"; 
        $juli_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli26="green"; 
        $juli_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_27==0){ 
        $warna_juli27="red"; 
        $juli_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli27="green"; 
        $juli_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_28==0){ 
        $warna_juli28="red"; 
        $juli_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli28="green"; 
        $juli_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_29==0){ 
        $warna_juli29="red"; 
        $juli_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli29="green"; 
        $juli_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_30==0){ 
        $warna_juli30="red"; 
        $juli_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli30="green"; 
        $juli_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($juli_31==0){ 
        $warna_juli31="red"; 
        $juli_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_juli31="green"; 
        $juli_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_juli1; ?>"><?php echo $juli_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_juli2  ?>"><?php echo $juli_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_juli3; ?>"><?php echo $juli_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_juli4; ?>"><?php echo $juli_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_juli5; ?>"><?php echo $juli_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_juli6; ?>"><?php echo $juli_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_juli7; ?>"><?php echo $juli_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_juli8; ?>"><?php echo $juli_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_juli9; ?>"><?php echo $juli_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_juli10; ?>"><?php echo $juli_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_juli11; ?>"><?php echo $juli_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_juli12; ?>"><?php echo $juli_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_juli13; ?>"><?php echo $juli_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_juli14; ?>"><?php echo $juli_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_juli15; ?>"><?php echo $juli_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_juli16; ?>"><?php echo $juli_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_juli17; ?>"><?php echo $juli_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_juli18; ?>"><?php echo $juli_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_juli19; ?>"><?php echo $juli_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_juli20; ?>"><?php echo $juli_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_juli21; ?>"><?php echo $juli_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_juli22; ?>"><?php echo $juli_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_juli23; ?>"><?php echo $juli_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_juli24; ?>"><?php echo $juli_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_juli25; ?>"><?php echo $juli_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_juli26; ?>"><?php echo $juli_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_juli27; ?>"><?php echo $juli_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_juli28; ?>"><?php echo $juli_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_juli29; ?>"><?php echo $juli_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_juli30; ?>"><?php echo $juli_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_juli31; ?>"><?php echo $juli_gambar31; ?></td>
    <td></td>
  </tr>
