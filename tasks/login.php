<?php
	if($_POST[username] == "mike" && $_POST[password] == "30gremlins") {
		header('Location: tasks.php');
	} else {
		header('Location: login.html');
	}
?>
