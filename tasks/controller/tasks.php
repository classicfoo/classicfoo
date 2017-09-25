<?php
	session_start();
	$user = $_SESSION['id'];
	if(!isset($user)) {
		header('Location: ../login/login.html');
	}

	while ($tasks = fetchTasks($user)) {

		$today = today();
		$due = due($tasks['due']);

		$diff = $today->diff($due);
		$diffDays = (integer)$diff->format( "%R%a" );

		switch( $diffDays ) {
			case 0:
				$due = "Today";
				break;
			case +1:
				$due = "Tomorrow";
				break;
			default:
				if($diffDays < 0) {
					$due = "Overdue";
				}
		}

		echo "<tr id='$id'><td><a href='viewtask.php?id=$id'</a>$subject</td><td>$due</td></tr>";
	}

	function today() {
		$today = new DateTime();
		$today->setTime( 0, 0, 0 );
		return $today;
	}

	function due() {
		$match_date = DateTime::createFromFormat( "Y-m-d", $due );
		$match_date->setTime( 0, 0, 0 );
		return $match_date;
	}

?>
