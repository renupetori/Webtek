<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tehtävä</title>
</head>
<body>

<header>

<?php
include 'shared/nav.php';
?>

</header>
<div class="midbar">

</div>
<section>
	
	<aside>
		<ul>
			<li>Tämä</li>
			<li>on</li>
			<li>lista</li>
		<ul>
	</aside>
	<article>
			<h1>Työn alla</h1>	
			<img src ="images/neko.gif">
			
			<address>Sivun tekijä on <a href="mailto:petrilaine@esimerkki.fi">Petri Laine</a>.</address>
	</article>
	
	
</section>
<footer>
	<p>&copy; Petri Laine</p>
</footer>

<script>
    $("#header").load("shared/nav.html");
</script>
</body>
</html>
