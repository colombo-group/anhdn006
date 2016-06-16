<?php
$baitren_mottrang = 5; // T?ng s? tin hi?n trên 1 trang

// N?u chua ch?n trang d? xem. thì ta m?c d?nh ngu?i dùng xem dang s? 0 .  
if ( !$_GET['page'] )
{
    $page = 0 ;
}
// Ð?u tiên b?n ph?i l?y s? d? li?u d? xem, trong data b?n có bao nhiêu bài post
include_once('database.php');
$sql = "SELECT * from `user`";
$result = db_query($sql);
$sodu_lieu = $result->num_rows;
echo $sodu_lieu;
//Tính s? trang. L?y s? bài vi?t có du?c, chia cho s? bài vi?t trên 1 trang, ta du?c s? trang 
/* Ví d? ta có 
20 bài vi?t trong data. 
m?i trang hi?n th? 10 bài
=> Chúng ta có 20/10 = 2 trang 
*/
$sotrang = $sodu_lieu/$baitren_mottrang;
echo $sotrang;
// B?t d?u l?y d? li?u 
// Ta dùng hàm LIMIT x,y 
// Ta mu?n ch?n 10 bài, t? bài 20 thì ta d? LIMIT 20,10 :D 
$sql2 = "SELECT * FROM `user` ORDER BY `id` DESC  LIMIT {$page}*{$baitren_mottrang},{$baitren_mottrang} ";
$result =db_query($sql);
/* B?n xem t?i sao là {$page}*{$baitren_mottrang} . L?y s? id c?a trang hi?n t?i nhân v?i s? bài vi?t cho 
phép trên 1 trang
Ví d? ta dang ? trang s? 0. thì ta l?y t? bài th? 0 tr? di.
? trang s? 1 thì l?y bài th? 10 tr? di... Vì m?i trang ta cho nó hi?n ch? 10 bài thôi :D
*/

// Xu?t d? li?u này 

while ( $info = $result->fetch_array())  
{
    echo 
    $info['user_name'];
    echo '<br />';
    
   echo $info['full_name'];
}

// Bây gi? t?o nút b?m d? chuy?n trang. 
// H?i n?y ta tính dc cái $sotrang rùi á
// Bây gi? ta dùng hàm for d? t?o vòng l?p. hi?n t? trang s? 0 d?n <= $sotrang
echo "</br>";
for ( $page = 0; $page <= $sotrang; $page ++ )
{
  
echo "<a href='index.php?page={$page}'>{$page}</a>";
}





