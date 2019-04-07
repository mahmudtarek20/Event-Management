<?php require 'header.php'; ?>

<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo service">
						<h1 class="a">
							<a href="index.php">Wedding Management</a>
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
							<div class="collapse navbar-collapse mm" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav mm">
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
				<!-- w3-banner -->
				<div class="w3-banner">
					<h2></h2>
					<div class="w3ls-banner-info ww">
						<p>Love is composed of a single soul inhabiting two bodies.</p>
						<div class="w3ls-button">
							<a href="single.php">Read More</a>
						</div>
					</div>
				</div>
				<!-- //w3-banner -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<!-- container -->
		<div class="container">
			<div class="wthree-heading service">
				<h3>Welcome</h3>	
			</div>
			<div class="welcome-agileitsrow">
				<div class="col-md-8 welcome-left">
					<div class="col-md-4 col-sm-4 welcome-img">
						<img src="images/4.jpg" alt="">
					</div>
					<div class="col-md-8 col-sm-8 welcome-w3ls-text">
						<p>Your guests have traveled from near and far to celebrate with you on your wedding day, and it’s important to express how much you appreciate them being at your celebration.

Aside from writing thank-you notes after the wedding—an etiquette must!—there are many ways to show your gratitude on the actual wedding day. You could take the microphone to offer a toast to your guests at the reception, but some of our favorite ideas involve putting pen to paper in the form of a letter to your guests.
One idea would be to write your sentiments on a chalkboard to display at the wedding ceremony or reception; some couples, though, have gone so far as to handwrite letters to each and every guest (this requires advance planning but will be well worth the effort, we promise!). Keep reading for some of our favorite noteworthy ways to show your appreciation.
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 welcome-right w3-agileits">
					<h4>Our Advantages </h4>
					<ul>
						<li><span class="glyphicon glyphicon-menu-right"></span>Uniqueness to your wedding event.</li>
						<li><span class="glyphicon glyphicon-menu-right"></span>Strong network offering you various specialties.</li>
						<li><span class="glyphicon glyphicon-menu-right"></span>Highly cost effective.</li>
						<li><span class="glyphicon glyphicon-menu-right"></span>Best service providers of your town.</li>
						<li><span class="glyphicon glyphicon-menu-right"></span>Designer touch to enhance the ambiance.</li>
						<li><span class="glyphicon glyphicon-menu-right"></span>High professionalism and dedication.</li>
						<li><span class="glyphicon glyphicon-menu-right"></span>Giving a symmetric touch to every aspect.</li>
						<li><span class="glyphicon glyphicon-menu-right"></span>New concepts and designs.</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="wthree-heading service">
				<h3>Our Services</h3>	
			</div>
			<div class="w3-agileits-services-grids">
				<div class="col-md-6 agile-services-left">
					<div class="agile-services-left-grid">
						<div class="col-sm-4 services-icon">
							<div class="services-icon-info">
								<i class="fa-location-arrow fa" aria-hidden="true"></i>
							</div>
							<div class="venue-service w3-lft">
								<a href="venue.php">
								<h4>Venue Selection</h4>
							</div>
						</div>
						<div class="col-sm-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-glass" aria-hidden="true"></i>
							</div>
							<div class="catering-service w3-lft">
								<a href="catering.php">
								<h4>Catering & Food</h4>
							</div>
						</div>
						<div class="col-sm-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-picture-o" aria-hidden="true"></i>
							</div>
							<div class="photography-service w3-lft">
								<a href="photography.php">
								<h4>Photography</h4>
							</div>
						</div>
						<div class="col-sm-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
							</div>
							<div class="decorations-service w3-lft">
								<a href="decoration.php">
								<h4>Decor & Decorations</h4>
							</div>
						</div>
						<div class="col-sm-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</div>
							<div class="security-service w3-lft">
								<a href="security.php">
								<h4>Security Service</h4>
							</div>
						</div>
						<div class="col-sm-4 services-icon">
							<div class="services-icon-info">
								<i class="fa fa-cog" aria-hidden="true"></i>
							</div>
							<div class="entertainment-service w3-lft">
								<a href="entertainment.php">
								<h4>Entertainment & Led Show</h4>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3-agile-services-right">
					<h5>Your guests have traveled from near and far to celebrate with you on your wedding day, and it’s important to express how much you appreciate them being at your celebration.</h5>
					<p>
Aside from writing thank-you notes after the wedding—an etiquette must!—there are many ways to show your gratitude on the actual wedding day. You could take the microphone to offer a toast to your guests at the reception, but some of our favorite ideas involve putting pen to paper in the form of a letter to your guests.One idea would be to write your sentiments on a chalkboard to display at the wedding ceremony or reception; some couples, though, have gone so far as to handwrite letters to each and every guest (this requires advance planning but will be well worth the effort, we promise!). Keep reading for some of our favorite noteworthy ways to show your appreciation.</p></div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- testimonial -->
	<div class="testimonial jarallax">
		<div class="container">
			<div class="agileits-w3layouts-info">
				<div class="testimonial-grid">
					<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>There's a big difference between falling in love with someone and falling in love with someone and getting married. Usually, after you get married, you fall in love with the person even more.</p>
											<h5> Dave Grohl<span></span></h5>
										</div>
									</li>
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>A wedding anniversary is the celebration of love, trust, partnership, tolerance and tenacity. The order varies for any given year.</p>
											<h5>Paul Sweeney<span></span></h5>
										</div>
									</li>
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>A wedding, a great wedding, is just a blast. A celebration of romance and community and love... What is unfun about that? Nothing.</p>
											<h5>Ariel Levy<span></span></h5>
										</div>
									</li>
									
								</ul>
							</div>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
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
	</div>
	<!-- //testimonial -->
	<!-- events -->
	<div class="w3-events">
		<div class="container">
			<div class="wthree-heading service">
				<h3>Events</h3>	
			</div>
			<div class="agile_banner_bottom_grids">
				<div class="agile_events_grid">
					<img src="images/2.jpg" alt=" " class="img-responsive" />
					<div class="agile_events_grid_pos agile_events_grid_pos1">
						<h5><span>08</span> April / 2018</h5>
						<h4><a href="single.php">Anika and Topu's Wedding</a></h4>
						<p>On your special day dear friend, wishing you all the happiness, love and togetherness forever.</p>
					</div>
					<div class="agileits_w3layouts_events_grid_social">
						<ul class="agileinfo_social_icons">
							<li><a href="#" class="w3_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3l_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3ls_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="agile_events_grid">
					<img src="images/3.jpg" alt=" " class="img-responsive" />
					<div class="agile_events_grid_pos_sub agile_events_grid_pos1">
						<h5 class="w3_agileits_event_head"><span>23</span> January / 2018</h5>
						<h4><a href="single.php">Rakib and Mou's Wedding</a></h4>
						<p>May you always remember the love shared on this special day. Wishing you a lifetime of love!</p>
					</div>
					<div class="agileits_w3layouts_events_grid_social1">
						<ul class="agileinfo_social_icons">
							<li><a href="#" class="w3_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3l_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3ls_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="agile_events_grid">
					<img src="images/6.jpg" alt=" " class="img-responsive" />
					<div class="agile_events_grid_pos agile_events_grid_pos1">
						<h5><span>09</span> February / 2018</h5>
						<h4><a href="single.php">Farhan and Tanima's Wedding</a></h4>
						<p>May you always remember the love shared on this special day. Wishing you a lifetime of love!</p>
					</div>
					<div class="agileits_w3layouts_events_grid_social">
						<ul class="agileinfo_social_icons">
							<li><a href="#" class="w3_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3l_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3ls_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //events -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<h5><a href="indexW.php">Venue</a></h5>
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
	<script src="js/responsiveslides.min.js"></script>
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