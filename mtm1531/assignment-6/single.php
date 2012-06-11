<?php
require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
	header('Location: index.php');
	exit;
}
//prepare() allows us to have variables in our SQL
//We can create placeholders (marked with a : in front of them) and later fill them with some content
//By using prepare we are protecting against SQL injection attacks
$sql = $db->prepare('
	SELECT id, movie_title, release_date, director
	FROM movies
	WHERE id = :id
');
// bindValue*placeholder, variable, datatype)
$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();
$results = $sql->fetch(); // use fetch when only 1 return is wanted.

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $results['movie_title'];?> &middot; Movies</title>
	<link href="css/general.css" rel="stylesheet">

</head>
<body>
	<p><a href="index.php">&lt;&nbsp;Back to the List</a></p>

	<h1><?php echo $results['movie_title']; ?></h1>

	<dl>
		<dt>Year of the Film</dt>
		<dd><?php echo $results['release_date'];?></dd>
		<dt>Directed by:</dt>
		<dd><?php echo $results['director'];?></dd>
	</dl>
	<p><a href="delete.php?id=<?php echo $id; ?>">Delete</a></p>
	<p><a href="edit.php?id=<?php echo $id; ?>">Edit</a></p>


</body>
</html>