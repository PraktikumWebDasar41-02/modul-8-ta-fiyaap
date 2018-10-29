<?php
	$l = "localhost"; 
	$u = "root";
	$p = "";
	$d = "mod8";
	$connect = mysql_connect($l, $u, $p, $d);
		
	if (! $connect) {
		die("Konek ke database gagal" . mysqli_connect_error());
	}
?>