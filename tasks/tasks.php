
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
	</head>
	<body>

		<nav class="fixed-top">
				<h1>Tasks</h1>
				<!--Actions-->
				<div id="actions"> 
					<div class="btn-group">
						<button type="button" class="btn btn-primary" id="btnAdd">Add</button>
						<button type="button" class="btn btn-primary"id="btnEdit">Edit</button>
						<button type="button" class="btn btn-primary" id="btnDelete">Delete</button>
					</div>
					<!--<button type="button" class="btn btn-success">Done</button>-->
				</div>
		</nav>

		<!--Task list-->	
		<table id="tasklist" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Subject</th>	
					<th>Due</th>
				</tr>
			</thead>
			<tbody>
				

			<?php
				$db = new SQlite3('../data.db');
				$results = $db->query('SELECT * FROM task order by due asc');
				while ($row = $results->fetchArray()) {
					$id = $row['id'];
					$subject = $row['subject'];
					$contents = $row['contents'];
					$due = $row['due'];
					echo "<tr id='$id' class='clickable-row'><td><a href='viewtask.php?id=$id'</a>$subject</td><td>$due</td></tr>";
				}
			?>
			</tbody>

		</table>

		<a href="../index.html">Back</a>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script.js"></script>

	</body>
</html>
