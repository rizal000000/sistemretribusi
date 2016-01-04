  <tr align="center">
    <td>APRIL <?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// april 01
$april_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-01%'"));
$april_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-01%'"));          
// april 02
$april_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-02%'"));
$april_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-02%'"));          
// april 03
$april_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-03%'"));
$april_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-03%'"));          
// april 04
$april_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-04%'"));
$april_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-04%'"));          
// april 05
$april_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-05%'"));
$april_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-05%'"));          
// april 06
$april_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-06%'"));
$april_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-06%'"));          
// april 07
$april_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-07%'"));
$april_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-07%'"));          
// april 08
$april_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-08%'"));
$april_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-08%'"));          
// april 09
$april_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-09%'"));
$april_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-09%'"));          
// april 10
$april_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-10%'"));
$april_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-10%'"));          
// april 11
$april_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-11%'"));
$april_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-11%'"));          
// april 12
$april_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-12%'"));
$april_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-12%'"));          
// april 13
$april_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-13%'"));
$april_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-13%'"));          
// april 14
$april_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-14%'"));
$april_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-14%'"));          
// april 15
$april_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-15%'"));
$april_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-15%'"));          
// april 16
$april_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-16%'"));
$april_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-16%'"));          
// april 17
$april_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-17%'"));
$april_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-17%'"));          
// april 18
$april_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-18%'"));
$april_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-18%'"));          
// april 19
$april_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-19%'"));
$april_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-19%'"));          
// april 20
$april_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-20%'"));
$april_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-20%'"));          
// april 21
$april_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-21%'"));
$april_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-21%'"));          
// april 22
$april_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-22%'"));
$april_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-22%'"));          
// april 23
$april_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-23%'"));
$april_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-23%'"));          
// april 24
$april_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-24%'"));
$april_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-24%'"));          
// april 25
$april_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-25%'"));
$april_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-25%'"));          
// april 26
$april_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-26%'"));
$april_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-26%'"));          
// april 27
$april_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-27%'"));
$april_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-27%'"));          
// april 28
$april_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-28%'"));
$april_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-28%'"));          
// april 29
$april_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-29%'"));
$april_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-29%'"));          
// april 30
$april_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-30%'"));
$april_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-30%'"));          
// april 31
$april_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-31%'"));
$april_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-04-31%'"));          

        

    if($april_1==0){ 
        $warna_april1="red"; 
        $april_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april1="green"; 
        $april_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_2==0){ 
        $warna_april2="red"; 
        $april_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april2="green"; 
        $april_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_3==0){ 
        $warna_april3="red"; 
        $april_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april3="green"; 
        $april_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_4==0){ 
        $warna_april4="red"; 
        $april_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april4="green"; 
        $april_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_5==0){ 
        $warna_april5="red"; 
        $april_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april5="green"; 
        $april_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_6==0){ 
        $warna_april6="red"; 
        $april_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april6="green"; 
        $april_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_7==0){ 
        $warna_april7="red"; 
        $april_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april7="green"; 
        $april_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_8==0){ 
        $warna_april8="red"; 
        $april_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april8="green"; 
        $april_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_9==0){ 
        $warna_april9="red"; 
        $april_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april9="green"; 
        $april_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_10==0){ 
        $warna_april10="red"; 
        $april_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april10="green"; 
        $april_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_11==0){ 
        $warna_april11="red"; 
        $april_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april11="green"; 
        $april_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_12==0){ 
        $warna_april12="red"; 
        $april_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april12="green"; 
        $april_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_13==0){ 
        $warna_april13="red"; 
        $april_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april13="green"; 
        $april_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_14==0){ 
        $warna_april14="red"; 
        $april_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april14="green"; 
        $april_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_15==0){ 
        $warna_april15="red"; 
        $april_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april15="green"; 
        $april_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_16==0){ 
        $warna_april16="red"; 
        $april_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april16="green"; 
        $april_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_17==0){ 
        $warna_april17="red"; 
        $april_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april17="green"; 
        $april_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_18==0){ 
        $warna_april18="red"; 
        $april_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april18="green"; 
        $april_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_19==0){ 
        $warna_april19="red"; 
        $april_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april19="green"; 
        $april_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_20==0){ 
        $warna_april20="red"; 
        $april_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april20="green"; 
        $april_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_21==0){ 
        $warna_april21="red"; 
        $april_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april21="green"; 
        $april_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_22==0){ 
        $warna_april22="red"; 
        $april_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april22="green"; 
        $april_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_23==0){ 
        $warna_april23="red"; 
        $april_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april23="green"; 
        $april_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_24==0){ 
        $warna_april24="red"; 
        $april_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april24="green"; 
        $april_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_25==0){ 
        $warna_april25="red"; 
        $april_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april25="green"; 
        $april_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_26==0){ 
        $warna_april26="red"; 
        $april_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april26="green"; 
        $april_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_27==0){ 
        $warna_april27="red"; 
        $april_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april27="green"; 
        $april_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_28==0){ 
        $warna_april28="red"; 
        $april_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april28="green"; 
        $april_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_29==0){ 
        $warna_april29="red"; 
        $april_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april29="green"; 
        $april_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_30==0){ 
        $warna_april30="red"; 
        $april_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april30="green"; 
        $april_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($april_31==0){ 
        $warna_april31="red"; 
        $april_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_april31="green"; 
        $april_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_april1; ?>"><?php echo $april_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_april2  ?>"><?php echo $april_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_april3; ?>"><?php echo $april_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_april4; ?>"><?php echo $april_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_april5; ?>"><?php echo $april_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_april6; ?>"><?php echo $april_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_april7; ?>"><?php echo $april_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_april8; ?>"><?php echo $april_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_april9; ?>"><?php echo $april_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_april10; ?>"><?php echo $april_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_april11; ?>"><?php echo $april_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_april12; ?>"><?php echo $april_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_april13; ?>"><?php echo $april_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_april14; ?>"><?php echo $april_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_april15; ?>"><?php echo $april_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_april16; ?>"><?php echo $april_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_april17; ?>"><?php echo $april_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_april18; ?>"><?php echo $april_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_april19; ?>"><?php echo $april_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_april20; ?>"><?php echo $april_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_april21; ?>"><?php echo $april_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_april22; ?>"><?php echo $april_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_april23; ?>"><?php echo $april_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_april24; ?>"><?php echo $april_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_april25; ?>"><?php echo $april_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_april26; ?>"><?php echo $april_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_april27; ?>"><?php echo $april_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_april28; ?>"><?php echo $april_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_april29; ?>"><?php echo $april_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_april30; ?>"><?php echo $april_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_april31; ?>"><?php echo $april_gambar31; ?></td>
    <td></td>
  </tr>
