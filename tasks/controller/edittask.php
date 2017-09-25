<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

		<?php
		$id = $_GET['id'];
		$db = new SQLite3('../data.db');
		$task = $db->querysingle("select * from task where id=" . $id, true);
		$subject = $task['subject'];
		$due = $task['due'];
		
		echo <<<EOT

		<h1>Edit Task</h1>
		<form action='updatetask.php' method='POST'>
		<input type='hidden' name='id' value= $id >
		Subject<input type='text' id='subject' name='subject' style='width:100%' autofocus value= $subject > <br/><br/>
		Due<input type='date' id='due' name='due' value= $due > <br> <br>
		<input type='submit' class='btn btn-primary' value='Submit'>
		<input type='button' class='btn btn-default' value='Cancel' onclick="window.location='tasks.php'">
		</form>
		
EOT;

		$db->close();
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script.js"></script>

	</body>

</html>
