<?php

require_once 'includes/db.php';

$errors = array();
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$movie_title = filter_input(INPUT_POST, 'movie_title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING);
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
		$sql = $db->prepare('
		UPDATE movies
		SET movie_title = :movie_title
			, release_date = :release_date
			, director = :director
		WHERE id = :id
		');
		$sql->bindValue(':id', $id, PDO::PARAM_INT);
		$sql->bindValue(':movie_title', $movie_title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_STR);
		$sql->bindValue(':director', $director, PDO::PARAM_STR);
		$sql->execute();
		
		header('Location: index.php');
		exit;
	}
} else {

	$sql = $db->prepare('
	SELECT movie_title, release_date, director
	FROM movies
	WHERE id = :id
	
	');
		$sql->bindValue(':id', $id, PDO::PARAM_INT);
		$sql->execute();
		$results = $sql->fetch();
		
		$movie_title = $results['movie_title'];
		$release_date = $results['release_date'];
		$director = $results['director'];

}
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Edit </title>
<link href="css/general.css" rel="stylesheet">

</head>

<body>
	<p><a href="index.php">Back to the List</a></p>

	<h1>Edit <?php echo $results['movie_title']; ?></h1>
	<form method="post" action="edit.php?id=<?php echo $id; ?>">
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
		
		<button type="submit">Edit</button>	
	</form>
</body>
</html>