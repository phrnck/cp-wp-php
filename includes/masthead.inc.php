<?php 
$currentPage = basename( $_SERVER['SCRIPT_NAME'], ".*" );
 echo $currentPage;
// arrays of pages 
$home = array('index.php','history.php','history.php','press.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<title>Cottage Rentals - Squam Lake New Hampshire - Family Lakeside Vacations</title>

		<link rel="stylesheet" media="screen" href="style.css">
		<link rel="shortcut icon" href="http://cottageplaceonsquam.com/cp-logo-icon.png" />

		<meta name="description" content="Cottage Place on Squam Lake, Holderness, New Hampshire - Family Vacations, Ice Fishing, Canoeing, Lake Kayaking, White Mountains Hiking and much more! Reserve your cottage today!">

		<meta name="designer" content="frank webster, redrooster.us">

		<!--[if IE 6]>
			<style type="text/css" media="all">
				@import "subNavIE6style.css";
			</style>
		<![endif]-->
    
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					 <img src="images/logo-cp.gif" alt="cottage place on Squam Lake logo" width="656" height="144">
					 <h1>Cottage Place on Squam Lake, Holderness, New Hampshire</h1>
				</div> <!-- #logo -->

				<div id="nav">
					<ul class="mainNav">
						<li><a href="index.html" class="<?php if ($currentPage == 'index.php') { echo 'currentPage'; } ?>">Home</a></li>
						<li><a href="accommodate.html" class="<?php if ($currentPage == 'accommodate.php') { echo 'currentPage'; } ?>">Accommodations</a></li>
						<li><a href="specials/" class="<?php if ($currentPage == 'specials.php') { echo 'currentPage'; } ?>">Specials</a></li>
						<li><a href="rates.html" class="<?php if ($currentPage == 'rates.php') { echo 'currentPage'; } ?>">Rates</a></li>
						<li><a href="attractions.html" class="<?php if ($currentPage == 'attractions.php') { echo 'currentPage'; } ?>">Acivities</a></li>
						<li><a href="#" class="<?php if ($currentPage == 'Blog.php') { echo 'currentPage'; } ?>">Blog</a></li><!--  doesn't exist yet -->
						<li><a href="mailto:cottageplace@gmail.com">Contact Us</a></li> <!-- this to become a full contact us page -->
					</ul>
					<ul class="subNavHome">
						<li><a href="history.html" class="<?php if ($currentPage == 'index.php') { echo 'currentPage'; } ?>">History</a></li>
						<li><a href="directions.html">Map &amp; Directions</a></li>
						<li><a href="press.html">Press</a></li>
					</ul>
				</div> <!-- #nav -->
			</div> <!-- #header (end of wp header.php) -->
			