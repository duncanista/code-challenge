<?php

$home = "";
$about = "";
$workshop = "";
$faq = "";
$contact = "";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Code Challenge 2019</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="site-wrap">
		<div class="site-mobile-menu">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>

	<header class="site-navbar py-3" role="banner">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-6 col-md-4 col-xl-2 logo">
					<h3 class="mb-0">
						<a href="index.php" class="text-white h2 mb-0">
							<img src="images/logo/cc_logo.png" alt="" class="img-fluid">
						</a>
					</h3>
				</div>
                <div class="d-inline-block d-xl-none col-md-7 col-5"></div>
				<div class="col-2 col-md-10 d-none d-xl-block">
					<nav class="site-navigation position-relative text-right" role="navigation">
						<ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
							<li <?= $home;?>><a href="index.php">Inicio</a></li>
							<li <?= $about;?>><a href="about.php">Nosotros</a></li>
							<li <?= $workshop;?>><a href="workshop.php">Taller</a></li>
							<li <?= $faq;?>><a href="faq.php">FAQ</a></li>
							<li <?= $contact;?>><a href="contact.php">Contacto</a></li>
							<li class="cta"><a href="buy-tickets.php">Boletos</a></li>
						</ul>
					</nav>
				</div>

				<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
			</div>
		</div>
	</div>

	</header>
