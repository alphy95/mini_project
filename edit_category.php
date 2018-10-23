<?php
$link = mysqli_connect("localhost", "root", "", "alphy");
//Check connection
if($link === false)
{
   die("ERROR: Could not connect. " . mysqli_connect_error());
}








$a=$_POST['k1'];
$b=$_POST['k2'];
//echo $a;
$a=trim($a);
// echo $b;


$k="SELECT id FROM categories WHERE cat_name='$a'";
$re=mysqli_query($link,$k);
if($re === false){echo "not connected";}
$row=mysqli_fetch_array($re,MYSQLI_NUM);
$c=$row[0];
echo $c;
//echo "hello";
// $count=mysqli_num_rows($re);
$sql="UPDATE categories SET cat_name='$b' WHERE id='$c'";
$result = mysqli_query($link,$sql);
if($result == 1) 
{
     header("location: cathome.php");
}
 mysqli_close($link);
?>