<?php
include '../connection.php';
if(isset($_POST['sub']))
{
    $mn=$_POST['mn'];
    header("location:mreport.php?mn=$mn");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Royal Recipes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="../web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="../web/css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="../web/css/owl.carousel.css" type="text/css" media="all">
<link href="../web/css/owl.theme.css" rel="stylesheet">
<!-- font-awesome icons -->
<link href="../web/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="../web/js/jquery-1.11.1.min.js"></script>
<script src="../web/js/bootstrap.js"></script>
<!-- light-box -->
<link rel="stylesheet" href="../web/css/lightbox.css">
<!-- //light-box -->
<script src="../web/js/SmoothScroll.min.js"></script>
<!--search jQuery-->
<script src="../web/js/main.js"></script>
<!--//search jQuery-->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
</head>
<body>
	<div class="w3layouts-banner-top">
		
	</div>
	<!-- banner -->
	<div class="banner">
		<div class="top-banner">
			
		</div>
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1>
                                            <a href="index.php">Royal Recipes</a>
					</h1>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
                                                            <li><a class="" href="index.php">Home</a></li>
                                                            <li><a class="" href="add_product.php">Add Product</a></li>
                                                            <li><a class="" href="add_staff.php">Add Staff</a></li>
                                                            <li><a class="" href="chair.php">Manage Chair</a></li>
                                                            <li><a class="active" href="mreport.php">Monthly Report</a></li>
                                                            <li><a class="" href="report.php">Sale Report</a></li>
                                                            <li><a class="" href="logout.php">LogOut</a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-slider">
			<div class="container">
				<div class="slider">
					<div class="callbacks_container">
						
					</div>
					<script src="../web/js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					 </script>
					<!--banner Slider starts Here-->
				</div>
			</div>
		</div>
	</div>
	<!-- banner -->
	
	<!-- offer -->
	
	<!-- //offer -->
	<!-- special -->
	<div class="special">
		<div class="container">
			<div class="wthree-special-heading">
                            <h2><b>Manage Report</b></h2>
			</div><br />
			<div class="container">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <center>
                                    <form method="post">
                                <input type="month" name="mn" class="form-control"/>
                                <input type="submit" name="sub" value="SHOW REPORT" class="btn btn-sm btn-danger" />
                                    </form>
                                </center>
                            </div>
                            <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <?php
                            if(isset($_GET['mn']))
                            {
                                $mn=$_GET['mn'];
                            ?>                
                            <table class="table table-bordered table-condensed table-hover table-responsive">
                                <tr>
                                    <td>#</td>
                                    <td>Date</td>
                                    <td>Amount</td>
                                </tr>
                                <?php
                                $sel_dt=mysqli_query($dbcon,"select distinct dt from order_data where dt like '%$mn%' and st='2'");
                                if(mysqli_num_rows($sel_dt)>0)
                                {
                                    $i=0;
                                    while($rdt=mysqli_fetch_row($sel_dt))
                                    {
                                        $i++;
                                        ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo date("d-M-Y",strtotime($rdt[0])) ?></td>
                                    <td>
                                        <?php
                                        $selo=mysqli_query($dbcon,"select * from order_data where dt='".$rdt[0]."'");
                                        $tsum=0;
                                        while($ro=mysqli_fetch_row($selo))
                                        {
                                            $oid=$ro[0];
                                            $selamt=mysqli_query($dbcon,"select sum(amt) from order_item where order_id='$oid'");
                                            $selamt=mysqli_fetch_row($selamt);
                                            $tsum=$tsum+$selamt[0];
                                        }
                                        echo "Rs.$tsum/-";
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                            </table>
                            <?php
                            }
                            ?>
            </div>
            <div class="col-lg-6">
                <?php
                if(isset($_GET['oid']))
                {
                   
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
                    
                 <?php      
                }
                ?>
            </div>
                        </div>
		</div>
	</div>
	<!-- //special -->
	<!-- footer -->
	<div class="w3-agile-footer">
		<div class="container">
			
			<div class="agileits-w3layouts-copyright">
            <p>Royal Recipes.+918976543234.royalrecipes@gmail.com</p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<script src="../web/js/owl.carousel.js"></script>  
	<script type="text/javascript" src="../web/js/move-top.js"></script>
	<script type="text/javascript" src="../web/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script type="text/javascript">
			/* init Jarallax */
			$('.jarallax').jarallax({
				speed: 0.5,
				imgWidth: 1366,
				imgHeight: 768
			})
		</script>
</body>	
</html>