<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header('Location: ../login/login.html');
	}
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
	</head>
	
	<body>
		<!--navbar-->
		<nav class="navbar navbar-fixed-top">

			<!--Heading--> 
			<h2 id="pageHeading">View Task</h2>

			<!--Breadcrumbs-->
			<ol class="breadcrumb">
				<li><a href="../index.php">Home</a></li>
				<li><a href="tasks.php">Tasks</a></li>
				<li class="active">View Task</li>
			</ol>

		</nav>

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

		<input type='button' class='btn btn-default' value='Back' onclick="window.location='tasks.php'">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>