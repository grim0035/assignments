<?php

$num1 = 0;
$num2 = 0;
$func = '+';
$subtotal = 0;

$total = $subtotal * 1.13;

if (isset($_POST['num1'])) {
$num1 = $_POST['num1'];
}

if (isset($_POST['num2'])) {
$num2 = $_POST['num2'];
}

if (isset($_POST['func'])) {
$func = $_POST['func'];
}

switch ($func) {
	case 'subtract' :
	$subtotal = $num1 - $num2;
	break; 
	
	case 'multiply' :	
	$subtotal = $num1 * $num2;
	break;
		
	case 'divide' : 
	$subtotal = $num1 / $num2;
	break;
		
	case 'add':
	default: // set default for any other possible query, must be last in the switch statement.
	$subtotal = $num1 + $num2;
	break;
	}
?>	


<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 2 &middot; Money Calculator</title>
</head>

<body>
	
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
	<p>Total: $<?php echo number_format($total, 2); ?></p>	
</body>
</html>