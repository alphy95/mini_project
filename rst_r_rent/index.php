<?php
include './connection.php';
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
<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="web/css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="web/css/owl.carousel.css" type="text/css" media="all">
<link href="web/css/owl.theme.css" rel="stylesheet">
<!-- font-awesome icons -->
<link href="web/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="web/js/jquery-1.11.1.min.js"></script>
<script src="web/js/bootstrap.js"></script>
<!-- light-box -->
<link rel="stylesheet" href="web/css/lightbox.css">
<!-- //light-box -->
<script src="web/js/SmoothScroll.min.js"></script>
<!--search jQuery-->
<script src="web/js/main.js"></script>
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
	<div class="banner" style="background:url('images.jpg')" >
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
                                                            <li><a class="active" href="index.php">Home</a></li>
																							
								<li><a href="login.php">Login</a></li>								
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
						<ul class="rslides callbacks callbacks1" id="slider4">
							<!--<li>
								<div class="agileits-banner-info">
									<h3>Lorem ipsum dolor sit amet</h3>
									<p>Donec tellus metus, ornare et mollis ut, maximus id nisi. Quisque scelerisque accumsan sem nec ullamcorper. Cras sed purus eget augue egestas commodo. Sed erat magna, pharetra aliquet mattis mollis, maximus eget lacus. </p>
									<a href="web/menu.html">Menu</a>
								</div>
							</li>-->
							
						</ul>
					</div>
					<script src="web/js/responsiveslides.min.js"></script>
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
				<h3>Today Special</h3>
			</div>
			<div class="special-grids">
				<div id="owl-demo" class="owl-carousel owl-theme">
                                    <?php
                $sel_itm=mysqli_query($dbcon,"select * from item_data order by rand()");
                if(mysqli_num_rows($sel_itm)>0)
                {
                    while($ritm=mysqli_fetch_row($sel_itm))
                    {
                        ?>
						<div class="item">
							<div class="w3-agileits-special-grid-info">
								<img src="admin/item_pic/<?php echo $ritm[4] ?>" class="img img-responsive" />
								<div class="agile-special-grid-text"> 
									<h5><?php echo $ritm[2] ?></h5>
									<p><?php echo $ritm[3] ?>/-</p>
								</div>
							</div>	
						</div>
                                    <?php
                    }
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
	<script src="web/js/owl.carousel.js"></script>  
	<script type="text/javascript" src="web/js/move-top.js"></script>
	<script type="text/javascript" src="web/js/easing.js"></script>
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