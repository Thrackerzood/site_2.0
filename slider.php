<?php
$db = new mysqli('localhost', 'root', '','anime_db');
$res1 = mysqli_query($db,'select * from `news_for_site` order by id desc limit 3');
$data1 = array();
while($row = mysqli_fetch_assoc($res1)){
   $data1[] = $row;
}
echo json_encode($data1);
?>

