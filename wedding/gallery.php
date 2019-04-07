<?php 
session_start();
require '../db.php'; ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Venue a Wedding Category Bootstrap Responsive Website Template | Home :: w3layouts</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Venue Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link rel="stylesheet" type="text/css" href="../css/popup.css">
<link href="//fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<style>
	.w3-lft a{
		color: black;
	}
	.service{
		color: black;
		text-decoration: underline;
	}
	.mm{
		color: black;
	}
	ul.nav li a{
		color: black !important;
	}
	ul.dropdown-menu{
		background: linear-gradient(#c9c9f9,#cdf0cd,#c3c3f8);
	}
	
	.item-img img {
    height: 350px;

}
.gal-img {
    border: none;
    position: relative;
}
.col-md-4.gal-grid {
    margin-bottom: 25px;
}


.popup_cont {
    opacity: 1;
    top: 67.5px;
    left: 454px;
    right: 456px;
    bottom: 100px;
}
.popup_content img {
    border: 0;
    height: 445px;
    width: 390px;
}
</style>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="../js/jquery.popup.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo service">
						<h1>
							<a href="index.php">Wedding Ceremony</a>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="../index.php">Home</a></li>
									<li class="dropdown">
										<a href="codes.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Events <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="../wedding/index.php">Wedding</a></li>
						            		<li><a href="../birthday/index.php">Birthday</a></li>
						           			<li><a href="../corporate/index.php">Corporate</a></li>
						            		<li><a href="../reception/index.php">Reception</a></li>
						            		<li><a href="../termenic/index.php">Termenic Ceremony</a></li>
										</ul>
									</li>
									<li><a href="service.php">Service</a></li>
									<li><a href="about.php">About</a></li>
									<li class="dropdown">
									<a href="codes.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Gallery <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="gallery.php">Photography</a></li>
						            		<li><a href="video.php">Videography</a></li>
										</ul>
									</li>
									<li><a href="contact.php">Contact</a></li>
									<?php if (isset($_SESSION['username'])): ?>
										<li><a href="../cart.php">Cart( 
										<?php
										$usrnm=$_SESSION['username'];
										 $sql="SELECT * FROM orders WHERE username='$usrnm' AND status=-1";
										 $rst=mysqli_query($con, $sql);
										 echo($rst->num_rows);
										?>
									 items)</a></li>
									<?php endif ?>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>/</span></li>
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>Photography</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Photography</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="w3ls-gallery-grids">
				<div class="col-md-4 gal-grid">
					<div class="gal-img">
						<a href="images/2.jpg" class="b-link-stripe b-animate-go  swipebox popup">
							<div class="item item-type-double">
								<div class="item-hover">
									<div class="item-info">			
										<div class="line"></div>			
										<div class="headline">Venue</div>
										<div class="line"></div>
									</div>
									<div class="mask"></div>
								</div>
								<div class="item-img"><img src="images/2.jpg" alt=" " /></div>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4 gal-grid">
					<div class="gal-img">
						<a href="images/6.jpg" class="b-link-stripe b-animate-go  swipebox popup">
							<div class="item item-type-double">
								<div class="item-hover">
									<div class="item-info">			
										<div class="line"></div>			
										<div class="headline">Venue</div>
										<div class="line"></div>
									</div>
									<div class="mask"></div>
								</div>
								<div class="item-img"><img src="images/6.jpg" alt=" " /></div>
							</div>
						</a>
						<p>Doloremque laudantium</p>
					</div>
				</div>
				<div class="col-md-4 gal-grid">
					<div class="gal-img">
						<a href="images/12.jpg" class="b-link-stripe b-animate-go  swipebox popup">
							<div class="item item-type-double">
								<div class="item-hover">
									<div class="item-info">			
										<div class="line"></div>			
										<div class="headline">Venue</div>
										<div class="line"></div>
									</div>
									<div class="mask"></div>
								</div>
								<div class="item-img"><img src="images/12.jpg" alt=" " /></div>
							</div>
						</a>
						<p>Doloremque laudantium</p>
					</div>
				</div>
				<div class="col-md-4 gal-grid gal-top">
					<div class="gal-img">
						<a href="images/13.jpg" class="b-link-stripe b-animate-go  swipebox popup">
							<div class="item item-type-double">
								<div class="item-hover">
									<div class="item-info">			
										<div class="line"></div>			
										<div class="headline">Venue</div>
										<div class="line"></div>
									</div>
									<div class="mask"></div>
								</div>
								<div class="item-img"><img src="images/13.jpg" alt=" " /></div>
							</div>
						</a>
						<p>Doloremque laudantium</p>
					</div>
				</div>
				<div class="col-md-4 gal-grid gal-top">
					<div class="gal-img">
						<a href="images/14.jpg" class="b-link-stripe b-animate-go  swipebox popup">
							<div class="item item-type-double">
								<div class="item-hover">
									<div class="item-info">			
										<div class="line"></div>			
										<div class="headline">Venue</div>
										<div class="line"></div>
									</div>
									<div class="mask"></div>
								</div>
								<div class="item-img"><img src="images/14.jpg" alt=" " /></div>
							</div>
						</a>
						<p>Doloremque laudantium</p>
					</div>
				</div>
				<div class="col-md-4 gal-grid gal-top">
					<div class="gal-img">
						<a href="images/15.jpg" class="b-link-stripe b-animate-go  swipebox popup">
							<div class="item item-type-double">
								<div class="item-hover">
									<div class="item-info">			
										<div class="line"></div>			
										<div class="headline">Venue</div>
										<div class="line"></div>
									</div>
									<div class="mask"></div>
								</div>
								<div class="item-img"><img src="images/15.jpg" alt=" " /></div>
							</div>
						</a>
						<p>Doloremque laudantium</p>
					</div>
				</div>
				<div class="col-md-4 gal-grid gal-top">
					<div class="gal-img">
						<a href="images/20.jpg" class="b-link-stripe b-animate-go  swipebox popup">
							<div class="item item-type-double">
								<div class="item-hover">
									<div class="item-info">			
										<div class="line"></div>			
										<div class="headline">Venue</div>
										<div class="line"></div>
									</div>
									<div class="mask"></div>
								</div>
								<div class="item-img"><img src="images/20.jpg" alt=" " /></div>
							</div>
						</a>
						<p>Doloremque laudantium</p>
					</div>
				</div>
				<div class="col-md-4 gal-grid gal-top">
					<div class="gal-img">
						<a href="images/17.jpg" class="b-link-stripe b-animate-go  swipebox popup">
							<div class="item item-type-double">
								<div class="item-hover">
									<div class="item-info">			
										<div class="line"></div>			
										<div class="headline">Venue</div>
										<div class="line"></div>
									</div>
									<div class="mask"></div>
								</div>
								<div class="item-img"><img src="images/17.jpg" alt=" " /></div>
							</div>
						</a>
						<p>Doloremque laudantium</p>
					</div>
				</div>
				<div class="col-md-4 gal-grid gal-top">
					<div class="gal-img">
						<a href="images/20.jpg" class="b-link-stripe b-animate-go  swipebox popup">
							<div class="item item-type-double">
								<div class="item-hover">
									<div class="item-info">			
										<div class="line"></div>			
										<div class="headline">Venue</div>
										<div class="line"></div>
									</div>
									<div class="mask"></div>
								</div>
								<div class="item-img"><img src="images/4.jpg" alt=" " /></div>
							</div>
						</a>
						<p>Doloremque laudantium</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
				<!-- swipe box js -->
					<script src="js/jquery.swipebox.min.js"></script> 
						<script type="text/javascript">
							jQuery(function($) {
								$(".swipebox").swipebox();
							});
					</script>
				<!-- //swipe box js -->

				<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //gallery -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<h5><a href="index.php">Venue</a></h5>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Contact Info</h3>
					<h4>Call Us <span>+1234 567 891</span></h4>
					<p>My Company, 875 Jewel Road <span>8907 Ukraine.</span></p>
				</div>
				<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
					<h3>Navigation</h3>
					<ul class="w3layouts_footer_nav">
						<li><a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
						<li><a href="gallery.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a></li>
						<li><a href="icons.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Icons</a></li>
						<li><a href="codes.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Short Codes</a></li>
						<li><a href="contact.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 agileinfo_footer_grid">
					<h3>Recent Posts</h3>
					<div class="agileinfo_footer_grid_left">
						<a href="single.php"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="single.php"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="single.php"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="single.php"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3_agileits_footer_copy">
			<div class="container">
				<p>© 2017 Venue. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {				
			$().UItoTop({ easingType: 'easeOutQuart' });
			var options = { type : 'image' };
			$('a.popup').popup(options);			
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>