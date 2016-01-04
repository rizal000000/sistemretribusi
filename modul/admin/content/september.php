  <tr align="center">
    <td>SEPTEMBER<?php echo $_POST['tahun']; ?></td>
    <td><?php echo number_format($ret_pasar,0); ?></td>
    <td><?php echo number_format($ret_keb,0); ?></td>
    <td><?php echo number_format($total,0); ?></td>
<?php
// september 01
$september_1=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-01%'"));
$september_1=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-01%'"));          
// september 02
$september_2=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-02%'"));
$september_2=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-02%'"));          
// september 03
$september_3=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-03%'"));
$september_3=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-03%'"));          
// september 04
$september_4=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-04%'"));
$september_4=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-04%'"));          
// september 05
$september_5=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-05%'"));
$september_5=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-05%'"));          
// september 06
$september_6=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-06%'"));
$september_6=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-06%'"));          
// september 07
$september_7=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-07%'"));
$september_7=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-07%'"));          
// september 08
$september_8=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-08%'"));
$september_8=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-08%'"));          
// september 09
$september_9=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-09%'"));
$september_9=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-09%'"));          
// september 10
$september_10=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-10%'"));
$september_10=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-10%'"));          
// september 11
$september_11=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-11%'"));
$september_11=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-11%'"));          
// september 12
$september_12=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-12%'"));
$september_12=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-12%'"));          
// september 13
$september_13=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-13%'"));
$september_13=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-13%'"));          
// september 14
$september_14=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-14%'"));
$september_14=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-14%'"));          
// september 15
$september_15=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-15%'"));
$september_15=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-15%'"));          
// september 16
$september_16=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-16%'"));
$september_16=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-16%'"));          
// september 17
$september_17=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-17%'"));
$september_17=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-17%'"));          
// september 18
$september_18=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-18%'"));
$september_18=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-18%'"));          
// september 19
$september_19=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-19%'"));
$september_19=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-19%'"));          
// september 20
$september_20=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-20%'"));
$september_20=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-20%'"));          
// september 21
$september_21=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-21%'"));
$september_21=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-21%'"));          
// september 22
$september_22=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-22%'"));
$september_22=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-22%'"));          
// september 23
$september_23=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-23%'"));
$september_23=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-23%'"));          
// september 24
$september_24=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-24%'"));
$september_24=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-24%'"));          
// september 25
$september_25=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-25%'"));
$september_25=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-25%'"));          
// september 26
$september_26=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-26%'"));
$september_26=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-26%'"));          
// september 27
$september_27=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-27%'"));
$september_27=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-27%'"));          
// september 28
$september_28=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-28%'"));
$september_28=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-28%'"));          
// september 29
$september_29=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-29%'"));
$september_29=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-29%'"));          
// september 30
$september_30=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-30%'"));
$september_30=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-30%'"));          
// september 31
$september_31=mysql_num_rows(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-31%'"));
$september_31=mysql_fetch_assoc(mysql_query("SELECT * FROM pembayaran WHERE id_pedagang='$pedagang[id]' AND pembayaran_ke LIKE '%$_POST[tahun]-09-31%'"));          


        

    if($september_1==0){ 
        $warna_september1="red"; 
        $september_gambar1="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september1="green"; 
        $september_gambar1="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_2==0){ 
        $warna_september2="red"; 
        $september_gambar2="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september2="green"; 
        $september_gambar2="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_3==0){ 
        $warna_september3="red"; 
        $september_gambar3="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september3="green"; 
        $september_gambar3="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_4==0){ 
        $warna_september4="red"; 
        $september_gambar4="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september4="green"; 
        $september_gambar4="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_5==0){ 
        $warna_september5="red"; 
        $september_gambar5="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september5="green"; 
        $september_gambar5="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_6==0){ 
        $warna_september6="red"; 
        $september_gambar6="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september6="green"; 
        $september_gambar6="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_7==0){ 
        $warna_september7="red"; 
        $september_gambar7="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september7="green"; 
        $september_gambar7="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_8==0){ 
        $warna_september8="red"; 
        $september_gambar8="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september8="green"; 
        $september_gambar8="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_9==0){ 
        $warna_september9="red"; 
        $september_gambar9="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september9="green"; 
        $september_gambar9="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_10==0){ 
        $warna_september10="red"; 
        $september_gambar10="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september10="green"; 
        $september_gambar10="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_11==0){ 
        $warna_september11="red"; 
        $september_gambar11="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september11="green"; 
        $september_gambar11="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_12==0){ 
        $warna_september12="red"; 
        $september_gambar12="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september12="green"; 
        $september_gambar12="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_13==0){ 
        $warna_september13="red"; 
        $september_gambar13="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september13="green"; 
        $september_gambar13="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_14==0){ 
        $warna_september14="red"; 
        $september_gambar14="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september14="green"; 
        $september_gambar14="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_15==0){ 
        $warna_september15="red"; 
        $september_gambar15="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september15="green"; 
        $september_gambar15="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_16==0){ 
        $warna_september16="red"; 
        $september_gambar16="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september16="green"; 
        $september_gambar16="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_17==0){ 
        $warna_september17="red"; 
        $september_gambar17="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september17="green"; 
        $september_gambar17="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_18==0){ 
        $warna_september18="red"; 
        $september_gambar18="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september18="green"; 
        $september_gambar18="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_19==0){ 
        $warna_september19="red"; 
        $september_gambar19="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september19="green"; 
        $september_gambar19="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_20==0){ 
        $warna_september20="red"; 
        $september_gambar20="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september20="green"; 
        $september_gambar20="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_21==0){ 
        $warna_september21="red"; 
        $september_gambar21="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september21="green"; 
        $september_gambar21="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_22==0){ 
        $warna_september22="red"; 
        $september_gambar22="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september22="green"; 
        $september_gambar22="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_23==0){ 
        $warna_september23="red"; 
        $september_gambar23="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september23="green"; 
        $september_gambar23="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_24==0){ 
        $warna_september24="red"; 
        $september_gambar24="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september24="green"; 
        $september_gambar24="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_25==0){ 
        $warna_september25="red"; 
        $september_gambar25="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september25="green"; 
        $september_gambar25="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_26==0){ 
        $warna_september26="red"; 
        $september_gambar26="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september26="green"; 
        $september_gambar26="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_27==0){ 
        $warna_september27="red"; 
        $september_gambar27="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september27="green"; 
        $september_gambar27="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_28==0){ 
        $warna_september28="red"; 
        $september_gambar28="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september28="green"; 
        $september_gambar28="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_29==0){ 
        $warna_september29="red"; 
        $september_gambar29="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september29="green"; 
        $september_gambar29="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_30==0){ 
        $warna_september30="red"; 
        $september_gambar30="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september30="green"; 
        $september_gambar30="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }
    if($september_31==0){ 
        $warna_september31="red"; 
        $september_gambar31="<img src='../../images/img_merah.png' height='100%' width='100%'></img>"; } else { 
        $warna_september31="green"; 
        $september_gambar31="<img src='../../images/img_hijau.png' height='100%' width='100%'></img>";
    }   
?>



    <td bgcolor="<?php echo $warna_september1; ?>"><?php echo $september_gambar1; ?></td>
    <td bgcolor="<?php echo $warna_september2  ?>"><?php echo $september_gambar2; ?></td>
    <td bgcolor="<?php echo $warna_september3; ?>"><?php echo $september_gambar3; ?></td>
    <td bgcolor="<?php echo $warna_september4; ?>"><?php echo $september_gambar4; ?></td>
    <td bgcolor="<?php echo $warna_september5; ?>"><?php echo $september_gambar5; ?></td>
    <td bgcolor="<?php echo $warna_september6; ?>"><?php echo $september_gambar6; ?></td>
    <td bgcolor="<?php echo $warna_september7; ?>"><?php echo $september_gambar7; ?></td>
    <td bgcolor="<?php echo $warna_september8; ?>"><?php echo $september_gambar8; ?></td>
    <td bgcolor="<?php echo $warna_september9; ?>"><?php echo $september_gambar9; ?></td>
    <td bgcolor="<?php echo $warna_september10; ?>"><?php echo $september_gambar10; ?></td>
    <td bgcolor="<?php echo $warna_september11; ?>"><?php echo $september_gambar11; ?></td>
    <td bgcolor="<?php echo $warna_september12; ?>"><?php echo $september_gambar12; ?></td>
    <td bgcolor="<?php echo $warna_september13; ?>"><?php echo $september_gambar13; ?></td>
    <td bgcolor="<?php echo $warna_september14; ?>"><?php echo $september_gambar14; ?></td>
    <td bgcolor="<?php echo $warna_september15; ?>"><?php echo $september_gambar15; ?></td>
    <td bgcolor="<?php echo $warna_september16; ?>"><?php echo $september_gambar16; ?></td>
    <td bgcolor="<?php echo $warna_september17; ?>"><?php echo $september_gambar17; ?></td>
    <td bgcolor="<?php echo $warna_september18; ?>"><?php echo $september_gambar18; ?></td>
    <td bgcolor="<?php echo $warna_september19; ?>"><?php echo $september_gambar19; ?></td>
    <td bgcolor="<?php echo $warna_september20; ?>"><?php echo $september_gambar20; ?></td>
    <td bgcolor="<?php echo $warna_september21; ?>"><?php echo $september_gambar21; ?></td>
    <td bgcolor="<?php echo $warna_september22; ?>"><?php echo $september_gambar22; ?></td>
    <td bgcolor="<?php echo $warna_september23; ?>"><?php echo $september_gambar23; ?></td>
    <td bgcolor="<?php echo $warna_september24; ?>"><?php echo $september_gambar24; ?></td>
    <td bgcolor="<?php echo $warna_september25; ?>"><?php echo $september_gambar25; ?></td>
    <td bgcolor="<?php echo $warna_september26; ?>"><?php echo $september_gambar26; ?></td>
    <td bgcolor="<?php echo $warna_september27; ?>"><?php echo $september_gambar27; ?></td>
    <td bgcolor="<?php echo $warna_september28; ?>"><?php echo $september_gambar28; ?></td>
    <td bgcolor="<?php echo $warna_september29; ?>"><?php echo $september_gambar29; ?></td>
    <td bgcolor="<?php echo $warna_september30; ?>"><?php echo $september_gambar30; ?></td>
    <td bgcolor="<?php echo $warna_september31; ?>"><?php echo $september_gambar31; ?></td>
    <td></td>
  </tr>
