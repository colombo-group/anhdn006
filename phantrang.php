<?php
$baitren_mottrang = 5; // T?ng s? tin hi?n tr�n 1 trang

// N?u chua ch?n trang d? xem. th� ta m?c d?nh ngu?i d�ng xem dang s? 0 .  
if ( !$_GET['page'] )
{
    $page = 0 ;
}
// �?u ti�n b?n ph?i l?y s? d? li?u d? xem, trong data b?n c� bao nhi�u b�i post
include_once('database.php');
$sql = "SELECT * from `user`";
$result = db_query($sql);
$sodu_lieu = $result->num_rows;
echo $sodu_lieu;
//T�nh s? trang. L?y s? b�i vi?t c� du?c, chia cho s? b�i vi?t tr�n 1 trang, ta du?c s? trang 
/* V� d? ta c� 
20 b�i vi?t trong data. 
m?i trang hi?n th? 10 b�i
=> Ch�ng ta c� 20/10 = 2 trang 
*/
$sotrang = $sodu_lieu/$baitren_mottrang;
echo $sotrang;
// B?t d?u l?y d? li?u 
// Ta d�ng h�m LIMIT x,y 
// Ta mu?n ch?n 10 b�i, t? b�i 20 th� ta d? LIMIT 20,10 :D 
$sql2 = "SELECT * FROM `user` ORDER BY `id` DESC  LIMIT {$page}*{$baitren_mottrang},{$baitren_mottrang} ";
$result =db_query($sql);
/* B?n xem t?i sao l� {$page}*{$baitren_mottrang} . L?y s? id c?a trang hi?n t?i nh�n v?i s? b�i vi?t cho 
ph�p tr�n 1 trang
V� d? ta dang ? trang s? 0. th� ta l?y t? b�i th? 0 tr? di.
? trang s? 1 th� l?y b�i th? 10 tr? di... V� m?i trang ta cho n� hi?n ch? 10 b�i th�i :D
*/

// Xu?t d? li?u n�y 

while ( $info = $result->fetch_array())  
{
    echo 
    $info['user_name'];
    echo '<br />';
    
   echo $info['full_name'];
}

// B�y gi? t?o n�t b?m d? chuy?n trang. 
// H?i n?y ta t�nh dc c�i $sotrang r�i �
// B�y gi? ta d�ng h�m for d? t?o v�ng l?p. hi?n t? trang s? 0 d?n <= $sotrang
echo "</br>";
for ( $page = 0; $page <= $sotrang; $page ++ )
{
  
echo "<a href='index.php?page={$page}'>{$page}</a>";
}





