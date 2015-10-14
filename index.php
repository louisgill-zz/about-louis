<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>About Louis</title>
		<link rel="stylesheet" type="text/css" href="about-louis.css" title="about-louis">
	</head>
	<body>
		<h1>The one, the only, Louis.</h1>
		<hr>
			<h2>Yo! These are just <em>some</em> things I dig:</h2>
		<ul>
			<li>pizza</li>
			<li>sunsets</li>
			<li>tandem bicycles</li>
		</ul>
		<footer>
		<input type="button" onclick="location.href='http://google.com';" value="DO NOT PUSH" />
		<br>
		<?php
			$date = new DateTime();
			echo $date->format('Y-m-d H:i:s') . "\n";
		?>
		</footer>
	</body>
</html>