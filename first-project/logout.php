<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $db_connect = mysqli_connect('localhost', 'root','','first_project');
    $user_details_query = "UPDATE users SET login_try='0' WHERE user_id='$user_id'";
    $after_details_query = mysqli_query($db_connect, $user_details_query);

}
session_unset();
header('location:login.php');
?>
