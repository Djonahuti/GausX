<?php 
		$server="localhost";
		$user="root";
		$password="";
		$database="david";
		$con=mysqli_connect($server,$user,$password,$database);
		if(!$con)
		echo 'Connection failed !';
?>	