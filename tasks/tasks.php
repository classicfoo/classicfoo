
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
	</head>

	<body>
		<h1>Tasks</h1>

		<!--Actions-->
		<div id="actions" class="btn-group">
		  <button type="button" class="btn btn-primary">Add</button>
		  <button type="button" class="btn btn-primary">Edit</button>
		  <button type="button" class="btn btn-primary">Delete</button>
		  <button type="button" class="btn btn-success">Done</button>
		</div>
		<!--Task list-->	
		<ul>

			<?php
				$db = new SQlite3('../data.db');
				$results = $db->query('SELECT * FROM task order by subject asc');
				while ($row = $results->fetchArray()) {
					$id = $row['id'];
					$subject = $row['subject'];
					$contents = $row['contents'];
					echo "<li><a href='viewtask.php?id=$id'</a>$subject</li></br>";
				}
			?>

		</ul>

		<a href="../index.html">Back</a>

	</body>
</html>
