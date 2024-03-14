<?php

$db_connect = mysqli_connect('localhost', 'root', '', 'first_project');
$softdel_user_id = $_GET['softdel_user_id'];
if (isset($_SESSION['soft_delete_time'])) {
    $soft_delete_time = $_SESSION['soft_delete_time'];
} else {
    $soft_delete_time = 0;
}

// $soft_delete_time = date("Y-m-d H-i-s");
$soft_delete_query = "UPDATE users SET delete_status='1' AND soft_delete_time='$soft_delete_time' WHERE 
user_id='$softdel_user_id'";
mysqli_query($db_connect, $soft_delete_query);
header('location:view_user.php');

?>
