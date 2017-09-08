<head>
<meta name="viewport" content="width=device-width">
</head>

	<h1>Task</h1>

<?php
	echo "<a href='edittask.php?id=".$_GET["id"]."'><button>Edit Task</button></a> ";
	echo "<a href='deletetask.php?id=".$_GET["id"]."'><button>Delete Task</button></a>";
	$db = new SQlite3('../data.db');
	$task = $db->querysingle('SELECT * FROM task where id='.$_GET["id"],true);
	echo "<h2>". $task['subject'] . "</h2>";
	echo "<pre style='white-space:pre-wrap'>". $task['contents'] . "</pre>";
?>

</br>
<a href="tasks.php">Back</a>
