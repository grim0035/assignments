<?php
var_dump($_POST);

$num1 = 0;
$num2 = 0;
$funct = '+';
$subtotal = 0;

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 &middot; Money Calculator</title>
</head>

<body>
	
	<?php //if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
	<form method="post" action="index.php">
		
		<label for="num1">Number 1</label>
		<input type="number" id="num1" name="num1">
	
		<label for="num2">Number 2</label>
		<input type="number" id="num2" name="num2">
	
		<label for="func">Function</label>
			<select id="func" name="func">
			<option value="+">add</option>
			<option value="-">subtract</option>
			<option value="*">multiply</option>
			<option value="/">divide</option>
			</select>

		<button>Calculate</button>


</body>
</html>