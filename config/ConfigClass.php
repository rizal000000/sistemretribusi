<?php

/**
* Class ini merupakan induk dari config class
*/
class ConfigClass
{
	var $host;
	var $user;
	var $pass;
	var $name;

	function __construct($a,$b,$c,$d)
	{
		# kode dari construct class
		$this->host=$a;
		$this->user=$b;
		$this->pass=$c;
		$this->name=$d;
	}
	// connecting host
	function ConnectHost()
	{
		$connect=mysql_connect($this->host,$this->user,$this->pass);
		// White Testing
		// if($connect){ echo "Koneksi Berhasil"; } else { echo "Koneksi Gagal !!"; }
	}
	// connecting database
	function ConnectDb(){
		$connect=mysql_select_db($this->name);
		// White Testing
		// if($connect){ echo "Database dengan nama <h3><b>".$this->name."</b></h3> Terkoneksi dengan baik."; } else { echo "Database dengan nama <h3><b>".$this->name."</b></h3> Gagal Terkoneksi !!"; }
	}

	// function date
	function change_date($x){
		switch ($x) {
			case '1': return $y="Januari"; break;
			case '2': return $y="Februari"; break;
			case '3': return $y="Maret"; break;
			case '4': return $y="April"; break;
			case '5': return $y="Mei"; break;
			case '6': return $y="Juni"; break;
			case '7': return $y="Juli"; break;
			case '8': return $y="Agustus"; break;
			case '9': return $y="September"; break;
			case '10': return $y="Oktober"; break;
			case '11': return $y="November"; break;
			case '12': return $y="Desember"; break;
		}
	}
	// /sfunction date

	// function change status to arrow
	function arrow($x){
		switch ($x) {
			case 0 : return $y="<img src='../../images/icon/arrow_notyet.ico' width='50%'></img>"; break; 
			case 1 : return $y="<img src='../../images/icon/arrow_success.ico' width='50%'></img>"; break; 
		}
	}
	// /function change status to arrow

	// function get link
	function get_link(){
		echo "<input type='hidden' name='link' value=$_GET[content]>";
	}
	// /function get link 

	// function back link
	function back_link($link){
		echo "<script type='text/javascript'>";
		echo "window.location='index.php?content=$link'";
		echo "</script>";		
	}
	// /function back link

	// function home link
	function home_link(){
		echo "<script type='text/javascript'>";
		echo "window.location='index.php'";
		echo "</script>";		
	}
	// /function home link

	// function province
	function province($x){
		switch ($x) {
			case 1: echo "Provinsi Belum Di input"; break;
			case 2: echo "Bali"; break;
			case 3: echo "DKI Jakarta"; break;
			case 4: echo "Papua"; break;
			case 5: echo "DI Yogyakarta"; break;
			case 6: echo "Aceh"; break;
			case 7: echo "Jawa Timur"; break;
			case 8: echo "Jawa Barat"; break;
			case 9: echo "Jawa Tengah"; break;
			case 10: echo "Banten"; break;
			case 11: echo "Kalimantan Timur"; break;
			case 12: echo "Jambi"; break;
			case 13: echo "Sumatera Utara"; break;
			case 14: echo "Sumatera Barat"; break;
			case 15: echo "Lampung"; break;
			case 16: echo "Kepulauan Riau"; break;
			case 17: echo "Kepulauan Bangka Belitung"; break;
			case 18: echo "Papua Barat"; break;
			case 19: echo "Riau"; break;
			case 20: echo "Maluku"; break;
			case 21: echo "Kalimantan Barat"; break;
			case 22: echo "Kalimantan Selatan"; break;
			case 23: echo "Kalimantan Tengah"; break;
			case 24: echo "Nusa Tenggara Timur"; break;
			case 25: echo "Nusa Tenggara Barat"; break;
			case 26: echo "Sulawesi Selatan"; break;
			case 27: echo "Sulawesi Utara"; break;
			case 28: echo "Sumatera Selatan"; break;
			case 29: echo "Bengkulu"; break;
			case 30: echo "Gorontalo"; break;
			case 31: echo "Sulawesi Tenggara"; break;
			case 32: echo "Sulawesi Tengah"; break;
			case 33: echo "Maluku Utara"; break;
			case 34: echo "Sulawesi Barat"; break;
		}
	}
	// /function province

	// function page
	function page($x,$y){
		$data_awal=$x;
		$data_proses=explode($y, $data_awal);
		return $data_proses;
	}
	// /function page


	function breadcumb($x){
		switch ($x) {
			case 'content_kurikulum': 
			$link1="Data Akademik";
			$link2="Kurikulum";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
				case 'content_kurikulum_detail': 
				$link1="Data Akademik";
				$link2="<a href='index.php?content=content_kurikulum'>Kurikulum</a>";
				$link3="Data Detail Kurikulum";
				$hasil=$link1." > ".$link2." > ".$link3;
				return $hasil;
				break;
			case 'content_dosen': 
			$link1="Data Akademik";
			$link2="Dosen";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
				case 'content_dosen_detail': 
				$link1="Data Akademik";
				$link2="<a href='index.php?content=content_dosen'>Dosen</a>";
				$link3="Data Detail Dosen";
				$hasil=$link1." > ".$link2." > ".$link3;
				return $hasil;
				break;
			case 'content_mahasiswa': 
			$link1="Data Akademik";
			$link2="Mahasiswa";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
			case 'content_materi': 
			$link1="Dokumen";
			$link2="Materi";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
				case 'content_materi_detail': 
				$link1="Dokumen";
				$link2="<a href='index.php?content=content_materi'>Materi</a>";
				$link3="Data Detail Materi";
				$hasil=$link1." > ".$link2." > ".$link3;
				return $hasil;
				break;
			case 'content_penelitian_dosen': 
			$link1="Dokumen";
			$link2="Penelitian Dosen";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
				case 'content_penelitian_dosen_detail': 
				$link1="Dokumen";
				$link2="<a href='index.php?content=content_penelitian_dosen'>Penelitian Dosen</a>";
				$link3="Data Detail Penelitian Dosen";
				$hasil=$link1." > ".$link2." > ".$link3;
				return $hasil;
				break;
			case 'content_penelitian_mahasiswa': 
			$link1="Dokumen";
			$link2="Penelitian Mahasiswa";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
				case 'content_penelitian_mahasiswa_detail': 
				$link1="Dokumen";
				$link2="<a href='index.php?content=content_penelitian_mahasiswa'>Penelitian Mahasiswa</a>";
				$link3="Data Detail Penelitian Mahasiswa";
				$hasil=$link1." > ".$link2." > ".$link3;
				return $hasil;
				break;
			case 'content_inventaris_laboratorium': 
			$link1="Laboratorium";
			$link2="Inventaris";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
			case 'content_jadwal_praktikum': 
			$link1="Laboratorium";
			$link2="Jadwal Praktikum";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
			case 'content_software_praktikum': 
			$link1="Laboratorium";
			$link2="Software Praktikum";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
			case 'content_modul_praktikum': 
			$link1="Laboratorium";
			$link2="Modul Praktikum";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
				case 'content_modul_praktikum_detail': 
				$link1="Laboratorium";
				$link2="<a href='index.php?content=content_modul_praktikum'>Modul Praktikum</a>";
				$link3="Data Detail Modul Praktikum";
				$hasil=$link1." > ".$link2." > ".$link3;
				return $hasil;
				break;
			case 'content_Website_UIN_SUSKA_RIAU': 
			$link1="Menu Lainnya";
			$link2="Website UIN SUSKA RIAU";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
			case 'content_Website_SIMAK_UIN': 
			$link1="Menu Lainnya";
			$link2="Website SIMAK UIN";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
			case 'content_Website_SIMAK_FST': 
			$link1="Menu Lainnya";
			$link2="Website SIMAK FST";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
			case 'content_Website_SITEKIN': 
			$link1="Menu Lainnya";
			$link2="Website SITEKIN";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
			case 'content_Website_FST_UIN_SUSKA': 
			$link1="Menu Lainnya";
			$link2="Website FST UIN SUSKA RIAU";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
			case 'content_Website_Sistem_Informasi': 
			$link1="Menu Lainnya";
			$link2="Website Sistem Informasi UIN SUSKA RIAU";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;


			// kajur sekjur
			case 'content_pengaturan': 
			$link1="Menu Lainnya";
			$link2="Pengaturan";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;case 'content_absensi_praktikum': 
			$link1="Laboratorium";
			$link2="Absensi Praktikum";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
				case 'content_absensi_praktikum_detail': 
				$link1="Laboratorium";
				$link2="<a href='index.php?content=content_absensi_praktikum'>Absensi Praktikum</a>";
				$link3="Detail";
				$hasil=$link1." > ".$link2." > ".$link3;
				return $hasil;
				break;
			case 'content_nilai': 
			$link1="Administrasi";
			$link2="Nilai";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
				case 'content_nilai_detail': 
				$link1="Administrasi";
				$link2="<a href='index.php?content=content_nilai'>Nilai</a>";
				$link3="Detail";
				$hasil=$link1." > ".$link2." > ".$link3;
				return $hasil;
				break;
			case 'content_surat': 
			$link1="Administrasi";
			$link2="Surat";
			$hasil=$link1." > ".$link2;
			return $hasil;
			break;
				case 'content_surat_masuk': 
				$link1="Administrasi";
				$link2="<a href='index.php?content=content_surat'>Surat</a>";
				$link3="Surat Masuk";
				$hasil=$link1." > ".$link2." > ".$link3;
				return $hasil;
				break;
					case 'content_surat_masuk_detail': 
					$link1="Administrasi";
					$link2="<a href='index.php?content=content_surat'>Surat</a>";
					$link3="<a href='index.php?content=content_surat_masuk'>Surat Masuk</a>";
					$link4=ucfirst($_GET['jenis']);
					$hasil=$link1." > ".$link2." > ".$link3." > ".$link4;
					return $hasil;
					break;
						case 'content_surat_masuk_detail_view': 
						$link1="Administrasi";
						$link2="<a href='index.php?content=content_surat'>Surat</a>";
						$link3="<a href='index.php?content=content_surat_masuk'>Surat Masuk</a>";
						$link4=ucfirst($_GET['jenis']);
						$link5="View";
						$hasil=$link1." > ".$link2." > ".$link3." > ".$link4." > ".$link5;
						return $hasil;
						break;



		}
	}


	function comment($x){
		  switch ($x) {
		    case 1 : echo "<div class='alert alert-success'>
		            <button class='close' data-dismiss='alert'>&times;</button>
		            <strong>Success!</strong> Your Data has been saved.
		              </div>";  break;
		    case 0 : echo "<div class='alert alert-info'>
		            <button class='close' data-dismiss='alert'>&times;</button>
		            <strong>Error!</strong>  There's something wrong. Your Data can not be saved ! Try again.
		              </div>";  break;
		  }
	}


	function gambar($url,$height,$width){
		echo "<img src='$url' height='$height' width='$width'></img>";
	}


	function correct_answer($x){
		switch ($x){
			case "a1" : $answer="A"; break;
			case "a2" : $answer="B"; break;
			case "a3" : $answer="C"; break;
			case "a4" : $answer="D"; break;
		}
		return $answer;
	}


	function kota_riau($x){
		switch ($x) {
			case 1: echo "Kabupaten Bengkalis"; break;		
			case 2: echo "Kabupaten Indragiri Hilir"; break;		
			case 3: echo "Kabupaten Indragiri Hulu"; break;		
			case 4: echo "Kabupaten Kampar"; break;		
			case 5: echo "Kabupaten Kuantan Singingi"; break;		
			case 6: echo "Kabupaten Pelalawan"; break;		
			case 7: echo "Kabupaten Rokan Hilir"; break;		
			case 8: echo "Kabupaten Rokan Hulu"; break;		
			case 9: echo "Kabupaten Siak"; break;		
			case 10: echo "Kabupaten Kepulauan Meranti"; break;		
			case 11: echo "Kota Dumai"; break;		
			case 12: echo "Kota Pekanbaru"; break;		
		}
	}


	function tingkatan($x){
		switch ($x) {
			case 'm': $status="Manager"; break;
			case 'sm': $status="Senior Manager"; break;
			case 'em': $status="Executive Manager"; break;
			case 'd': $status="Director"; break;
			case 'sd': $status="Senior Director"; break;
			case 'ed': $status="Executive Director"; break;
			case 'ged': $status="Gold Executive Director"; break;
			case 'ded': $status="Diamond Executive Director"; break;
			case 'ced': $status="Crown Executive Director"; break;			
		}
		return $status;
	}


	function sik_level_user($x){
		switch ($x) {
			case "admin": $level="Administrator"; break;		
			case "pimpinan": $level="Ketua / Sekretaris Jurusan"; break;		
			case "mhs": $level="Mahasiswa"; break;		
			case "pembimbing": $level="Pembimbing"; break;		
		}
		return $level;
	}

	function id_cabang($x){
		switch ($x) {
			case 1: $cabang="Bangkinang"; break;		
			case 2: $cabang="Bengkalis"; break;		
			case 3: $cabang="Damas Raya"; break;		
			case 4: $cabang="Painan"; break;		
			case 5: $cabang="Pekanbaru"; break;		
			case 6: $cabang="Siak"; break;		
			case 7: $cabang="Sijunjung"; break;		
			case 8: $cabang="Taluk Kuantan"; break;		
		}
		return $cabang;
	}

	function golongan($x){
		switch ($x) {
			case 1 : $golongan="I/a"; break;
			case 2 : $golongan="I/b"; break;
			case 3 : $golongan="I/c"; break;
			case 4 : $golongan="I/d"; break;
			case 5 : $golongan="II/a"; break;
			case 6 : $golongan="II/b"; break;
			case 7 : $golongan="II/c"; break;
			case 8 : $golongan="II/d"; break;
			case 9 : $golongan="III/a"; break;
			case 10 : $golongan="III/b"; break;
			case 11 : $golongan="III/c"; break;
			case 12 : $golongan="III/d"; break;
			case 13 : $golongan="IV/a"; break;
			case 14 : $golongan="IV/b"; break;
			case 15 : $golongan="IV/c"; break;
			case 16 : $golongan="IV/d"; break;
		}
		return $golongan;
	}

	function jk($x){
		switch ($x) {
			case "lk" : $jk="Laki-Laki"; break;		
			case "pr" : $jk="Perempuan"; break;		
		}
		return $jk;
	}


	function agama($x){
		switch ($x) {
			case 1 : $agama="Islam"; break;		
			case 2 : $agama="Kristen Protestan"; break;		
			case 3 : $agama="Kristen Katolik"; break;		
			case 4 : $agama="Buddha"; break;		
			case 5 : $agama="Hindu"; break;		
			case 6 : $agama="Tionghoa"; break;		
		}
		return $agama;
	}

	function status($x){
		switch ($x) {
			case "-" : $status="Belum di Validasi"; break;		
			case "y" : $status="<font color='green'>Diterima</font>"; break;		
			case "n" : $status="<font color='red'>Ditolak</font>"; break;			
		}
		return $status;
	}

         
	function lesstanggal($thn,$bulan,$tgl){
			switch ($bulan) {
				case '1': return $bln="Januari"; break;
				case '2': return $bln="Februari"; break;
				case '3': return $bln="Maret"; break;
				case '4': return $bln="April"; break;
				case '5': return $bln="Mei"; break;
				case '6': return $bln="Juni"; break;
				case '7': return $bln="Juli"; break;
				case '8': return $bln="Agustus"; break;
				case '9': return $bln="September"; break;
				case '10': return $bln="Oktober"; break;
				case '11': return $bln="November"; break;
				case '12': return $bln="Desember"; break;
			}
		$tanggal=$tgl." ".$bln." ".$thn;
		return $tanggal;
	}



function jurusan($x){
	switch ($x) {
		case 1: $hasil="Sistem Informasi"; break;
		case 2: $hasil="Teknik Informatika"; break;
		case 3: $hasil="Teknik Industri"; break;
		case 4: $hasil="Matematika Terapan"; break;
		case 5: $hasil="Teknik Elektro"; break;	
	}
	return $hasil;
}

function level($x){
	switch ($x) {
		case 'admin': $level="Administrator"; break;		
		case 'pimpinan': $level="Pimpinan"; break;		
	}
	return $level;
}

function level_chat($x){
	switch ($x) {
		case 'admin': $level="A"; break;		
		case 'dosen': $level="D"; break;		
		case 'pegawai': $level="P"; break;		
		case 'mhs': $level="M"; break;		
	}
	return $level;
}


function kuisioner($x){
	switch ($x) {
		case 1: $a="Sangat Kurang"; break;		
		case 2: $a="Kurang"; break;		
		case 3: $a="Cukup"; break;		
		case 4: $a="Baik"; break;		
		case 5: $a="Sangat baik"; break;		
		case "tidak": $a="Tidak"; break;		
		case "ya": $a="Ya"; break;		
	}
	return $a;
}




function jenis($x){
	switch ($x) {
		case "luarbiasa": $a="Dosen Luar Biasa"; break;		
		case "tetap": $a="Dosen Tetap"; break;		
	}
	return $a;
}


function cabang($x){
	switch ($x) {
		case 1: $b="Pekanbaru";	break;
		case 2: $b="Medan";	break;
		case 3: $b="Martebe";	break;
		case 4: $b="Belias";	break;
		case 5: $b="Minas";	break;
		case 6: $b="Duri";	break;
		case 7: $b="Jambi";	break;
		case 8: $b="Muara Bungo";	break;
		case 9: $b="Mandiangin";	break;
		case 10: $b="Palembang";	break;
		case 11: $b="Bengkulu";	break;
		case 12: $b="Muara Enim";	break;
		case 13: $b="Lampung";	break;
		case 14: $b="Musi Rawas";	break;
		case 15: $b="Pangkalan Kerinci";	break;
	}
	return $b;
}


function satker($x){
	switch ($x) {
		case 1: $satker="PTA Pekanbaru"; break;		
		case 2: $satker="PA Tembilahan"; break;		
		case 3: $satker="PA Pangkalan Kerinci"; break;		
		case 4: $satker="PA Selat Panjang"; break;		
	}
	return $satker;
}

                                            


function jenis_perkara($x){
	switch ($x) {
		case 1: $jenis="Izin Poligami"; break;				
		case 2: $jenis="Pencegahan Perkawinan"; break;				
		case 3: $jenis="Penolakan Perkawinan"; break;				
		case 4: $jenis="Pembatalan Nikah"; break;				
		case 5: $jenis="Kelalaian Atas Kewajiban Suami/Istri"; break;				
		case 6: $jenis="Cerai Talak"; break;				
		case 7: $jenis="Cerai Gugat"; break;				
		case 8: $jenis="Harta Bersama"; break;				
		case 9: $jenis="Penguasaan Anak/Hadonah"; break;				
		case 10: $jenis="Nafkah Oleh Ibu"; break;				
		case 11: $jenis="Hak Hak Bekas Istri"; break;				
		case 12: $jenis="Pengesahan Anak/Pengangkatan"; break;				
		case 13: $jenis="Pencabutan Kekuasaan Orang Tua"; break;				
		case 14: $jenis="Perwalian"; break;				
		case 15: $jenis="Pencabutan Kekuasaan Wali"; break;				
		case 16: $jenis="Penunjukan Orang Lain Sebagai Wali"; break;				
		case 17: $jenis="Ganti Rugi Terhadap Wali"; break;				
		case 18: $jenis="Asal Usul Anak"; break;				
		case 19: $jenis="Tolak Kawin Campur"; break;				
		case 20: $jenis="Isibat Nikah"; break;				
		case 21: $jenis="Izin Nikah"; break;				
		case 22: $jenis="Dispensasi Nikah"; break;				
		case 23: $jenis="Wali Adhol"; break;				
		case 24: $jenis="Ekonomi Syariah"; break;				
		case 25: $jenis="Kewarisan"; break;				
		case 26: $jenis="Wasiat"; break;				
		case 27: $jenis="Hibah"; break;				
		case 28: $jenis="Wakaf"; break;				
		case 29: $jenis="Zakat/Infaq/Shodaqoh"; break;				
		case 30: $jenis="Penetapan Ahli Waris"; break;				
		case 31: $jenis="Lain-Lain"; break;				
	}
	return $jenis;
}


	function angka_romawi($x){
		switch ($x) {
			case 1: $angka="I"; break;			
			case 2: $angka="II"; break;			
			case 3: $angka="III"; break;			
			case 4: $angka="IV"; break;			
			case 5: $angka="V"; break;			
			case 6: $angka="VI"; break;			
			case 7: $angka="VII"; break;			
			case 8: $angka="VIII"; break;			
			case 9: $angka="IX"; break;			
			case 10: $angka="X"; break;			
			case 11: $angka="XI"; break;			
			case 12: $angka="XII"; break;			
			case 13: $angka="XIII"; break;			
			case 14: $angka="XIV"; break;			
		}
		return $angka;
	}




	function jenis_dagangan($x){
		switch ($x) {
			case "los": $jenis_dagangan="Los"; break;			
			case "kios": $jenis_dagangan="Kios"; break;			
			case "kakilima": $jenis_dagangan="Kaki Lima"; break;		
		}
		return $jenis_dagangan;
	}


	function view_tgl($x){
		$tgl=substr($x, 8,2);
		$bulan=substr($x, 5,2);
		switch ($bulan) {
			case '1': $y="Januari"; break;
			case '2': $y="Februari"; break;
			case '3': $y="Maret"; break;
			case '4': $y="April"; break;
			case '5': $y="Mei"; break;
			case '6': $y="Juni"; break;
			case '7': $y="Juli"; break;
			case '8': $y="Agustus"; break;
			case '9': $y="September"; break;
			case '10': $y="Oktober"; break;
			case '11': $y="November"; break;
			case '12': $y="Desember"; break;
		}
		$thn=substr($x, 0,4);
		$tanggal=$tgl." ".$y." ".$thn;
		return $tanggal;
	}

// end of php codes
	// wrote by prianggaemilsyah a.k.a juniorsumbar
}
?>