<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
	require("function.php");
	$Name="Coralie Andrietti ";
	$Profession="Ergothérapeute";
	$adress="37 avenue des Aloès 06600 Antibes";
	$mail="coralie.andrietti@gmail.com";
	$phone="06.64.43.62.60"
?>
<html>
	<head>
		<title>Coralie Andrietti Ergothérapeute</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header >
				<header id="header" class="alt">
					</header-->	
				<?php 
				head($Name,$Profession);
				nav($Name,$Profession,$adress,$mail,$phone)?>
				

				<!-- Main -->
					<div id="main">

						
							<?php
							// Introduction
							introduction();
							// presentation
							presentation();
							// pourquoi
							Why();
							Seances();
							honoraires();
								?>


						<!-- Second Section -->
							
							<!-- third Section -->
							
						<!-- fourth Section -->
						
						
							
						<!-- Get Started -->
							<section id="fifth" class="main special">
								<header class="major">
									<h2>Localisation</h2>
									<section id="content" class="main ">
											<span class="image main"><a href="https://www.google.com/maps/place/Coralie+ANDRIETTI+Ergoth%C3%A9rapeute/data=!3m1!4b1!4m2!3m1!1s0x12cdd58e043b1ed1:0x51932fb1d3a7312e" target="_blank"><img src="images/map.png" alt="" /></a></span>
									</section>
								</header>
								<footer class="major">
									<ul class="actions special">
									</ul>
								</footer>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>MENTIONS LÉGALES</h2>
							<p>
								Propriétaire du site <br>
								Mme Coralie ANDRIETTI <br>
								Adresse : 37 avenue des Alo&egrave;s 06600 Antibes<br>
								Tel : 06 64 43 62 60<br>
								Email : coralie.andrietti@gmail.com<br>
								<br>
								Créateur du site <br>
								Site réalisé et géré par Kevin Saffioti <br>
								Hébergement chez </p>
							<ul class="actions">
								<li><a href="generic.html" class="button">Learn More</a></li>
							</ul>
						</section>
						<section>
							<h2>Contact</h2>
							<dl class="alt">
								<dt>Address</dt>
								<dd>37 avenue des Alo&egrave;s, 06600 Antibes, France</dd>
								<dt>Phone</dt>
								<dd>06.64.43.62.60</dd>
								<dt>Email</dt>
								<dd><a href="mailto:coralie.andrietti@gmail.com">coralie.andrietti@gmail.com</a></dd>
							</dl>
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-github alt"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon fa-dribbble alt"><span class="label">Dribbble</span></a></li>
							</ul>
						</section>
						
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>