# SNIPPETS

## HTML

### Enable mobile if no Bootstrap
`<meta name="viewport" content="width=device-width">`

### External Stylesheet (style.css)
`<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">`

### Bootstrap 3.3 CDN
`<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">`

### External Script (script.js)
`<script src="script.js"></script>`

### Sticky navbar
`<nav class="navbar navbar-fixed-top"></nav>`

## PHP
```
<?php
  $db = new SQlite3('../data.db');
  $results = $db->query('SELECT * FROM task order by due asc, id asc');
  while ($row = $results->fetchArray()) {
    $id = $row['id'];
    $subject = $row['subject'];
    $contents = $row['contents'];
    $due = $row['due'];
    echo "<tr id='$id' class='clickable-row'><td><a href='viewtask.php?id=$id'</a>$subject</td><td>$due</td></tr>";
  }
?>
```
