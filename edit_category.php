<?php
$a=$_POST['k1'];
$b=$_POST['k2'];
/*echo "$a";
echo "$b";*/
$link = mysqli_connect("localhost", "root", "", "alphy");
 //Check connection
if($link === false)
{
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*$k="SELECT id FROM categories WHERE cat_name='$a'";
$re=mysqli_query($link,$k);
$row=mysqli_fetch_array($re);
$t=$row['id'];*/
$sql="UPDATE categories SET cat_name='$b' WHERe cat_name='$a'";
$result = mysqli_query($link,$sql);
/*if($result == 1) 
{
     header("location: cathome.php");
}*/
?>