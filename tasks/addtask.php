<?php

	$db = new SQlite3('../data.db');

	$subject = $_POST['subject'];
	$contents = $_POST['contents'];

	if(!$subject=="") { 
	
	$sql = 'INSERT INTO task(subject, contents, date) VALUES(:subject, :contents, :due)';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':subject', $subject);
	$stmt->bindValue(':contents', $contents);
	$stmt->bindValue(':due', $due);
	$stmt->execute();

	$db->close();

	//$db->exec("insert into task (subject, contents, due) values ('". $subject . "', '". $contents ."');");
	}	

	header('Location: tasks.php');
?>
