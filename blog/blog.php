<?php session_start(); ?>

<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
	</head>
	
	<body class="center">
		<div>
		<nav class="navbar navbar-fixed-top center"> 
			<h1>Microblog</h1>		
			<a href="addblog.html"><button type='button' id="addPost" class=' btn btn-primary'>Post</button></a>
			<ol class="breadcrumb">
				<li><a href="../index.php">Home</a></li>
				<li class="active">Microblog</li>
			</ol>
		</nav>
		</div>
		
		<div id="padding_above_first_post"></div>
		
		<?php
			$db = new SQlite3('../data.db');
			$results = $db->query("SELECT * FROM blog where username='".$_SESSION['username']."' order by id desc;" );

			echo "<div>";

			while ($row = $results->fetchArray()) {
				$id = $row['id'];
				$subject = $row['subject'];
				$contents = $row['contents'];
				$date = $row['date'];
				$date2 = substr($date, 0, strlen($date)-18);
				echo "
				<div class='postPadding'>
					<div class='post'>
						<p>$date2</p>
						<div id='content_container'>
							<a href='viewblog.php?id=$id'>$contents</a>
						</div>
					</div>
				</div>
				</br>";
			}

			echo "</div>";
		?>

		<br/><br/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script.js"></script>

	</body>
</html>
