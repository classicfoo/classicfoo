<?php
$db = new SQLite3('../data.db');
$db->exec('delete from blog where id=' . $_GET['id'] );
$db->close();
header('Location: ./blog.php');
?>
