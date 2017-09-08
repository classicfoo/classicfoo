<head>
<meta name="viewport" content="width=device-width">
</head>

<h1>Tasks</h1>
<a href="addtask.html"><button>Add Task</button></a>

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
