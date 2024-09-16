<?php
session_start();
ob_start(); 

include("db.php");

$username=$_SESSION['uname'];
$image1=$_SESSION['a'][5];
$image2=$_SESSION['a'][7];
$image3=$_SESSION['a'][9];
$frag1=$_SESSION['a'][6];
$frag2=$_SESSION['a'][8];
$frag3=$_SESSION['a'][10];

$query1="update user set image1='$image1' where username='$username'";
$query2="update user set image2='$image2' where username='$username'";
$query3="update user set image3='$image3' where username='$username'";
$query4="update user set frag1='$frag1' where username='$username'";
$query5="update user set frag2='$frag2' where username='$username'";
$query6="update user set frag3='$frag3' where username='$username'";

$result=mysqli_query($con,$query1);
$result=mysqli_query($con,$query2);
$result=mysqli_query($con,$query3);
$result=mysqli_query($con,$query4);
$result=mysqli_query($con,$query5);
$result=mysqli_query($con,$query6);
				
header("Location: indexgp.html");	

?>