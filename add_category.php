<?php
$link = mysqli_connect("localhost", "root", "", "alphy");
 //Check connection
if($link === false)
{
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
$f=$_POST['q1'];
$sql="INSERT INTO categories(cat_name) VALUES('$f')";
$result = mysqli_query($link,$sql);
if($result == 1) 
{
     header("location: cathome.php");
}
?>