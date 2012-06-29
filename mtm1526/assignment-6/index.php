<?php
	$planet = 'earth';
	
	if (isset($_GET['planet'])) {
	$planet = strtolower($_GET['planet']);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Progressive Enhancement Tabs</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>
	<nav>
		<ul>
			<li id="tab-1" <?php if ($planet != 'mars' && $planet != 'jupiter' && $planet != 'venus') { ?> class="current"<?php } ?>><a href="?planet=earth" >Earth</a></li>
			<li id="tab-2" <?php  if ($planet == 'mars') { ?> class="current"<?php } ?>><a href="?planet=mars">Mars</a></li>
			<li id="tab-3" <?php  if ($planet == 'jupiter') { ?> class="current"<?php } ?>><a href="?planet=jupiter">Jupiter</a></li>
			<li id="tab-4" <?php  if ($planet == 'venus') { ?> class="current"<?php } ?>><a href="?planet=venus">Venus</a></li>

		</ul>
	</nav>
	
	<article >
		<div id="load-content">
			<?php 
	
			
				switch ($planet) {
					case 'mars' :
						include 'includes/mars.php';
					break;
					case 'jupiter' :
						include 'includes/jupiter.php';
					break;
					case 'venus' :
						include 'includes/venus.php';
					break;
	
					default: // set default for any other possible query, must be last in the switch statement.
						include 'includes/earth.php';
					break;
	
				}
			
			?>
		</div>
	</article>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/general.js"></script></body>
</html>