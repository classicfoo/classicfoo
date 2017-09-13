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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
		<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
	</head>
	<body id="index-body">
		<img id="classicfoo-logo" src="classicfoo-logo.png"></img>
		<a href="tasks/tasks.php"><div class="menu-item">Tasks</div></a>
		<a href="blog/blog.php"><div class="menu-item">Blog</div></a>
		<!--
		<a href="rsg/rsg.html"><div class="menu-item">Random String Generator</div></a>
		<a href="stopwatch/index.html"><div class="menu-item">Stopwatch</div></a>
		<a href="snippets/snippets.php"><div class="menu-item">Snippets</div></a>
		<a href="resume/resume.pdf"><div class="menu-item">Resume</div></a>
		-->
		<a href="login/logout.php"><div class="menu-item">Logout, <?php echo $_SESSION["username"] ?> </div></a>';
	</body>
</html>
