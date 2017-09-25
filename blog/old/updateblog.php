<?php

$db = new SQLite3('../data.db');
$sql = 'update blog set contents=:contents where id=:id';
$stmt = $db->prepare($sql);
$stmt->bindValue(':contents', $_POST['contents']);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
$db->close();

header('Location: blog.php');

?>
