<?php 
require 'header.php';?>
<style>
	.agileits_social_list li a{
		color: black;
	}
</style>
<body>
<!-- banner -->
	<div class="banner" style="background: none!important;">
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
								<li class="m_nav_item" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="services.php" class="link link--kumya"><i class="fa fa-cog" aria-hidden="true"></i><span data-letters="Services">Services</span></a></li>
								
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
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="agileits_w3layouts_logo aa">
					<h1><a href="index.php" style="color: #cf2d50;">Events Planning</a></h1>
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


			<div class="main-content">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-success">
						  <div class="panel-heading">
						    <h4 class="panel-title">Make your payment</h4>
						  </div>
						  <div class="panel-body">
						    <form method="POST" action="">
							  <div class="form-group">
							    <label for="type">Account Type</label>
							    <select name="type" class="form-control" id="type">
							    	<option value="bkash">Bkash</option>
							    	<option value="dbbl">DBBL</option>
							    	<option value="ibbl">IBBL</option>
							    </select>
							  </div>
							  <div class="form-group">
							    <label for="acc">Account</label>
							    <input type="text" name="account_no" class="form-control" id="acc">
							  </div>
							  <div class="form-group">
							    <label for="Amount">Amount</label>
							    <input type="number" name="amount" class="form-control" id="Amount">
							  </div>
							  <div class="form-group">
							    <label for="transaction">Transaction ID</label>
							    <input type="text" name="transaction" class="form-control" id="transaction">
							  </div>
							  <button class="btn btn-primary">Submit</button>
							</form>
						  </div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</body>
<?php require 'footer.php';
 ?>