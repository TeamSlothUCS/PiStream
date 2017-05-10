<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php

if ($_GET['mopidy']) {
	system("mopidy");
}
elseif ($_GET['mopidyclose']) {
	system("pkill mopidy");
}
?>

<html>
	<head>
		<title>MUSIC STREAMING SERVICE</title>
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
								<li class="current"><a href="UIHomepage.php">MUSIC STREAMING SERVICE</a></li>
							</ul>
						</nav>

				</div>

			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<a href="http://localhost:6680/moped/#/"><i class="icon major fa-music"></i></a>
									<h3>LAUNCH MOPIDY</h3>
									<p>Press to open Mopidy to enable music stream selection.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<a href="?mopidy=true"><i class="icon major fa-play"></i></a>
									<h3>BEGIN MOPIDY STREAM</h3>
									<p>Select to begin running the Mopidy streaming service.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<a href="?mopidyclose=true"><i class="icon major fa-stop"></i></a>
									<h3>END MOPIDY STREAM</h3>
									<p>Select to end the Mopidy streaming service.</p>
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