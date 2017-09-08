<head>
<meta name="viewport" content="width=device-width">
</head>

	<h1>Blog</h1>
	
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

</br>
<a href="blog.php">Back</a>
