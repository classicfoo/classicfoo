<html>

	<head>
		<meta name="viewport" content="width=device-width">
 		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
	</head>

	<body>

		<div id="actions">
			<input id="btnAdd" type="button" value="Add"></a> 
		</div>

		<h1>Tasks</h1>
		
		<table>
			<thead>
				<th>Subject</th><th>Due</th>
			</thead>
			<?php 
				include '../model/models.php';
				while($tasks = fetchTasks(1)) {
					echo <<<EOT
					var_dump($tasks[1])
EOT;
				}
			?>
		</table>

		<input id="btnBack" type='button' value='Back' onclick="window.location='../index.php'">

	</body>
</html>
