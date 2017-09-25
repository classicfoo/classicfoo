<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header('Location: ../login/login.html');
	}
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width">
 		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
	</head>
	
	<body>
		<h1>View Task</h1>
		<?php
			$id = $_GET["id"];
			$db = new SQlite3('../data.db');
			$task = $db->querysingle('SELECT * FROM task where id='.$id,true);
			$subject = $task['subject'];

			echo <<<EOT
			<a href='edittask.php?id='$id'> <button type="button" class="btn btn-primary">Edit Task</button></a>
			<a href='deletetask.php?id='$id'><button type="button" class="btn btn-primary">Delete Task</button></a>
			<pre id='view_task_content' style='white-space:pre-wrap'> $subject </pre>

EOT;

		?>

		<input id="btnBack" type='button' value='Back' onclick="window.location='tasks.php'">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>