<?php require 'header.php'; ?>
<style>
	.w3-lft a{
		color: black;
	}
	.service{
		height: 100%;
		background: url('../images/banner.jpg');
		background-attachment: fixed;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	    color: white;
	}
	img.img-responsive {
    transition: 0.35s;
}

img.img-responsive:hover {
    transform: scale(1.1);
}
.aa{text-decoration: underline;}
	.mm{
		color: black;
	}
	ul.nav li a{
		color: black !important;
	}
	ul.dropdown-menu{
		background: linear-gradient(#c9c9f9,#cdf0cd,#c3c3f8);
	}
	.an{

      color: white;
    font-weight: bold;
    text-align: center;
    
	}
</style>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1 class="aa">
							<a href="service.php">Service</a>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom agileinfo-header-bottom">
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
									<li><a href="index.php">Home</a></li>
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
									<li><a class="active" href="service.php">Service</a></li>
									<li><a href="about.php">About</a></li><li class="dropdown">
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
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>Service</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Services</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- services -->
	<div class="agile-ser service">
		<div class="container">
				<div class="agile-ser-tp">
					<div class="col-md-4 w3-lft">
						<a href="venue.php">
							<div class="w3agile_special_deals_grid_left_grid">
							<img src="../images/23.jpg" class="img-responsive" alt="">
						</div>
							<h4 class="an">Venue Selection</h4>
						</a>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<a href="photography.php">
							<div class="w3agile_special_deals_grid_left_grid">
							<img src="../images/20.jpg" class="img-responsive" alt="">
						</div>
							<h4 class="an">Photography</h4>
						</a>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
							<a href="catering.php">
								<div class="w3agile_special_deals_grid_left_grid">
								<img src="../images/25.jpg" class="img-responsive" alt="">
							</div>
								<h4 class="an">Catering & Food</h4>
							</a>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="security.php">
								<div class="w3agile_special_deals_grid_left_grid">
								<img src="../images/22.jpg" class="img-responsive" alt="">
							</div>
								<h4 class="an">Security Service</h4>
							</a>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>		
						</div>	
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="decoration.php">
								<div class="w3agile_special_deals_grid_left_grid">
								<img src="../images/26.jpg" class="img-responsive" alt="">
							</div>
								<h4 class="an">Decor & Decorations</h4>
							</a>
							<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
						</div>	
					</div>				
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="entertainment.php">
								<div class="w3agile_special_deals_grid_left_grid">
								<img src="../images/21.jpg" class="img-responsive" alt="">
							</div>
								<h4 class="an">Entertainment & Led Show</h4>
							</a>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
						</div>		
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //services -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<h5><a href="index.php">Service</a></h5>
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
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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
</body>	
</html>