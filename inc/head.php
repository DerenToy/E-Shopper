<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?=$page ?> | E-Shopper</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> eshopper@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php?category=all"><img src="img/home/logo.png" alt="" /></a>
						</div>

	
					</div>
					<div class="col-sm-8">
						<?php if ($page == "Home"){ ?>
						<div class="col-sm-4">
							<div class="search_box pull-right">
							<form method="post">
                             <input type="text" id="name" placeholder="Search.." name="search">
							</form>
							</div>
						</div>
					<?php } ?>
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.php?category=all" class= <?php if($page == "Home")echo "active" ?>><i class="fa fa-home"></i> Home</a></li>
								<li><a href="checkout.php" class= <?php if($page == "Checkout") echo "active" ?> ><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php" class= <?php if($page == "Cart") echo "active" ?> ><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php 
                            session_start();
                            if(isset($_SESSION['role']) && $_SESSION['role'] == "customer") {
                                $name = $_SESSION['name'];
                                ?> 
                                <li><a href="account.php" class= <?php if($page == "Account") echo "active" ?>><i class="fa fa-user"></i><?= $name ?></a></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li> <?php
                            }else if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") { ?> 
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
								<?php
                            }else { ?> 
                                <li><a href="login.php" class= <?php if($page == "Login") echo "active" ?> ><i class="fa fa-lock"></i> Login</a></li>
                           <?php }?>
							
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        </header>