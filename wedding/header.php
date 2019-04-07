
<?php 
session_start();
require '../db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Decoration a Wedding Category Bootstrap Responsive Website Template | About :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Decoration Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
<link href="//fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<style>
	.agile-ser .container {
    border: 1px solid lightblue;
    box-sizing: border-box;
    box-shadow: 0px -1px 3px 2px #eff2f3;
}
.agile-ser {
    
    height: 100%;
		background: url('images/bb.jpg');
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
.agile-ser .container .row {
    border-bottom: 1px solid lightskyblue;
    color: black;
}
.cc{
	color: #f44336;
}
.aa{
	font-weight: bold;
}
.bb{
	text-decoration: underline;
}

.aac{
	text-decoration: underline;
}
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
</style>
</head>
<?php 

if ($_POST) {
	$user=$_SESSION['username'];
	$type=$_POST['type'];
	$id=$_POST['id'];
	$sql="INSERT INTO orders(id, username, order_type, service_id, status) VALUES(null, '$user', '$type', '$id', -1)";
	if (mysqli_query($con, $sql)) {

	}else{

	}
}

 ?>