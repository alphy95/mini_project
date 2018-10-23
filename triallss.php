<?php
$link = mysqli_connect("localhost", "root", "", "example");
 //Check connection
if($link === false)
{
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
$c="34";
$d="uuuu";
$sql="UPDATE ex3 SET sub1='$d' WHERE id='$c'";
$result = mysqli_query($link,$sql);
if($result == 1) 
{
     echo "success";
}
?>