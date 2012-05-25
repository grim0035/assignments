<?php
var_dump($_POST);
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>PHP forms</title>
</head>

<body>
	
	<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
	<form method="post" action="index.php">
		<label for="dino-name">Dino Name</label>
		<input id="dino-name" name="dino-name">
		
		<label for="rating">Rating</label>
		<select id="rating" name="rating">
			<option value="1">1 star</option>
			<option value="2">2 stars</option>
			<option value="3">3 stars</option>
			<option value="4">4 stars</option>
			<option value="5">5 stars</option>
		</select>
		
		<button id="submit">submit</button>
	</form>
		
	<?php else : ?>
	<?php 
		switch ($_POST['rating']) {
			case 1 :
			case 2 :
			?>
				<h1><?php echo $_POST['dino-name']; ?> suck!</h1>
			<?php			
			break;
			
			case 3 :
			case 4 :
			?>
				<h1><?php echo $_POST['dino-name']; ?> are ok.</h1>
			<?php
			break;
			
			case 5 :
			?>
				<h1><?php echo $_POST['dino-name']; ?> are amaze-a-zing!</h1>
			<?php
			break;
		}
	?>
		<?php endif; ?>



</body>
</html>