<?php
	require_once("connect.php");
		
		$sid   = $_GET['sid'];
		$query="DELETE from data where nim ='$nim'";
			
		mysqli_query($connect, $query);
		header("location:dashboard.php");
?>