<?php
include '../connection.php';
session_start();
$uid=$_SESSION['stf'];
$sel=mysqli_query($dbcon,"select * from user_log where uid='$uid'");
$r=mysqli_fetch_row($sel);
if(isset($_POST['sub']))
{
    $np=$_POST['np'];
    $up=mysqli_query($dbcon,"update user_log set pas='$np' where uid='$uid'");
    if($up>0)
    {
        header("location:settings.php?suc=1");
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
	<div class="banner" style="background:url('images.jpg')">
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
                                                            <li><a class="" href="report.php">Sale Report</a></li>
                                                            <li><a class="active" href="settings.php">Settings</a></li>
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
				<h2><b>Settings</b></h2>
			</div><br />
			<div class="container">
                            <div class="col-lg-8">
                                <script>
                                function chk1(x)
                                {
                                    var p=document.getElementById("cp1").value;
                                    if(p!=x)
                                    {
                                        $("#subbtn").hide();
                                    }
                                    else{
                                        $("#subbtn").show();
                                    }
                                }
                                function chk2(x)
                                {
                                    var p5=document.getElementById("cp").value;
                                    var p6=document.getElementById("cp1").value;
                                    var p=document.getElementById("np").value;
                                    if(p!=x || p5!=p6)
                                    {
                                        $("#subbtn").hide();
                                    }
                                    else{
                                        $("#subbtn").show();
                                    }
                                }
                                </script>
                                <form method="post">
                                    <table class="table table-bordered table-condensed table-hover table-striped">
                                        <tr>
                                            <td>Current Password</td>
                                            <td><input type="text" name="cp" id="cp" class="form-control" onblur="chk1(this.value)" />
                                                <input type="hidden" name="cp1" value="<?php echo $r[2] ?>" id="cp1" class="form-control" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>New Password</td>
                                            <td><input type="text" name="np" id="np" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td>Confirm Password</td>
                                            <td><input type="text" name="cpd" id="cpd" onblur="chk2(this.value)" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                        <center>
                                            <input type="submit" name="sub" id="subbtn" value="CHANGE PASSWORD" class="btn btn-sm btn-danger" />
                                        </center>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                <center>
                        <?php
                        if(isset($_GET['suc']))
                        {
                            echo"Password Changed";
                        }
                        ?></center>
                            </div>
                            <div class="col-lg-8">
                                
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