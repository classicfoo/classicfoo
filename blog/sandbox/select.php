<?php
unlink('mysqlitedb.db');

$db = new SQLite3('mysqlitedb.db');

$db->exec('CREATE TABLE foo (id INTEGER, bar STRING)');
//$db->exec("INSERT INTO foo (id, bar) VALUES (1, 'This is a test')");

$sql = 'INSERT INTO foo (bar) VALUES(:name)';
$stmt = $db->prepare($sql);
$stmt->bindValue(':name', "john");
$stmt->execute();
$stmt->bindValue(':name', "bill");
$stmt->execute();

$stmt = $db->prepare('SELECT * FROM foo');

$result = $stmt->execute();
var_dump($result->fetchArray());
?>
