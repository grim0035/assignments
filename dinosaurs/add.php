<?php
require_once 'includes/db.php';


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>Add a Dinosaur</h1>
	<form method="post" action="add.php">
		<div>
			<label for"dino_name">Dinosaur Name</label>
			<input id="dino_name" name="dino_name" required>
		</div>
		<fieldset>
			<input type="radio" id="love" name="loves_meat" value="1">
			<label for="love">Loves Meat</label>
			<input type="radio" id="hate" name="loves_meat" value="0">
			<label for="hate">Hates Meat</label>
		</fieldset>
		<div>
			<input type="checkbox" id="in_jurassic_park" name="in_jurassic_park">
			<label for="in_jurassic_park">In Jurassic Park Movie?</label>
		</div>
		
		<button type="submit">Add Dinosaur</button>
</body>
</html>