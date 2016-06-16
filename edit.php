<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Edit Profile</title>
</head>
<h2>Thong tin chi tiet thanh vien</h2>

<?php
require_once('database.php');
$id = "";
$full_name = "";
$user_name = "";
$email = "";
$phone = "";
$avatar = "";
if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `user` where id = $id";
    $result = db_query($sql);
    while ($row = $result->fetch_array()) {
        $id = $row['id'];
        $full_name = $row['full_name'];
        $user_name = $row['user_name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $password = $row['password'];
        $level = $row['level'];
        $avatar = $row['avatar'];
    }
}
/**
 * @author GallerySoft.info
 * @copyright 2016
 */



?>
<form method="post" name="update">
<table border = "2" style="width: auto;height: auto;">
    <tr>
        <td>Full name:*</td>
        <td><input type="text" name="full_name" value="<?php echo $full_name;?>"/></td>
    </tr>
    <tr>
        <td>User name:</td>
        <td><input type="text" name="user_name" value="<?php echo $user_name; ?>"/></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email" value="<?php echo $email;?>"/></td>
    </tr>
    <tr>
        <td>Phone:</td>
        <td><input type="text" name="phone" value="<?php echo $phone; ?>"/></td>
    </tr>
    <tr>
        <td>Level:</td>
        <td><input type="text" name="level" value="<?php echo $level;?>"/></td>
    </tr>
     <tr>
        <td>Password:</td>
        <td><input type="password" name="password" value="<?php echo $password;?>"/></td>
    </tr>
    <tr>
        <td>Avatar:</td>
        <td><input type="file" name="avatar" /></td>
    </tr>
    <tr><td><input type="submit" name="save" value="Save information^^"/></td></tr>
</table>
<?php
    if (isset($_POST["save"])) {
        $fullname = $_POST['full_name'];
        $username = $_POST['user_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $level = $_POST['level'];
        $avatar = $_POST['avatar'];
        $password = $_POST['password'];
        $password = sha1($password);
        $sql = "Update `user` set full_name = '$fullname',avatar = '$avatar', user_name = '$username',email = '$email',phone='$phone',level='$level',password='$password' where id = $id";
        db_query($sql);
        header('Location: index.php');
    }
?>
</form>
</html>