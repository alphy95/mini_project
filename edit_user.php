<?php
$a=$_POST['k1'];
$a=trim($a);
$b=$_POST['k2'];
$c=$_POST['h1'];
$d=$_POST['h2'];
$e=$_POST['h3'];
$conn = mysqli_connect("localhost", "root", "", "alphy");
//Check connection
if($conn === false)
{
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
$connectDb=mysqli_select_db($conn,'alphy');
$result = mysqli_query($conn,"UPDATE users  SET username='$b',password='$c',role='$d',email='$e' where firstname='$a'");
header("location: prohome.php");
?>
