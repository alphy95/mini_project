<?php
include '../connection.php';
if(isset($_GET['oid']))
{
$up=mysqli_query($dbcon,"update order_data set st='1' where id='".$_GET['oid']."'");
$chk=mysqli_query($dbcon,"select * from order_chair where order_id='".$_GET['oid']."'");
while($rchk=mysqli_fetch_row($chk))
{
    $chid=$rchk[3];
    $up=mysqli_query($dbcon,"update chair_data set st='0' where id='$chid'");
}
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="../web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="../web/css/style.css" type="text/css" media="all" />
<!--// css -->
    </head>
    <body>
        
        <div class="container">            
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <a href="index.php"><div class="label label-danger pull-right"><span class="glyphicon glyphicon-home"></span> HOME</div></a>
                    <form method="post">
                        <?php
                        
                            $sel_o=mysqli_query($dbcon,"select * from order_data where id='".$_GET['oid']."'");
                            $ro=mysqli_fetch_row($sel_o);
                            ?>
                        <table class="table table-bordered table-condensed">
                            <tr>
                                <td style="width: 50%">Customer Name</td>
                                <td><?php echo $ro[1] ?></td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>
                                <td><?php echo $ro[3] ?></td>
                            </tr>
                            <tr>
                                <td>Total Seats</td>
                                <td><?php echo $ro[2] ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center>Allotted Seat</center></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php
                                    $sel_st=mysqli_query($dbcon,"select * from order_chair where order_id='".$_GET['oid']."'");
                                    if(mysqli_num_rows($sel_st)>0)
                                    {
                                        while($rst=mysqli_fetch_row($sel_st))
                                        {
                                            echo "Table - $rst[2] : Chair No: $rst[3]<br />";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php
                    $sel_odr=mysqli_query($dbcon,"select * from order_item where order_id='".$_GET['oid']."'");
                    if(mysqli_num_rows($sel_odr)>0)
                    {
                        ?>
                            <center><b>ITEM DETAILS</b></center>
                    <table class="table table-bordered table-condensed table-hover table-responsive">
                        <tr>
                            <td>#</td>
                            <td>Item</td>
                            <td>Rate</td>
                            <td>Qty</td>
                            <td>Amount</td>
                        </tr>
                        <?php
                        $i=0;
                        $sum=0;
                        while($rodr=mysqli_fetch_row($sel_odr))
                        {
                            $i++;
                            ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td>
                                <?php 
                                $sel_itm=mysqli_query($dbcon,"select * from item_data where id='".$rodr[3]."'");
                                $ritm1=mysqli_fetch_row($sel_itm);
                                echo $ritm1[2];
                                ?></td>
                            <td><?php echo $rodr[4] ?></td>
                            <td><?php echo $rodr[5] ?></td>
                            <td><?php echo $rodr[6] ?></td>
                        </tr>
                        <?php
                        $sum=$sum+$rodr[6];
                        }
                        ?>
                        <tr>
                            <td colspan="4">Total</td>
                            <td><?php echo $sum ?></td>
                        </tr>                        
                    </table>
                    <?php
                    }
                    ?>
                                </td>
                            </tr>
                        </table>
                    
                       
                    </form>
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>
        
    </body>
</html>

