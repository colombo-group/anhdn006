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
    $sql = "delete FROM `user` where id = $id";
    $query = db_query($sql);
    header('Location: index.php');}
?>
</html>