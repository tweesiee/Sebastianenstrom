<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sebastian Enström</title>
	<link rel="stylesheet" type="text/css" href="style.css" />	
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
	<link rel="stylesheet" href="font-mfizz-2.4.1/font-mfizz.css">

	<!-- Live countdown start -->

<script type="text/javascript">
	function countDown() {
		var dagar = document.getElementById("dagar");
		var timmar = document.getElementById("timmar");
		var minuter = document.getElementById("minuter");
		var sekunder = document.getElementById("sekunder");
		
		var currentDagar = parseInt(dagar.innerHTML);
		var currentTimmar = parseInt(timmar.innerHTML);
		var currentMinuter = parseInt(minuter.innerHTML);
		var currentSekunder = parseInt(sekunder.innerHTML) - 1;

		if(currentSekunder < 1) {
			currentMinuter = currentMinuter - 1;
			currentSekunder = 59;
		}

		if(currentMinuter < 1) {
			currentTimmar = currentTimmar - 1;
			currentMinuter = 59;
			currentSekunder = 59;
		}		

		if(currentTimmar < 1) {
			currentDagar = currentDagar - 1;
			currentTimmar = 23;
			currentMinuter = 59;
			currentSekunder = 59;
		}

		dagar.innerHTML = currentDagar;
		timmar.innerHTML = currentTimmar;
		minuter.innerHTML = currentMinuter;
		sekunder.innerHTML = currentSekunder;	
}
</script>

</head>
		
<!-- header start -->

<body onLoad="setInterval(countDown, 1000)">
	<header>
		<div id="header-inner">
			<a href="index.html" id="logo"></a>
			<nav>
				<a href="#" id="menu-icon"></a>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="projects.html">Projects</a></li>
					<li><a href="https://9gag.com/" target="_blank">Memes</a></li>
					<li><a href="countdown.php" class="current">Countdown</a></li>
				</ul>
			</nav>
		</div>
	</header>

<!-- header slut -->

<!-- banner start -->

<section class="banner">
	<div class="banner-inner">
		<img src="img/header.png">
	</div>
</section>

<!-- js start -->

<div class="php">
	<?php
		$tid = "It's ".date("l").","." the ".date("jS")." of ".date("F").", ".date("Y")."."; // Sätt tid som en variabel. Date ("l") 
		echo $tid;
		echo "<br><br>";
		echo "Current week: " . date("W").".<br><br>";
		$count = mktime(0, 0, 0, 12, 24, 2017) - time();
		$dagar = floor($count / 86400);
		$timmar = floor(($count % 86400) / 3600);
		$minuter = floor(($count % 3600) / 60);
		$sekunder = floor($count % 60);
		echo 'It is <span id="dagar">'.$dagar.'</span> days, ';
		echo '<span id="timmar">'.$timmar.'</span> hours, ';
		echo '<span id="minuter">'.$minuter.'</span> minutes and ';
		echo '<span id="sekunder">'.$sekunder.'</span> seconds <br> left untill Christmas.';
	?>
</div>

<!-- javascript slut -->

<footer>
	<ul class="social">
		<li><a href="https://www.facebook.com/sebastian.enstrom.1" target="_blank"><i class="fa fa-facebook"></i></a></li>
		<li><a href="https://www.instagram.com/tweesiee/" target="_blank"><i class="fa fa-instagram"></i></a></li>
		<li><a href="https://plus.google.com/u/0/101468518079018715928" target="_blank"><i class="fa fa-google-plus"></i></a></li>
		<li><a href="https://www.youtube.com/channel/UCOUL21wGt-sIwB60BE-6p3Q?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
	</ul>
</footer>

<!-- footer 1 slut, footer 2 start -->

<footer class="second">
	<p>&copy; Sebastian Enström</p>		
</footer>

</body>