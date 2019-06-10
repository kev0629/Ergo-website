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
							//introduction();
							// presentation
							presentation();
							// pourquoi
							Why();
							Seances();
							honoraires();
							location()
								?>
						
					</div>

				<!-- Footer -->
					<?php
					footer($Name,$adress,$phone,$mail);
					?>

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