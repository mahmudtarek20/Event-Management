<?php require 'header.php'; ?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Events Planning  a Wedding Category Flat Bootstrap Responsive Website Template | Services :: w3layouts</title>
<style type="text/css">
	.pv{min-height: 100px !important;}
	.po{    padding: 0em 0 !important;}
	.active {
    letter-spacing: 0px !important;}
</style>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Planning Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<style type="">
	ul#m_nav_list li a,ul#m_nav_list li a {
    font-size: 12px!important;
    font-weight: bold!important;
    -webkit-font-smoothing: subpixel-antialiased;
}

</style>
</head>
<body>
<!-- banner -->
	<div class="banner1 pv">
		<div class="container">
			<!-- header -->
			<div class="w3_agile_menu">
				<div class="agileits_w3layouts_nav">
					<div id="toggle_m_nav">
						<div id="m_nav_menu" class="m_nav">
							<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
							<div class="m_nav_ham" id="m_ham_2"></div>
							<div class="m_nav_ham" id="m_ham_3"></div>
						</div>
					</div>
					<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item " id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item active" id="moble_nav_item_2"> <a href="services.php" class="link link--kumya"><i class="fa fa-cog" aria-hidden="true"></i><span data-letters="Services">Services</span></a></li>
								
								<li class="dropdown m_nav_item abcd"  id="moble_nav_item_7"><a href="#" class="dropdown-toggle link link--kumya" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #333;">Events <span class="caret"></span></a>
						          <ul class="dropdown-menu abc">
						            <li><a href="wedding/index.php">Wedding Ceremony</a></li>
						            <li><a href="birthday/index.php">Birthday Parties</a></li>
						            <li><a href="corporate/index.php">Corporate Program</a></li>
						            <li><a href="reception/index.php">Reception Program</a></li>
						            <li><a href="termenic/index.php">Termenic Ceremony</a></li>
						          </ul>
						        </li>
								<li class="m_nav_item" id="moble_nav_item_3"> <a href="about.php" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_4"> <a href="work.php" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_6"> <a href="contact.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
								<?php if (isset($_SESSION['username'])){ ?>
								<li class="dropdown m_nav_item"  id="moble_nav_item_7"><a href="#" class="dropdown-toggle link link--kumya" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #333;"><?php echo $_SESSION['username']; ?><span class="caret"></span></a>
						          <ul class="dropdown-menu">
						            <li><a href="wedding/index.php">Profile</a></li>
						            <li><a href="birthday/index.php">Setting</a></li>
						            <li><a href="logout.php">Logout</a></li>
						          </ul>
						        </li>
								<?php }else{ ?>
								<li class="m_nav_item" id="moble_nav_item_8"> <a href="login.php" class="link link--kumya"><i class="fa fa-login" aria-hidden="true"></i><span data-letters="Login">Login</span></a></li>
								<?php } ?>
								<?php if (isset($_SESSION['username'])): ?>
								<li class="m_nav_item" id="moble_nav_item_6"> <a href="cart.php"class="link link--kumya"><i class="fa fa-cart-plus"></i><span data-letters="Cart">( 
								<?php
								$usrnm=$_SESSION['username'];
								 $sql="SELECT * FROM orders WHERE username='$usrnm' AND status=-1";
								 $rst=mysqli_query($con, $sql);
								 echo($rst->num_rows);
								?>
							 items)</span></a></li>
							<?php endif ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="agileits_w3layouts_logo">
					<h1><a href="index.php">Events Planning</a></h1>
				</div>
				<div class="agileinfo_social_icons">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>	
			<!-- //header -->
			<!-- //header -->
		</div>
	</div>
<!-- //banner -->
<!-- services -->
	<div class="agile-ser service po">
		<div class="container">
				<div class="agile-ser-tp">
					<div class="col-md-4 w3-lft">
						<a href="venue.php">
							<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/23.jpg" class="img-responsive" alt="">
						</div>
							<h4 class="an">Venue Selection</h4>
						</a>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<a href="photography.php">
							<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/20.jpg" class="img-responsive" alt="">
						</div>
							<h4 class="an">Photography</h4>
						</a>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
							<a href="catering.php">
								<div class="w3agile_special_deals_grid_left_grid">
								<img src="images/25.jpg" class="img-responsive" alt="">
							</div>
								<h4 class="an">Catering & Food</h4>
							</a>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="security.php">
								<div class="w3agile_special_deals_grid_left_grid">
								<img src="images/22.jpg" class="img-responsive" alt="">
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
								<img src="images/26.jpg" class="img-responsive" alt="">
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
								<img src="images/21.jpg" class="img-responsive" alt="">
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


<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Events Planning
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2><a href="index.php">Events Planning</a></h2>
			<h3>(+000) 123 456 789</h3>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Your email..." required="">
				<input type="submit" value=" ">
			</form>
			<div class="agileits_w3three_nav">
				<div class="agileits_w3three_nav_left">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="services.php">Services</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="work.php">Our Work</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
				<div class="agileits_w3three_nav_right">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>© 2017 Events Planning. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
<!-- //footer -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- menu -->
	<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
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