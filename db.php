<?php 
		$server="localhost";
		$user="root";
		$password="";
		$database="jonah_gaus";
		$con=mysqli_connect($server,$user,$password,$database);
		if(!$con)
		echo 'Connection failed !';
?>
	