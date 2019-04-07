<?php require 'header.php'; ?>
<?php if (isset($_SESSION['username'])){ 
	$username= $_SESSION['username']; 	
}
if (isset($_GET['id'])) {
	$tot=$_GET['id'];
} ?>

<?php 

$total=0;
?>
<style type="text/css">
	a{
    background: none!important;
    
}
.ppp{
	font-weight: bolder;
	margin-top: 70px;
	margin-left: 15px;
}
.mb{
	font-weight: 30px;
}
.aa{text-decoration: underline;
color: black !important}
.agileits_social_list li a{
	color: black!important;
}
.yy{
	margin-top: 60px !important;
}
.aa{
     text-decoration: double; 
    font-weight: bold;
    text-decoration: underline;
}
.ff{

      margin-top: 15px;
    font-weight: 500;
    margin-left: 430px !important;

}
.cc{
	color: #cf2d50;
    font-weight: 600 !important;
    padding-left: 390px !important;
}
.dd{
	    margin-left: 880px !important;
    margin-top: 15px !important;
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
<h1 class="text-center aa">Check Out</h1>

<?php $sql="SELECT * FROM orders WHERE username='$username' and status=-1";
			if ($rst=mysqli_query($con, $sql)) {
		while($row=mysqli_fetch_assoc($rst)){ ?>
				<div class="checkout">
					<?php $total=$total+$row['price']; ?>
					
				</div>
				<?php }
				} ?>

<div class="ff"><h1>Total Taka:<?php echo $tot; ?></h1></div>
<?php
 $err=array();
if ($_POST) {
		$sqli="UPDATE orders SET status='1' WHERE username='$username' and status=-1";
		if (mysqli_query($con,$sqli)) {
			echo "<h1 class='cc'>Order is successfully placed.</h1>";
			echo "<h4>Please make your <a href='payment.php'>payment</a></h4>";
		}else{
			echo "<h1 class='cc'>Order is not placed. Something error. try again later</h1>";
		}
	}
?>
<form action="" method="POST">
          <div class="form-group">  
          <button type="submit" class="btn btn-lg btn-primary dd"  name="submit" value="Submit">Order Now</button>
      	  </div>
</form>
<?php require 'footer.php'; ?>
</div>
</div>
</body>