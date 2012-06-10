<?php
require_once 'includes/db.php';
//pointer to db
$sql = $db->query('
	SELECT id, movie_title, release_date, director
	FROM movies
	ORDER BY movie_title ASC
');

$results = $sql->fetchAll(); //gets data from db

//Display the last error created by our database
//var_dump($db->errorInfo());

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies</title>
</head>
<body>

	<table width="100%" border="1">
	<caption>Favourite "Harrison Ford" Movies</caption> <!-- summary for the table-->
		<colgroup>
			<col>
			<col>
			<col>
			<col>
		</colgroup>
	<thead> <!-- table header cells -->
		<tr>
			<!-- table =scope defines what direction the <th> is labelling: col or row -->
			<th scope="col">ID</th>
			<th scope="col">Movie Title</th>
			<th scope="col">Release Date</th>
			<th scope="col">Director</th>
		</tr>
	</thead>
	<?php foreach ($results as $film) :?>
	<tr>
		<td><?php echo $film['id'];?></td>
		<td><a href="single.php?id=<?php echo $film['id']; ?>"><?php echo $film['movie_title'];?></a></td>
		<td><?php echo $film['release_date'];?></td>
		<td><?php echo $film['director'];?></td>
	</tr>
	<?php endforeach; ?>

</table>

</body>
</html>