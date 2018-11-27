<select class="form-control" name="im" onchange="loadamt(this.value)">
    <option value="0,0">Choose</option>
<?php
include '../connection.php';
$c=$_GET['c'];
$sel_itm=mysqli_query($dbcon,"select * from item_data where cat_id='".$c."'");
if(mysqli_num_rows($sel_itm)>0)
{
    while($ritm=mysqli_fetch_row($sel_itm))
    {
        ?>
    <option value="<?php echo $ritm[0] ?>,<?php echo $ritm[3] ?>"><?php echo $ritm[2] ?></option>
    <?php
    }
}
?>
</select>