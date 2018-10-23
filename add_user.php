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
$f=$_POST['q6'];
$sql="INSERT INTO users(username,firstname,lastname,password,role,email) VALUES('$c','$a','$b','$d','$e','$f')";
$result = mysqli_query($link,$sql);
if($result == 1) 
{
     header("location: userhome.php");
}
?>