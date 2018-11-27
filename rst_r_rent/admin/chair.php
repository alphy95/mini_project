<?php
include '../connection.php';
if(isset($_POST['sub']))
{
    $cat=$_POST['cat'];
    $c=$_POST['c'];
    $chk=mysqli_query($dbcon,"select * from table_data where tbl_cat='$cat'");
    if(mysqli_num_rows($chk)>0)
    {
        $rc=mysqli_fetch_row($chk);
        $insid=$rc[0];
        for($i=1;$i<=$c;$i++)
        {
            $ins1=mysqli_query($dbcon,"INSERT INTO `table_details`(`id`, `typ_id`, `st`) VALUES ('','$insid','1')");
            $insid1=  mysqli_insert_id($dbcon);
            for($j=1;$j<=$cat;$j++)
            {
                $ins2=mysqli_query($dbcon,"INSERT INTO `chair_data`(`id`, `tabl_id`, `typ_id`, `st`) VALUES ('','$insid1','$insid','0')");
            }
        }
    }
    else
    {
    $ins=  mysqli_query($dbcon, "INSERT INTO `table_data`(`id`, `tbl_cat`, `cnt`, `st`) VALUES ('','$cat','$c','1')");
    $insid=  mysqli_insert_id($dbcon);
    for($i=1;$i<=$c;$i++)
    {
        $ins1=mysqli_query($dbcon,"INSERT INTO `table_details`(`id`, `typ_id`, `st`) VALUES ('','$insid','1')");
        $insid1=  mysqli_insert_id($dbcon);
        for($j=1;$j<=$cat;$j++)
        {
            $ins2=mysqli_query($dbcon,"INSERT INTO `chair_data`(`id`, `tabl_id`, `typ_id`, `st`) VALUES ('','$insid1','$insid','0')");
        }
    }
    }
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
                                                            <li><a class="active" href="chair.php">Manage Chair</a></li>
                                                            <li><a class="" href="mreport.php">Monthly Report</a></li>
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
				<h2>Manage Chair</h2>
			</div><br />
			<div class="container">
                            <div class="col-lg-6">
                               <form method="post">
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <td>Choose Category</td>
                                <td>
                                    <select name="cat" class="form-control">
                                        <option value="6">6 Chair Table</option>
                                        <option value="4">4 Chair Table</option>
                                        <option value="2">2 Chair Table</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Enter Count</td>
                                <td><input type="text" name="c" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="sub" value="ADD" />

                                </td>
                            </tr>
                        </table>
                    </form>
                            </div>
                            <div class="col-lg-6">
                                <table class="table table-bordered table-condensed table-hover">
                        <tr>
                            <td colspan="4"><center><b>AVAILABLE CATEGORY</b></center></td>
                        </tr>
                        <?php
                        $sel_cat=mysqli_query($dbcon,"select * from table_data");
                        if(mysqli_num_rows($sel_cat)>0)
                        {
                            while($rcat=mysqli_fetch_row($sel_cat))
                            {
                                ?>
                        <tr>
                            <td colspan="4">
                                <?php echo $rcat[1] ?> CHAIR TABLE
                            </td>
                        </tr>
                        <?php
                        $sel_tbl=mysqli_query($dbcon,"select * from table_details where typ_id='$rcat[0]'");
                        if(mysqli_num_rows($sel_tbl)>0)
                        {
                            $i=0;
                            while($rtbl=mysqli_fetch_row($sel_tbl))
                            {
                                $i++;
                                ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td>TABLE-<?php echo $rtbl[0] ?></td>
                        </tr>
                        <?php
                            }
                        }
                            }
                        }
                        ?>
                    </table>   
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