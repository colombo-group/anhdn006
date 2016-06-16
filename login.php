<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="GallerySoft.info" />

	<title>Login</title>
</head>

<body>
<form method="post" name="login">
    <h2>User name:</h2>
    <input type="text" name="username"/>
    <h2>Password:</h2>
    <input type="password" name="password"/>
    <input type="submit" value="LOGIN" name="submit"/> 

<?php
  require_once('database.php');
  if (isset($_POST['submit'])) {
    $username = '';
    if (isset($_POST['username'])) {
        $username = ($_POST['username']);
    }
    $password = '';
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $password = sha1($password);
    }
    echo "</br>";
    $result = db_query("SELECT * FROM `user` where user_name = '{$username}' ");
    if ($result->num_rows >0) {
        $row = $result->fetch_array();
         if ($row['password'] == $password) {
            $text = 'index.php'.'?id='.$row[id];
         
               header("Location: $text");
         } else echo "Mat khau ban nhap khong dung";
        } else echo "Khong ton tai tai khoan nay ^^";
    
   }
   ?>
    
   
</form>
</body>
</html>