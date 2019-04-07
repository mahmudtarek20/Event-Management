<?php require 'header.php'; ?>
<?php 
$tut=0;
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}else{
	$user=$_SESSION['username'];
} ?>

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
								<li class="m_nav_item active" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
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
			<section class="container main-content yy">
				<?php
				 $sql="SELECT * FROM orders WHERE status=-1 AND username='$user'";
				 $rst=mysqli_query($con, $sql);
				 if ($rst->num_rows) {
				 	?>
				 <table class="table table-inverse">
				 	<thead>
				 		<tr>
				 			<th>#</th>
				 			<th>Product type</th>
				 			<th>Product name</th>
				 			<th>Price</th>
				 		</tr>
				 	</thead>
				 	<tbody>
				 <?php	while ($row=mysqli_fetch_assoc($rst)) {?>
				 	<tr class="mb">
				 		<td><?php echo $row['id']; ?></td>
				 		<td><?php echo $row['order_type']; ?></td>
				 		<?php 
				 		$id=$row['service_id'];
				 		if ($row['order_type']=='venue') {
				 			$pr="SELECT * FROM venue WHERE id='$id'";
				 			$pr_rst=mysqli_query($con, $pr);
				 			while ($pr_row=mysqli_fetch_assoc($pr_rst)) { ?>
				 			<td><?php echo $pr_row['name']; ?></td>
				 			<td><?php echo $pr_row['price']; $tut=$tut+$pr_row['price']; ?>৳</td>
				 		<?php	}
				 		}
				 		else if ($row['order_type']=='photography') {
				 			$pr="SELECT * FROM photography WHERE id='$id'";
				 			$pr_rst=mysqli_query($con, $pr);
				 			while ($pr_row=mysqli_fetch_assoc($pr_rst)) { ?>
				 			<td><?php echo $pr_row['name']; ?></td>
				 			<td><?php echo $pr_row['price']; $tut=$tut+$pr_row['price']; ?>৳</td>
				 		<?php	}
				 		}
				 		else if ($row['order_type']=='catering') {
				 			$pr="SELECT * FROM catering WHERE id='$id'";
				 			$pr_rst=mysqli_query($con, $pr);
				 			while ($pr_row=mysqli_fetch_assoc($pr_rst)) { ?>
				 			<td><?php echo $pr_row['name']; ?></td>
				 			<td><?php echo $pr_row['price']; $tut=$tut+$pr_row['price']; ?>৳</td>
				 		<?php	}
				 		}
				 		else if ($row['order_type']=='security') {
				 			$pr="SELECT * FROM security WHERE id='$id'";
				 			$pr_rst=mysqli_query($con, $pr);
				 			while ($pr_row=mysqli_fetch_assoc($pr_rst)) { ?>
				 			<td><?php echo $pr_row['name']; ?></td>
				 			<td><?php echo $pr_row['price']; $tut=$tut+$pr_row['price']; ?>৳</td>
				 		<?php	}
				 		}
				 		else if ($row['order_type']=='decoration') {
				 			$pr="SELECT * FROM decoration WHERE id='$id'";
				 			$pr_rst=mysqli_query($con, $pr);
				 			while ($pr_row=mysqli_fetch_assoc($pr_rst)) { ?>
				 			<td><?php echo $pr_row['name']; ?></td>
				 			<td><?php echo $pr_row['price']; $tut=$tut+$pr_row['price']; ?>৳</td>
				 		<?php	}
				 		}
				 		else if ($row['order_type']=='entertainment') {
				 			$pr="SELECT * FROM entertainment WHERE id='$id'";
				 			$pr_rst=mysqli_query($con, $pr);
				 			while ($pr_row=mysqli_fetch_assoc($pr_rst)) { ?>
				 			<td><?php echo $pr_row['name']; ?></td>
				 			<td><?php echo $pr_row['price']; $tut=$tut+$pr_row['price']; ?>৳</td>
				 		<?php	}
				 		}
				 		 ?>
				 		 <td><a href="cart.php?act=delete&id=<?php echo($row['id']); ?>"><i class="fa fa-trash"></i></a></td>

				 	</tr>
				 <?php	}
				 
				 	 ?>
				 	<tr>
				 		<td></td>
				 		<td></td>
				 		<td style="font-size: 30px;">Total:</td>
				 		<td style="font-size: 30px; font-weight: 800;"><?php echo $tut; ?>৳</td>
				 		<td></td>
				 	</tr>
				 </tbody></table>
				<?php  }
				else {?><h2 class="ppp">No Service Found..!!</h2> <?php } ?>
			</section>
			<section class="proceed pull pull-right">
				<a href="checkout.php?id=<?php echo $tut; ?>" class="btn btn-lg btn-primary" style="color: black;">Proceed to checkout</a>
			</section>



			<?php if (isset($_GET['act'])) {
				$id=$_GET['id'];
				$sql="DELETE FROM orders WHERE id='$id'";
				if (mysqli_query($con, $sql)) { ?>
					<script type="text/javascript">
						window.location.href="cart.php";
					</script>
				<?php }
			} ?>
<?php require 'footer.php'; ?>