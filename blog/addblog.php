<?php

	$db = new SQlite3('../data.db');

	$subject = htmlspecialchars($_POST['subject']);
	$contents = htmlspecialchars($_POST['contents']);

	$tz = 'Australia/Sydney';
	$timestamp = time();
	$dt = new DateTime("now", new DateTimeZone($tz)); 
	$dt->setTimestamp($timestamp); 
	$date = $dt->format('D, j M Y, h:i A, '). $tz;

	$sql = 'INSERT INTO blog (subject, contents, date) VALUES(:subject, :contents, :date)';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':subject', $subject);
	$stmt->bindValue(':contents', $contents);
	$stmt->bindValue(':date', $date);
	$stmt->execute();


	$db->close();

	header('Location: blog.php');
?>
