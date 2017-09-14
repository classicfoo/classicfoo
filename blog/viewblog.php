<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header('Location: ../login/login.html');
	}
?>

<html>

	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
		
	<body>
		<nav class="navbar navbar-fixed-top"> 
			<h1>Microblog</h1>		
			<a href="addblog.html"><button type='button' id="addPost" class=' btn btn-primary'>Post</button></a>
			<ol class="breadcrumb">
				<li><a href="../index.php">Home</a></li>
				<li class="active">Microblog</li>
			</ol>
		</nav>
		


		<?php

			echo "<a href='editblog.php?id=".$_GET["id"]."'><button>Edit Blog</button></a> ";
			echo "<a href='deleteblog.php?id=".$_GET["id"]."'><button>Delete Blog</button></a>";
			echo "<br/><br/>";

			$db = new SQlite3('../data.db');
			$blog = $db->querysingle('SELECT * FROM blog where id='. $_GET["id"] ,true);
			echo "<div id='date' class='newline'>". $blog['date'] ."</div>";
			echo "<h2>". $blog['subject'] . "</h2>";

			$contents = $blog['contents'];
			$contents = str_replace("''","'", $contents);
			echo "<pre style='white-space:pre-wrap'>". $blog['contents'] . "</pre>";
		?>
		<input type="button" class="btn btn-default" value="back" onclick="window.location='blog.php'">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script.js"></script>
	
	</body>
</html>