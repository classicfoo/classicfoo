<?php
$id = $_POST['id'];
$subject = $_POST['subject'];
$contents = $_POST['contents'];
echo $id;
echo $subject;
echo $contents;
$db = new SQLite3('../data.db');
$db->exec('update task set subject=\''.$subject.'\', contents=\''.$contents.'\' where id='.$id.';');
$db->close();

header('Location: viewtask.php?id='.$id);
?>
