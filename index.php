<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header('Location: login/login.html');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
	</head>
	<body">
		<h1>Classicfoo</h1>
		<div id="logout"><?php echo "Welcome ". $_SESSION["username"]. "! " ?> <a href="login/logout.php" class="inline">[Logout]</a></div>
		<a href="tasks/view/tasks.php">Tasks</a>
		<a href="blog/blog.php">Blog</a>
		<a href="rsg/rsg.html">Random String Generator</a>
		<a href="stopwatch/index.html">Stopwatch</a>
		<a href="snippets/snippets.php">Snippets</a>
		<a href="resume/resume.pdf">Resume</a>
		<a href="listapp/listapp.php">ListApp</a>
	</body>
</html>
