<?php
$link = mysqli_connect("localhost", "root", "", "alphy");
 //Check connection
if($link === false)
{
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
$n=$_GET['c1'];
//echo "$n";
$sql="DELETE FROM categories WHERE cat_name='$n'";
$result = mysqli_query($link,$sql);
if($result == 1) 
{
     header("location: cathome.php");
}
?>