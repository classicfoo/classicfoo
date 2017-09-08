<?php

	$db = new SQLite3('database.db');

//	$name = 'joan';
	$stmt = $db->prepare("insert into test (name) values ('joan')");
	//echo $db.errorInfo();
//	    echo "\nPDO::errorInfo():\n";
//	}
	$stmt->bindValue(':name', $name, SQLITE3_TEXT);
	$result = $stmt->execute();

//	print_r($db->errorInfo());
	
	echo var_dump($stmt);


	$results = $db->query('select * from test');
	while ($row = $results->fetchArray()) {
	    echo $row['name'] . "<br/>";
	}	    
	$db->close();

?>

