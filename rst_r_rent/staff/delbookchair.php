<?php
include '../connection.php';
$q=$_GET['q'];
$o=$_GET['o'];
$t=$_GET['t'];
$sel_id=mysqli_query($dbcon,"update chair_data set st=0 where id='$q'");
$ins=mysqli_query($dbcon,"delete from `order_chair` where `order_id`='$o' and `tb_id`='$t' and `ch_id`='$q'");
if($ins>0)
{
    ?>
<span id="a<?php echo $q ?>"><span class="glyphicon glyphicon-user" style="color: green; margin: 5px 20px;" onclick="bookchair('<?php echo $q ?>','<?php echo $o ?>','<?php echo $t ?>')"></span></span>
<?php
}
?>