<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="GallerySoft.info" />

	<title>Untitled 1</title>
</head>

<body>
<h2>List Profile</h2>
<?php
    require_once('profilegiaodien.php');
    require_once('database.php');
    $result = db_query("SELECT * FROM `user`");
    while ($row = $result->fetch_assoc()){
        $avatar = $row['avatar']; 
    echo '<table border = "2" style = "width: 1000px;">
        <tr>
            <td>';
            echo '<a href="profilegiaodien.php"/><img src = "'.$avatar.'" style = "width:50px;height:50px;"/>';  
            display($row['Ten day du']);
            echo '<td style = "width:500px;height:60px;">'.$row['Ten day du'].'</td>
            <td><a href ="profile.php" >Edit</td>
        </tr>
    </table>';
    }
?>
</body>
</html>