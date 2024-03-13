<?php

$delete_user_id = $_GET['delete_user_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'first_project');
$user_delete_query = "DELETE FROM users WHERE user_id = $delete_user_id;";
$user_delete_final = mysqli_query($db_connect, $user_delete_query);
header('location:view_user.php');

?>
