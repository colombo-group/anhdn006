<h1>Them thanh vien</h1>
<form method="post" action="">
    <h2>Full name*:</h2>
    <input type="text" name="fullname"/>
    <h2>Username*: </h2>
	<input type="text" name = "username"/>
    
    <h2>Password*:</h2> 
	<input type="password" name="password"/>
    <h2>Email*:</h2>
	<input type="text" name="email"/>
    <h2>Phone*:</h2>
    <input type = "text" name = "phone"/>
    <h2>Level:*</h2>
    <input type="text" name="level"/>
    <h2>Avatar*:</h2>
	<input type="file" name="avatar" value="Chon anh"/>
    </br>
    </br>
	<input type="submit" value="Register" name="submit"/>
</form>

<?php
	require_once('database.php');
	if (isset($_POST['submit'])) {
		$fullname = '';
		if (isset($_POST['fullname'])) {
			$fullname = $_POST['fullname'];
		}
		$password = '';
		if (isset($_POST['password'])) {
			$password = $_POST['password'];
			$password = sha1($password);
		}
		$username = '';
		if (isset($_POST['username'])) {
			$username = $_POST['username'];

		}
		$email = '';
		if (isset($_POST['email'])) {
			$email = $_POST['email'];
		}
        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
        }
        if (isset($_POST['avatar'])){
            $avatar = $_POST['avatar'];
        }
        if (isset($_POST['level'])){
            $level = $_POST['level'];
        }
		$sql = " INSERT INTO user (full_name,user_name, password, email, phone, avatar,level) VALUES ('{$fullname}', '{$username}', '{$password}', '{$email}', '{$phone}', '{$avatar}','{$level}') ";
		db_query($sql);
        header('Location: index.php');
	}
?>