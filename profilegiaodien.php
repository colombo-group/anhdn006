<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="GallerySoft.info" />

	<title>Untitled 3</title>
</head>

<body>
<?php
require_once('database.php');
require_once('list.php');

function display($user) {
    $query =  "SELECT * FROM `user` where Ten day du = '{$user}' ";
    $result = db_query($query);
    $avatar = $result['avatar']; 
    echo '<img src = "'.$avatar.'" style = "width:50px;height:50px;"/>';
    }
?>
</body>
</html>