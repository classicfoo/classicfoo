<head>
	<meta name="viewport" content="width=device-width">
</head>

<?php
$id = $_GET['id'];
$db = new SQLite3('../data.db');
$blog = $db->querysingle("select * from blog where id=" . $id, true);
$contents = $blog['contents'];
echo "<h1>Edit blog</h1>";
echo "<form action='updateblog.php' method='POST'>";
echo "<input type='hidden' name='id' value=".$id.">";
echo "<textarea rows='10' name='contents' style='width:100%'>$contents</textarea><br/><br/>";
echo "<input type='submit' value='Submit'>";
echo "</form>";
$db->close();
?>

