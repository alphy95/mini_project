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
$d=$_POST['q4'];
$e=$_POST['q5'];
$sql="INSERT INTO products(pro_name,category,price,tax,description) VALUES('$a','$b','$c','$d','$e')";
$result = mysqli_query($link,$sql);
if($result == 1) 
{
     header("location: prohome.php");
}
?>