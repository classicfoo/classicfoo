<?php
$id = $_POST['id'];
$subject = $_POST['subject'];
$contents = $_POST['contents'];
echo $id;
echo $subject;
echo $contents;

$db = new SQLite3('../data.db');
$db->exec('update blog set subject=\''.$subject.'\', contents=\''.$contents.'\' where id='.$id.';');

$sql = 'update blog set subject=:subject, contents=:contents where id=:id';
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':subject', $subject);
	$stmt->bindValue(':contents', $contents);
	$stmt->bindValue(':id', $id);
	$stmt->execute();

$db->close();
header('Location: viewblog.php?id='.$id);
?>
