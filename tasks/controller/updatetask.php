<?php

//get task
$id = $_POST['id'];
$subject = $_POST['subject'];
$contents = $_POST['contents'];
$due = $_POST['due'];

$db = new SQLite3('../data.db');

$sql = "UPDATE task set subject=:subject, contents=:contents, due=:due where id=:id;";
$stmt = $db->prepare($sql);
$stmt->bindValue(':subject', $subject);
$stmt->bindValue(':contents', $contents);
$stmt->bindValue(':due', $due);
$stmt->bindValue(':id', $id);
$stmt->execute();

$db->close();

header('Location: tasks.php');
?>
