<?php
include '../connection.php';
if(isset($_POST['sub']))
{
    $cn=$_POST['cn'];
    $tst=$_POST['tst'];
    $con=$_POST['con'];
    $ins=mysqli_query($dbcon,"INSERT INTO `order_data`(`id`, `cus_nme`, `tot_set`, `cont`, `dt`, `st`, `ordr_by`) VALUES ('','$cn','$tst','$con','".date('Y-m-d')."','0','name')");
    $id=  mysqli_insert_id($dbcon);
    if($ins>0)
    {
        header("location:index.php?oid=$id");
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
		<!--<div class="top-banner">
			
		</div>-->
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
                                                            <li><a class="active" href="index.php">Home</a></li>                                                            
                                                            <li><a class="" href="report.php">Sale Report</a></li>
                                                            <li><a class="" href="settings.php">Settings</a></li>
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
				<h2><b>New Customer</b></h2>
			</div><br />
			<div class="container">
                            <div class="col-lg-8">
                                
                    <form method="post">
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
                                <td>Choose Table</td>
                                <td>
                                    <select name="cat" class="form-control" onchange="shotable(this.value,'<?php echo $_GET['oid'] ?>')">
                                        <option>Choose</option>
                                        <option value="6">6 Chair Table</option>
                                        <option value="4">4 Chair Table</option>
                                        <option value="2">2 Chair Table</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="hidden" id="tt0" class="form-control" value="<?php echo $ro[2] ?>" /></td>
                                <td><input type="hidden" id="tt1" value="0" class="form-control" /></td>
                            </tr>
                            <tr>
                            <td colspan="2"><center><a href="order_item.php?oid=<?php echo $_GET['oid'] ?>" class="btn btn-sm btn-danger">Proceed</a></center></td>
                        </tr>
                        </table>
                    <div id="tbl"> 
                    </div>
                        <script>
                    function shotable(x,o)
                    {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("tbl").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET", "loadtable.php?q=" + x+"&o="+o, true);
                        xmlhttp.send();
                    }
                    function bookchair(x,y,t)
                    {
                        if(document.getElementById("tt1").value<document.getElementById("tt0").value)
                        {
                        document.getElementById("tt1").value=parseInt(document.getElementById("tt1").value)+1;
                        
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("a"+x).innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET", "bookchair.php?q=" + x+"&o="+y+"&t="+t, true);
                        xmlhttp.send();
                        
                        if(document.getElementById("tt1").value==document.getElementById("tt0").value)
                        {
                            
                        }
                        }
                    }
                    function bookchair1(x,y,t)
                    {
                        document.getElementById("tt1").value=parseInt(document.getElementById("tt1").value)-1;
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("a"+x).innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET", "delbookchair.php?q=" + x+"&o="+y+"&t="+t, true);
                        xmlhttp.send();
                    }
                    </script>
                        <?php
                        }
                        else
                        {
                        ?>
                    <table class="table table-bordered table-condensed table-hover table-striped">
                        <tr>
                            <td>Customer Name</td>
                            <td><input type="text" name="cn" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>Total Seat</td>
                            <td><input type="text" name="tst" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>Contact Number</td>
                            <td><input type="text" name="con" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                        <center>
                            <input type="submit" name="sub" value="NEW ORDER" class="btn btn-success btn-sm" />
                        </center>
                            </td>
                        </tr>
                        
                    </table>
                    
                        <?php
                        }
                        ?>
                    </form>
               
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