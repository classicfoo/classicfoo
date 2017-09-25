<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			$files = scandir('./');
			foreach($files as $file) {
				if(isTxt($file)) {
					echo("<a href='$file'>$file</a>");
				}
			}	
		?>
	</body>
</html>

<?php
	function isTxt($file) {
		$file_parts = pathinfo($file);
		if($file_parts['extension'] == "txt") {
			return True;
		}
	}
?>
