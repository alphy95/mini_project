<?php
include '../connection.php';
$q=$_GET['q'];
$o=$_GET['o'];
$t=$_GET['t'];
$sel_id=mysqli_query($dbcon,"update chair_data set st=1 where id='$q'");
$ins=mysqli_query($dbcon,"INSERT INTO `order_chair`(`id`, `order_id`, `tb_id`, `ch_id`) VALUES ('','$o','$t','$q')");
if($ins>0)
{
    ?>
<span id="a<?php echo $q ?>"><span class="glyphicon glyphicon-user" style="color: red; margin: 5px 20px;" onclick="bookchair1('<?php echo $q ?>','<?php echo $o ?>','<?php echo $t ?>')"></span></span>
<?php
}
?>