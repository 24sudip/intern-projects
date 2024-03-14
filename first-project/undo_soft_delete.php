<?php

$softdel_user_id = $_GET['softdel_user_id'];
$soft_delete_time = 0;
$db_connect = mysqli_connect('localhost', 'root', '', 'first_project');
$soft_undo_query = "UPDATE users SET delete_status='0' AND soft_delete_time='$soft_delete_time' WHERE user_id = $softdel_user_id;";
$soft_undo_final = mysqli_query($db_connect, $soft_undo_query);
header('location:view_user.php');

?>
