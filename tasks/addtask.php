<?php

	session_start();

	$db = new SQlite3('../data.db');

	$subject = $_POST['subject'];
	$contents = $_POST['contents'];
	$due= $_POST['due'];

	if(!$subject=="") { 
	
		$sql = 'INSERT INTO task(subject, contents, due, username) VALUES(:subject, :contents, :due, :username)';
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':subject', $subject);
		$stmt->bindValue(':contents', $contents);
		$stmt->bindValue(':due', $due);
		$stmt->bindValue(':username', $_SESSION['username']);
		$stmt->execute();

		$db->close();

	}	

	header('Location: tasks.php');
?>
