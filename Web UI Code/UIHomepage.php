<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
	if ($_GET['kodi']) 
	{
		system("sudo kodi-standalone");
	}
	
?>

<html>
	<head>
		<title>Pi Multi-Media Stream</title>
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
								<li class="current"><a href="UIHomepage.php">Pi Multi-Media Stream</a></li>
							</ul>
						</nav>

				</div>

			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<a href="MusicPage.php"><i class="icon major fa-music"></i></a>
									<h3>MUSIC</h3>
									<p>Begin Mopidy setup to enable streaming of music from Spotify.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<a href="?kodi=true"><i class="icon major fa-video-camera"></i></a>
									<h3>VIDEO</h3>
									<p>Lauch Kodi to stream video.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<a href="GamesPage.php"><i class="icon major fa-gamepad"></i></a>
									<h3>GAMES</h3>
									<p>Open Moonlight setup to allow game streaming from an external PC.</p>
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