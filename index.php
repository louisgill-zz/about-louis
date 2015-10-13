<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>About Louis</title>
		<link rel="stylesheet" type="text/css" href="about-louis.css" title="style">
	</head>
	<body>
		<h1>The one, the only, Louis Gill.</h1>
		<hr>
			<p>Yo, these are just <em>some</em> things I dig:</p>
		<ul>
			<li>pizza</li>
			<li>sunsets</li>
			<li>tandem bicycles</li>
		</ul>
	</body>
	<footer>
		<input type="button" onclick="location.href='http://google.com';" value="DO NOT PUSH" />
		<br>
		<?php
			$date = new DateTime();
			echo $date->format('Y-m-d H:i:s') . "\n";
		?>
	</footer>
</html>