<html>
	<head>
		<meta name="viewport" content="width=device-width">
	</head>
	
	<body>
		<h2>Blog</h2>
		<?php
		/*
			$files = scandir('.');
			foreach($files as $file) {
				$info = pathinfo($file);
				if ($info["extension"] == "html") { 
					echo "<a href=$file>$file</a> <br> <br/>";
				}
			}

		*/
		?>


		<a href="addblog.html"><button>Add Blog</button></a>

		<ul>
		<?php
			$db = new SQlite3('../data.db');
			$results = $db->query('SELECT * FROM blog order by subject asc');
			while ($row = $results->fetchArray()) {
				$id = $row['id'];
				$subject = $row['subject'];
				$contents = $row['contents'];
				echo "<li><a href='viewblog.php?id=$id'</a>$subject</li></br>";
			}
		?>
		</ul>
		<br/><br/>
		<a href="../index.html">Back</a>
	</body>
</html>
