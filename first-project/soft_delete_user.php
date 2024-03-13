<?php

$softdel_user_id = $_GET['softdel_user_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'first_project');
$soft_delete_query = "UPDATE users SET delete_status='soft' WHERE user_id = $softdel_user_id;";
$soft_delete_final = mysqli_query($db_connect, $soft_delete_query);
header('location:view_user.php');

?>
