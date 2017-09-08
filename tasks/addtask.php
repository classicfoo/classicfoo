<?php

	$db = new SQlite3('../data.db');

	$subject = $_POST['subject'];
	$contents = $_POST['contents'];

	if(!$subject=="") { 
		$db->exec("insert into task (subject, contents) values ('". $subject . "', '". $contents ."');");
	}

	$db->close();

	header('Location: tasks.php');
?>
