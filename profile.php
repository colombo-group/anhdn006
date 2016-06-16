<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="GallerySoft.info" />

	<title>profile</title>
</head>

<body>
<?php
 require_once('database.php');
 require_once('list.php');
    $result = db_query("SELECT * FROM `user`");
    if (isset($_SESSION['username'])) {
                echo "Chào m?ng {$_SESSION['username']}";
            } else {
                echo "Chào m?ng b?n";
            }
?>
</body>
</html>