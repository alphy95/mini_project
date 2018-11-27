<center>
<?php
include '../connection.php';
$q=$_GET['q'];
$sel_id=mysqli_query($dbcon,"select * from table_data where tbl_cat='$q'");
$rid=mysqli_fetch_row($sel_id);
$catid=$rid[0];
$sel_tbl=mysqli_query($dbcon,"select distinct(tabl_id) from chair_data where typ_id='$catid'");
$i=0;
while($rtbl=mysqli_fetch_row($sel_tbl))
{
    echo"<div style='border: 1px solid white; box-shadow:0px 0px 2px black;' class='col-lg-4'>";
    $x=0;
    echo "<br /><b><center>Table-$rtbl[0]</center></b><br />";
    $sel_ch=mysqli_query($dbcon,"select * from chair_data where tabl_id='$rtbl[0]' and typ_id='$catid'");
    while($rch=mysqli_fetch_row($sel_ch))
    {
        $x++;
        $i++;
        if($rch[3]==0)
        {
        ?>
<span id="a<?php echo $rch[0] ?>"><span class="glyphicon glyphicon-user" style="color: green; margin: 5px 20px;"></span></span>
<?php
        }
        else
        {
            ?>
<span id="a<?php echo $rch[0] ?>"><span class="glyphicon glyphicon-user" style="color: red; margin: 5px 20px;"></span></span>
<?php
        }
        if($x==$q/2){
            ?>
<div style="width: 100%; height: 125px;">
    <img src="tbl1.jpg" class="img img-responsive" style="height: 125px;" />
</div>
<?php
        }
    }
    echo"</div>";
}
?>
    </center>
