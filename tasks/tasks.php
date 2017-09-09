
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
	</head>

	<body>
		<h1>Tasks</h1>

		<!--Actions-->
		<div id="actions"> 
			<div class="btn-group">
				<button type="button" class="btn btn-primary">Add</button>
				<button type="button" class="btn btn-primary">Edit</button>
				<button type="button" class="btn btn-primary">Delete</button>
			</div>
			<button type="button" class="btn btn-success">Done</button>
		</div>
		<!--Task list-->	
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Subject</th>	
					<th>Due</th>
				</tr>
			</thead>
			<tbody>
				

			<?php
				$db = new SQlite3('../data.db');
				$results = $db->query('SELECT * FROM task order by subject asc');
				while ($row = $results->fetchArray()) {
					$id = $row['id'];
					$subject = $row['subject'];
					$contents = $row['contents'];
					echo "<tr><td><a href='viewtask.php?id=$id'</a>$subject</td><td></td></tr>";
				}
			?>
			</tbody>

		</table>

		<a href="../index.html">Back</a>

	</body>
</html>
