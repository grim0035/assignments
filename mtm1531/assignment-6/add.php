<?php

$errors = array();

$movie_title = filter_input(INPUT_POST, 'movie_title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_NUMBER_INT);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (strlen($movie_title) < 1  || strlen($movie_title) > 256) {
		$errors['movie_title'] = true;	
	}
	
	if (strlen($release_date) < 4  || strlen($release_date) > 4) {
		$errors['release_date'] = true;	
	}
	
	if (strlen($director) < 1  || strlen($director) > 256) {
		$errors['director'] = true;	
	}

	
	if (empty($errors)) {
	// do DB stuff
		require_once 'includes/db.php';
		$sql = $db->prepare('
		INSERT INTO movies (movie_title, release_date, director)
		VALUES (:movie_title, :release_date, :director)
		'); 
		$sql->bindValue(':movie_title', $movie_title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_INT);
		$sql->bindValue(':director', $director, PDO::PARAM_INT);
		$sql->execute();
		
		header('Location: index.php');
		exit;
	}
}

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add a movie</title>
<link href="css/general.css" rel="stylesheet">

</head>

<body>
	<p><a href="index.php">Back to the List</a></p>

	<h1>Add a Movie</h1>
		<form method="post" action="add.php">
		<div class="form">
			<label for"movie_title">Movie title <?php if (isset($errors['movie_title'])) : ?> <strong class="error">is required</strong><?php endif; ?></label>
			<input id="movie_title" name="movie_title" required value="<?php echo $movie_title; ?>">
		</div>
		<div class="form">
			<label for="release_date">Year of Release <?php if (isset($errors['release_date'])) : ?> <strong class="error">is required</strong><?php endif; ?></label>
			<input id="release_date" name="release_date" required value="<?php echo $release_date; ?>">

		</div>
		<div class="form">
			<label for="director">Director <?php if (isset($errors['director'])) : ?> <strong class="error">is required</strong><?php endif; ?></label>
			<input id="director" name="director" required value="<?php echo $director; ?>">
		</div>
		
		<button type="submit">Add</button>
		
</body>
</html>