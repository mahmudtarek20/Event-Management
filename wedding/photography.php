<?php require 'header.php'; ?>
<style type="text/css">
	.agile-ser {
    
    height: 100%;
		background: url('images/bannerP.jpg');
		background-attachment: fixed;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	    color: white;

}
</style>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1 class="aac">
							<a href="photography.php">Photography</a>
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
	<!-- services -->
	<div class="agile-ser">
		<div class="container">
			<?php $sql="SELECT * FROM photography WHERE 1";
			$result=mysqli_query($con, $sql);
			if ($result->num_rows) {
				while ($row=mysqli_fetch_assoc($result)) {?>
				<div class="row">
				<div class="col-md-8">
					<h3 class="bb"><?php echo $row['name']; ?></h3>
					<p class="aa"><?php echo $row['description']; ?></p>
				</div>
				<div class="col-md-4">
					<h4 class="cc"><strong>Cost: <?php echo $row['price']; ?> BDT</strong></h4>
					<?php if (isset($_SESSION['username'])): ?>
						<?php
						$user=$_SESSION['username'];
						$id=$row["id"];
						 $sql="SELECT * FROM orders WHERE service_id='$id' AND order_type='photography' AND username='$user' AND status=-1";
						$rst=mysqli_query($con, $sql);
						if ($rst->num_rows) { ?>
						<a href="../cart.php" class="btn btn-info">View cart</a>
						<?php }else{ ?>
						 <form action="" method="POST">
							<input type="hidden" name="type" value="photography">
							<input type="hidden" name="id" value="<?php echo($row['id']); ?>">
							<button class="btn btn-primary">Add to cart</button>
						</form>						 	
						 <?php } ?>
					<?php else: ?>
						<a href="../login.php" class="btn btn-primary">Add to cart</a>
					<?php endif ?>
				</div>
			</div>
			<?php	}
			}?>
				
		</div>
	</div>
<!-- //services -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<h5><a href="index.php">Photography</a></h5>
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
				<p>© 2017 photography. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
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