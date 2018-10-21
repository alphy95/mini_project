<?php
$link = mysqli_connect("localhost", "root", "", "alphy");
 //Check connection
if($link === false)
{
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
$a=$_POST['q1'];
$b=$_POST['q2'];
$c=$_POST['q3'];
$sql="INSERT INTO products(pro_name,category,price) VALUES('$a','$b','$c')";
$result = mysqli_query($link,$sql);
if($result == 1) 
{
     header("location: prohome.php");
}
?>