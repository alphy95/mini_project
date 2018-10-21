<?php
$link = mysqli_connect("localhost", "root", "", "alphy");
 //Check connection
if($link === false)
{
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
$n=$_GET['c1'];
//echo "$n";
$sql="DELETE FROM users WHERE firstname='$n'";
$result = mysqli_query($link,$sql);
if($result == 1) 
{
     header("location: userhome.php");
}
?>