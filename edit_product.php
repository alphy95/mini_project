<?php
$a=$_POST['k1'];
$b=$_POST['k2'];
$c=$_POST['h1'];
$d=$_POST['h2'];
$conn = mysqli_connect("localhost", "root", "", "alphy");
//Check connection
if($conn === false)
{
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
$connectDb=mysqli_select_db($conn,'alphy');
$result = mysqli_query($conn,"UPDATE products  SET pro_name='$b',category='$c',price='$d' where pro_name='$a'");
header("location: prohome.php");
?>
