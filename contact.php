<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tehtävä</title>
</head>
<body>
<?php
include 'shared/nav.php';
?>
<header>
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
			<h1>Vieraskirja</h1>	
			
			<form action="php/forms.php">
				First name:<br>
				<input type="text" name="firstname" value="">
				<br>
				Last name:<br>
				<input type="text" name="lastname" value="">
				<br><br>
				<input type="submit" value="Submit">
			</form>
	</article>
	
	
</section>
<?php
include 'shared/footer.php';
?>
	
</body>
</html>
