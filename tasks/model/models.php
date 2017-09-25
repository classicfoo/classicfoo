<?php

	function fetchTasks($userid) {
		$db = new SQlite3('../../data.db');
		$results = $db->query("SELECT * FROM task" );
		$tasks = $results->fetchArray(); 
		return $tasks;
	}

	function fetchTask($id) {
		$db = new SQLite3('../data.db');
		$task = $db->querysingle("select * from task where id=$id, true");
		return $task;
	}
	
?>
