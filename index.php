<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Quản lí thành viên</title>
</head>
<body>
<?php
$baitren_mottrang = 5;
require('database.php');
$id = "";
$full_name = "";
$user_name = "";
$email = "";
$phone = "";
$avatar = "";
if (!isset($_GET["page"])){
    $page = 0;
} else $page = $_GET['page'];
$sql = "SELECT * FROM `user`";
$result = db_query($sql);
$sodu_lieu = $result->num_rows;
$sotrang = (int)($sodu_lieu/$baitren_mottrang);

echo "</br>";
for ( $page = 0; $page <= $sotrang; $page ++ )
{
  
echo "<a href='index.php?page={$page}'>Trang_{$page}   </a>";
}
echo "</br>";
if (isset($_GET['page'])) {
if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `user` where id = $id limit 0,5";
    $result = db_query($sql);
    while ($row = $result->fetch_array()) {
        $id = $row['id'];
        $full_name = $row['full_name'];
        $user_name = $row['user_name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $level = $row['level'];
        $avatar = $row['avatar'];
        echo "<h1>Chao mung $full_name da den voi chuong trinh</h1>" ;
        echo '</br>';
        if ($level ==1) {
            echo "Ban la admin ";
            echo "</br>";
            echo '<td><a href="register.php">Thêm thành viên</a></td>';
            echo "</br>";
            echo '<td><a href="logout.php">Log out</a></td>';
        }
        elseif($level==2) {
            echo "Ban la thanh vien";
            echo "</br>";
            echo '<td><a href="logout.php">Log out</a></td>';
        }
        else echo "Ban la khach";
    }
} else echo '<a href="login.php">Login</a>';
}
?>


<h1 style="color: red; text-align: left"> Bảng Quản lí thành viên</h1>
</br>
    <table border = "2" style = "height: auto;width: auto;">
        <tr>
            <td>STT</td>
            <td>Avatar</td>
            <td>FUll Name</td>
            <td>User name</td>
            <td>email</td>
            <td>telephone</td>
            <td>level</td>
            <td>Hành động</td>
        </tr>
        <?php
        $ad = 0;
            require_once('database.php');
            if (isset($_GET["id"])) {
            $id1 = $_GET['id'];
            $sql1 = "SELECT * FROM `user` where id = $id1";
            $result1 = db_query($sql1);
            while ($row = $result1->fetch_array()) {
                $ad = $row['level'];}
                }
            
            $sql2 = "SELECT * FROM `user`";
            $result2 = db_query($sql2);
            while ($row = $result2->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><img src="<?php echo $row['avatar']; ?>" style="width: 50px;height: 50px;"/></td>
                <td><?php echo $row['full_name'];?></td>
                <td><?php echo $row['user_name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['level'];?></td>
                <?php
                if ($ad==1) {
                    echo '<td><a href="Edit.php?id='.$row['id'].'">Edit</a></br><a href="delete.php?id='.$row['id'].'">Delete</a></td>';
                    
                    }
                elseif ($ad==2&& $row['id']==$id1)echo'<td><a href="Edit.php?id='.$row['id'].'">Edit</a></br><a href="delete.php?id='.$row['id'].'">Delete</a></td>';
                else echo '<td></td>';
                ?>
            </tr>
           <?php }?>
           
    </table>
</body>
</html>