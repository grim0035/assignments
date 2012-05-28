<?php

require_once 'includes/form-processor.php';

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Assignment 3 &middot; Form Validation</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>

	<form method="post" action="index.php" >
		<div>
			<label for="name">Name <?php if (isset($errors['name'])) : ?><strong class="error">is required</strong><?php endif; ?></label>
			<input id="name" name="name" required value="<?php echo $name; ?>">	
		</div>
		<div>
			<label for="email">Email Address <?php if (isset($errors['email'])) : ?><strong class="error">is required</strong><?php endif; ?></label>

			<input type="email" id="email" name="email" required value="<?php echo $email; ?>">	
		</div>
		<div>
			<label for="username">Username <?php if (isset($errors['username'])) : ?><strong class="error">max. 25 characters</strong><?php endif; ?></label>
			<input id="username" name="username" required value="<?php echo $username; ?>">	
		</div>
		<div>
			<label for="password">Password <?php if (isset($errors['password'])) : ?><strong class="error">is required</strong><?php endif; ?></label>
			<input id="password" name="password" type="password" required value="<?php echo $password; ?>">	
		</div>
		<div>
		<fieldset>
			<legend>Preferred Language: <?php if (isset($errors['lang'])) : ?><strong class="error">is required</strong><?php endif; ?></legend>
			<input type="radio" id="english" name="lang" value="english">
			<label for="english" name="english">English</label>
			<input type="radio" id="french" name="lang" value="french">
			<label for="french" name="french">French</label>
			<input type="radio" id="spanish" name="lang" value="spanish">
			<label for="spanish" name="spanish">Spanish</label>
		</fieldset>
		</div>
		<div>
			<label for="notes">Notes</label>
			<textarea id="notes" required name="notes"><?php echo $notes; ?></textarea>
			<p>(5 to 100 characters.)</p>	
		</div>
		<div>
		<input type="checkbox" id="terms" name="terms" value="1">
		<label for="terms" name="terms">
			Accept terms?
			<?php if (isset($errors['terms'])) : ?>
				<strong class="error">You must accept the terms</strong><?php endif; ?>
		</label>
		</div>
		
		<button type="submit">Send</button>		

	</form>
	
	
	
		</body>
</html>