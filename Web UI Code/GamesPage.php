<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php

	$ipaddress = $_POST['ipaddress'];
	echo "Using " . $ipaddress . " as target IP Address";
	
	if ($_GET['moonlightpair']) {
	system("sudo moonlight pair " . $ipaddress);	
	}
	elseif ($_GET['moonlightstream']) {
	system("sudo moonlight stream " . $ipaddress);
	}
	
?>

<html>
	<head>
		<title>GAME STREAMING SERVICE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="UIHomepage.php">GAME STREAMING SERVICE</a></li>
							</ul>
						</nav>

				</div>

			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									
									<h3>ENTER TARGET PC IP ADDRESS</h3>
									<FORM NAME ="form1" METHOD ="POST" ACTION = "GamesPage.php">

									<INPUT TYPE = "TEXT" NAME= "ipaddress" VALUE ="">
									<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Confirm">

									</FORM>
									<p>Please enter the IP address of the target PC.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<a href="?moonlightpair=true"><i class="icon major fa-feed"></i></a>
									<h3>PAIR PC</h3>
									<p>Select to pair with target PC.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<a href="?moonlightstream=true"><i class="icon major fa-steam"></i></a>
									<h3>BEGIN MOONLIGHT STREAM</h3>
									<p>Select to begin Steam streaming session.</p>
								</div>
							</section>
						</div>
					</div>
				</section>


		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>