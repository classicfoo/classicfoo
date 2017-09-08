<head>
	<meta name="viewport" content="width=device-width">
</head>

<?php
$id = $_GET['id'];
$db = new SQLite3('../data.db');
$task = $db->querysingle("select * from task where id=" . $id, true);
$subject = $task['subject'];
$contents = $task['contents'];
echo "<h1>Edit Task</h1>";
echo "<form action='updatetask.php' method='POST'>";
echo "<input type='hidden' name='id' value=".$id.">";
echo "Subject <br/><br/><input type='text' name='subject' style='width:100%' value='".$subject."'><br/><br/>";
echo "Contents<br/><br/><textarea rows='10' name='contents' style='width:100%'>$contents</textarea><br/><br/>";
echo "<input type='submit' value='Submit'>";
echo "</form>";
$db->close();
?>

