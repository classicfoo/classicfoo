<?php
$db = new SQLite3('../data.db');
$db->exec('delete from task where id=' . $_GET['id'] );
$db->close();
header('Location: ./tasks.php');
?>
