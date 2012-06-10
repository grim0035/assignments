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

	<tr>
		<td>ID</td>
		<td>Movie Title</td>
		<td>Release Date</td>
		<td>Director</td>
	</tr>
	<tr>
		<td>2</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>

	<?php foreach ($results as $film) :?>
	<h2><a href="single.php?id=<?php echo $film['id']; ?>"><?php echo $film['movie_title'];?></a></h2>
	<dl>
		<dt>Loves Meat</dt>
		<dd><?php echo $film['release_date'];?></dd>
		<dt>In Jurassic Park</dt>
		<dd><?php echo $film['director'];?></dd>
	</dl>
	<?php endforeach; ?>

</body>
</html>