<?php

/**
* 
*/
class CrudClass 
{

	# variable primary key
	var $pk;
	
	// setting primary key
	function SetPk($x){
		$this->pk=$x;
	}

	
	// function read all / tables
	function ReadAll1($x){
		$q=mysql_query("SELECT * FROM $x ORDER BY nama,nip ASC");
		return $q;
	}

	// function read all / tables
	function ReadAll($x){
		$q=mysql_query("SELECT * FROM $x ORDER BY id DESC");
		return $q;
	}

	// function
	function ReadAllClausa2($x,$clausa1,$value1,$clausa2,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2'");
		return $q;
	}

	// function
	function ReadAllClausa3($x,$clausa1,$value1,$clausa2,$value2,$clausa3,$value3){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2' AND $clausa3='$value3'");
		return $q;
	}

	// function
	function ReadAllClausa4($x,$clausa1,$value1,$clausa2,$value2,$clausa3,$value3,$clausa4,$value4){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2' AND $clausa3='$value3' AND $clausa4='$value4'");
		return $q;
	}
	// function read all / tables
	function ReadAllOrder($x,$y){
		$q=mysql_query("SELECT * FROM $x ORDER BY $y ASC");
		return $q;
	}


	// function read all / tables
	function ReadAllOrderDesc($x,$y){
		$q=mysql_query("SELECT * FROM $x ORDER BY $y DESC");
		return $q;
	}


	// function
	function ReadAllClausa($x,$clausa,$value){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa='$value'");
		$d=mysql_fetch_assoc($q);
		return $d;
	}
	// function reading the particurarly column (with particularly result)
	
	// function
	function ReadAllClausaAnd($x,$clausa1,$value1,$clausa2,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2'");
		$d=mysql_fetch_assoc($q);
		return $d;
	}
	// function reading the particurarly column (with particularly result)

	// function
	function ReadAllClausaAndAnd($x,$clausa1,$value1,$clausa2,$value2,$clausa3,$value3){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2' AND $clausa3='$value3'");
		$d=mysql_fetch_assoc($q);
		return $d;
	}
	// function reading the particurarly column (with particularly result)



	// function
	function ReadAllClausaLengthAll($x,$column,$value){
		$q=mysql_query("SELECT * FROM $x WHERE length($column)!='$value'");
		return $q;
	}

	// function
	function ReadAllClausaLength($x,$column,$value){
		$q=mysql_query("SELECT * FROM $x WHERE length($column)='$value'");
		return $q;
	}

	// function
	function ReadAllClausaLengthAllAnd($x,$clausa1,$value1,$column,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND length($column)!='$value2'");
		return $q;
	}

	// function
	function ReadAllClausaLengthAnd($x,$clausa1,$value1,$column,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND length($column)='$value2'");
		return $q;
	}


	// function
	function ReadAllClausaLengthAllSearch($x,$column1,$value1,$column2,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE length($column1)!='$value1' AND $column2 LIKE '%$value2%'");
		return $q;
	}

	// function
	function ReadAllClausaLengthSearch($x,$column1,$value1,$column2,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE length($column1)='$value1' AND $column2 LIKE '%$value2%'");
		return $q;
	}


	// cek input data jadwal 2 variabel
	function checkjadwal2($table,$a,$b,$value1,$value2){
		$q=mysql_query("SELECT * FROM $table WHERE $a='$value1' AND $b='$value2'");
		$d=mysql_num_rows($q);
		return $d;
	}

	// cek input data jadwal 2 variabel
	function checkjadwal3($table,$a,$b,$c,$value1,$value2,$value3){
		$q=mysql_query("SELECT * FROM $table WHERE $a='$value1' AND $b='$value2' AND $c='$value3'");
		$d=mysql_num_rows($q);
		return $d;
	}







	// function read all distinct/ tables
	function ReadAllDistinct($x,$y){
		$q=mysql_query("SELECT DISTINCT $y FROM $x ORDER BY id ASC");
		return $q;
	}

	// function read all distinct/ tables
	function ReadAllDistinctClausa($x,$y,$clausa1,$value1){
		$q=mysql_query("SELECT DISTINCT $y FROM $x WHERE $clausa1='$value1'");
		return $q;
	}

	// function read all distinct/ tables
	function ReadAllDistinctClausaAnd($x,$y,$clausa1,$value1,$clausa2,$value2){
		$q=mysql_query("SELECT DISTINCT $y FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2'");
		return $q;
	}

	// function read all distinct/ tables
	function ReadAllDistinctClausaAnd2($x,$y,$clausa1,$value1,$clausa2,$value2,$clausa3,$value3){
		$q=mysql_query("SELECT DISTINCT $y FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2' AND $clausa3='$value3'");
		return $q;
	}

	// function read all distinct/ tables
	function ReadAllDistinctAnd($x,$y,$clausa1,$value1){
		$q=mysql_query("SELECT DISTINCT $y FROM $x WHERE $clausa1='$value1'");
		return $q;
	}

	// function read all distinct/ tables
	function ReadAllDistinctAndAnd($x,$y,$clausa1,$value1,$clausa2,$value2){
		$q=mysql_query("SELECT DISTINCT $y FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2'");
		return $q;
	}

	// function read all distinct/ tables with order
	function ReadAllDistinctOrder($x,$y,$o){
		$q=mysql_query("SELECT DISTINCT $y FROM $x ORDER BY $o ASC");
		return $q;
	}

	// function read all / tables with limit 
	function ReadAllLimit($x,$limit){
		$q=mysql_query("SELECT * FROM $x ORDER BY id ASC LIMIT $limit");
		return $q;
	}

	// function read all / tables with random limit 
	function ReadAllRandomLimit($x,$limit){
		$q=mysql_query("SELECT * FROM $x ORDER BY rand() LIMIT $limit");
		return $q;
	}
	// function read all / tables with limit and choice
	function ReadAllLimitChoice($x,$clausa,$value,$limit){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa='$value' ORDER BY id ASC LIMIT $limit");
		return $q;
	}


	// function
	function ReadAllClausaPartAsc($x,$clausa,$value){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa='$value' ORDER BY id ASC");
		return $q;
	}
	// function reading the particurarly column (with no particularly result)

	// function
	function ReadAllClausaPartDesc($x,$clausa,$value){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa='$value' ORDER BY id DESC");
		return $q;
	}
	// function reading the particurarly column (with no particularly result)

	// function
	function ReadAllClausaPart($x,$clausa,$value){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa='$value'");
		return $q;
	}
	// function reading the particurarly column (with no particularly result)
	
	// function
	function ReadAllClausaPartAnd($x,$clausa1,$value1,$clausa2,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2'");
		return $q;
	}
	// function reading the particurarly column (with no particularly result)

	// function
	function ReadAllClausaPartAndAnd($x,$clausa1,$value1,$clausa2,$value2,$clausa3,$value3){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2' AND $clausa3='$value3'");
		return $q;
	}

	// function
	function ReadAllClausaPartAndAnd1($x,$clausa1,$value1,$clausa2,$value2,$clausa3,$value3,$v1,$v2,$v3,$v4,$v5,$v6,$v7){
		$q=mysql_query("SELECT $v1,$v2,$v3,$v4,$v5,$v6,$v7 FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2' AND $clausa3='$value3'");
		return $q;
	}

	// function reading the particurarly column (with no particularly result)

	// function
	function ReadAllClausaPartAndAndAnd($x,$clausa1,$value1,$clausa2,$value2,$clausa3,$value3,$clausa4,$value4){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1='$value1' AND $clausa2='$value2' AND $clausa3='$value3' AND $clausa4='$value4'");
		return $q;
	}
	// function reading the particurarly column (with no particularly result)

	// function
	function ReadAllClausaPartRandomize($x,$clausa,$value){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa='$value' ORDER BY rand()");
		$d=mysql_fetch_assoc($q);
		return $d;
	}
	// function reading the particurarly column (with particularly result) and randomize
	



	// function if value !=11
	function ReadAllClausaPartLike($x,$clausa1,$value1,$clausa2,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 LIKE '%$value1%' AND length($clausa2)!='$value2'");
		return $q;
	}
	// function reading the particurarly column (with no particularly result)


	// function if value==11
	function ReadAllClausaPartLikeCorrect($x,$clausa1,$value1,$clausa2,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 LIKE '%$value1%' AND length($clausa2)='$value2'");
		return $q;
	}
	// function reading the particurarly column (with no particularly result)




	// function
	function ReadAllClausaPartLikeAnd($x,$clausa1,$value1,$clausa2,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 LIKE '%$value1%' AND $clausa2='$value2'");
		return $q;
	}
	// function reading the particurarly column (with no particularly result)


	//function num_rows
	function ReadCount1Column($x,$y,$c1,$v1,$c2,$v2){
		$q=mysql_query("SELECT sum($y) AS total FROM $x WHERE $c1='$v1' AND $c2='$v2'");
		$d=mysql_fetch_assoc($q);
		return $d;
	}
	// function to counting how much value on 1 column











	// function
	function StandardLike1($x,$clausa1,$value1){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 LIKE '%$value1%'");
		return $q;
	}
	// function reading one table with 2 like opinion

	// function
	function ReadLike1($x,$clausa1,$param1,$value1){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 $param1 '$value1'");
		return $q;
	}
	// function reading one table with 2 like opinion

	// function
	function ReadLike1Left($x,$clausa1,$value1){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 LIKE '%$value1'");
		return $q;
	}
	// function reading one table with 2 like opinion

	// function
	function ReadLike1Right($x,$clausa1,$value1){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 LIKE '$value1%'");
		return $q;
	}
	// function reading one table with 2 like opinion



	// function
	function ReadLike2($x,$clausa1,$param1,$value1,$clausa2,$param2,$value2){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 $param1 '$value1' AND $clausa2 $param2 '$value2'");
		return $q;
	}
	// function reading one table with 2 like opinion

	// function
	function ReadLike3($x,$clausa1,$param1,$value1,$clausa2,$param2,$value2,$clausa3,$param3,$value3){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 $param1 '$value1' AND $clausa2 $param2 '$value2' AND $clausa3 $param3 '$value3'");
		return $q;
	}
	// function reading one table with 3 like opinion

	// function
	function ReadLike4($x,$clausa1,$param1,$value1,$clausa2,$param2,$value2,$clausa3,$param3,$value3,$clausa4,$param4,$value4){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa1 $param1 '$value1' AND $clausa2 $param2 '$value2' AND $clausa3 $param3 '$value3' AND $clausa4 $param4 '$value4'");
		return $q;
	}
	// function reading one table with 4 like opinion

	
	function ReadOneColumnAll($x,$y){
		$q=mysql_query("SELECT $x FROM $y ORDER BY id ASC");
		return $q;	
	}

	// function sum the particurarly column
	function ReadSumColumnAll($x,$y,$clausa,$value){
		$q=mysql_query("SELECT sum($x) as total FROM $y WHERE $clausa='$value'");
		$d=mysql_fetch_assoc($q);
		return $d;
	}

	// function count the particurarly column
	function ReadCountColumnAll($y,$clausa,$value){
		$q=mysql_query("SELECT count(*) as total FROM $y WHERE $clausa='$value'");
		$d=mysql_fetch_assoc($q);
		return $d;
	}

	// function count the particurarly column
	function ReadCountColumnAll2($y,$clausa1,$value1,$clausa2,$value2){
		$q=mysql_query("SELECT count(*) as total FROM $y WHERE $clausa1='$value1' AND $clausa2='$value2'");
		$d=mysql_fetch_assoc($q);
		return $d;
	}

	// function read total data on tables
	function ReadTotal($x){
		$q=mysql_query("SELECT * FROM $x");
		$total=mysql_num_rows($q);
		return $total;
	}

	// function read total data on tables
	function ReadTotal1($x,$clausa,$value){
		$q=mysql_query("SELECT * FROM $x WHERE $clausa='$value'");
		$total=mysql_num_rows($q);
		return $total;
	}

	// function sum all finances of each ship
	function ReadSumColumn($x,$y,$z1,$value1,$z2,$value2){
		$q=mysql_query("SELECT sum($x) AS total FROM $y WHERE $z2=$value2 AND $z1=$value1");
		$d=mysql_fetch_assoc($q);
		return $d;
	}

	// function join 1 get all with 1 clausa
	function JoinOneGetAll($a,$b,$c,$d,$clausa,$value){
		$q=mysql_query("SELECT * 
			FROM $a a
			JOIN $b b
			ON a.$c=b.$d
			WHERE a.$clausa='$value'
			");
		return $q;
	}

	// function join 1 get all with 1 clausa and input to array
	function JoinOneGetAllArr($a,$b,$c,$d,$clausa,$value){
		$q=mysql_query("SELECT * 
			FROM $a a
			JOIN $b b
			ON a.$c=b.$d
			WHERE a.$clausa='$value'
			");
		$d=mysql_fetch_assoc($q);
		return $d;
	}

	// function join 1 get all with 2 clausa
	function JoinOneGetAll2($a,$b,$c,$d,$clausa,$value,$clausa2,$value2){
		$q=mysql_query("SELECT * 
			FROM $a a
			JOIN $b b
			ON a.$c=b.$d
			WHERE a.$clausa='$value' AND a.$clausa2='$value2'
			");
		return $q;
	}


	// function join 1 get all with 2 clausa
	function JoinOneGetAllLike($a,$b,$c,$d,$clausa,$value,$clausa2,$value2){
		$q=mysql_query("SELECT * 
			FROM $a a
			JOIN $b b
			ON a.$c=b.$d
			WHERE a.$clausa='$value' AND b.$clausa2 LIKE '%$value2%'
			");
		return $q;
	}


	// function input 1 data with null id
	function add1($x,$a){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a')");
		return $q;
	} 
	// function input 2 data with null id
	function add2($x,$a,$b){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b')");
		return $q;
	} 
	// function input 3 data with null id
	function add3($x,$a,$b,$c){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c')");
		return $q;
	} 
	// function input 4 data with null id
	function add4($x,$a,$b,$c,$d){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d')");
		return $q;
	} 
	// function input 5 data with null id
	function add5($x,$a,$b,$c,$d,$e){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e')");
		return $q;
	} 
	// function input 6 data with null id
	function add6($x,$a,$b,$c,$d,$e,$f){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f')");
		return $q;
	} 
	// function input 7 data with null id
	function add7($x,$a,$b,$c,$d,$e,$f,$g){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g')");
		return $q;
	} 
	// function input 8 data with null id
	function add8($x,$a,$b,$c,$d,$e,$f,$g,$h){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h')");
		return $q;
	} 
	// function input 8 data with id
	function add8id($x,$a,$b,$c,$d,$e,$f,$g,$h){
		$q=mysql_query("INSERT INTO $x VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')");
		return $q;
	} 
	// function input 9 data with null id
	function add9($x,$a,$b,$c,$d,$e,$f,$g,$h,$i){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i')");
		return $q;
	} 
	// function input 10 data with null id
	function add10($x,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')");
		return $q;
	} 
	// function input 11 data with null id
	function add11($x,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')");
		return $q;
	} 
	// function input 12 data with null id
	function add12($x,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')");
		return $q;
	} 
	// function input 13 data with null id
	function add13($x,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')");
		return $q;
	} 
	// function input 14 data with null id
	function add14($x,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')");
		return $q;
	} 
	// function input 15 data with null id
	function add15($x,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')");
		return $q;
	} 

	// function input 16 data with null id
	function add16($x,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p')");
		return $q;
	} 

	// function input 17 data with null id
	function add17($x,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q')");
		return $q;
	} 

	// function input 18 data with null id
	function add18($x,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r')");
		return $q;
	} 

	// function input 24 data with null id
	function add24($x,$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$a19,$a20,$a21,$a22,$a23,$a24){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24')");
		return $q;
	} 
	// function input 25 data with null id
	function add25($x,$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$a19,$a20,$a21,$a22,$a23,$a24,$a25){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25')");
		return $q;
	} 

	// function input 26 data with null id
	function add26($x,$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$a19,$a20,$a21,$a22,$a23,$a24,$a25,$a26){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26')");
		return $q;
	} 
	// function input 27 data with null id
	function add27($x,$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$a19,$a20,$a21,$a22,$a23,$a24,$a25,$a26,$a27){
		$q=mysql_query("INSERT INTO $x VALUES (null,'$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27')");
		return $q;
	} 


	// function edit 1 data with id
	function edit1($x,$field1,$id,$a){
		$q=mysql_query("UPDATE $x SET $field1='$a' WHERE id='$id'");
		return $q;
	} 
	// function edit 2 data with id
	function edit2($x,$field1,$field2,$id,$a,$b){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b' WHERE id='$id'");
		return $q;
	} 
	// function edit 3 data with id
	function edit3($x,$field1,$field2,$field3,$id,$a,$b,$c){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c' WHERE id='$id'");
		return $q;
	} 
	// function edit 4 data with id
	function edit4($x,$field1,$field2,$field3,$field4,$id,$a,$b,$c,$d){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d' WHERE id='$id'");
		return $q;
	} 
	// function edit 5 data with id
	function edit5($x,$field1,$field2,$field3,$field4,$field5,$id,$a,$b,$c,$d,$e){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e' WHERE id='$id'");
		return $q;
	} 
	// function edit 6 data with id
	function edit6($x,$field1,$field2,$field3,$field4,$field5,$field6,$id,$a,$b,$c,$d,$e,$f){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e',$field6='$f' WHERE id='$id'");
		return $q;
	} 
	// function edit 6 data with nip
	function edit6nip($x,$field1,$field2,$field3,$field4,$field5,$field6,$nip,$a,$b,$c,$d,$e,$f){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e',$field6='$f' WHERE nip='$nip'");
		return $q;
	} 
	// function edit 7 data with id
	function edit7($x,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$id,$a,$b,$c,$d,$e,$f,$g){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e',$field6='$f',$field7='$g' WHERE id='$id'");
		return $q;
	} 
	// function edit 7 data with nip
	function edit7nip($x,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$nip,$a,$b,$c,$d,$e,$f,$g){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e',$field6='$f',$field7='$g' WHERE nip='$nip'");
		return $q;
	} 
	// function edit 8 data with id
	function edit8($x,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$id,$a,$b,$c,$d,$e,$f,$g,$h){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e',$field6='$f',$field7='$g',$field8='$h' WHERE id='$id'");
		return $q;
	} 
	// function edit 8 data with nip
	function edit8nip($x,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$id,$a,$b,$c,$d,$e,$f,$g,$h){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e',$field6='$f',$field7='$g',$field8='$h' WHERE nip='$id'");
		return $q;
	} 
	// function edit 9 data with id
	function edit9($x,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$field9,$id,$a,$b,$c,$d,$e,$f,$g,$h,$i){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e',$field6='$f',$field7='$g',$field8='$h',$field9='$i' WHERE id=$id");
		return $q;
	} 
	// function edit 10 data with id
	function edit10($x,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$field9,$field10,$id,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e',$field6='$f',$field7='$g',$field8='$h',$field9='$i',$field10='$j' WHERE id=$id");
		return $q;
	} 
	// function edit 11 data with id
	function edit11($x,$field1,$field2,$field3,$field4,$field5,$field6,$field7,$field8,$field9,$field10,$field11,$id,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k){
		$q=mysql_query("UPDATE $x SET $field1='$a',$field2='$b',$field3='$c',$field4='$d',$field5='$e',$field6='$f',$field7='$g',$field8='$h',$field9='$i',$field10='$j',$field11='$k' WHERE id=$id");
		return $q;
	} 



	// function truncate
	function truncate($x){
		$q=mysql_query("TRUNCATE TABLE $x");
		return $q;
	}
	// /function truncate



	// function delete 1 data with id
	function delete1($x,$id,$value){
		$q=mysql_query("DELETE FROM $x WHERE $id='$value'");
		return $q;
	} 





// end of php codes
	// wrote by prianggaemilsyah a.k.a juniorsumbar
}
?>