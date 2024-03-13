<?php
session_start();
$edit_user_id = $_POST['edit_user_id'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$role = $_POST['role'];
if ($_POST['password']) {
    $en_password = md5($_POST['password']);
    
    $db_connect = mysqli_connect('localhost', 'root', '', 'first_project');
    $user_update_query = "UPDATE users SET user_name='$user_name',email='$email',
    password='$en_password',role='$role' WHERE user_id='$edit_user_id';";
    $user_update_final = mysqli_query($db_connect, $user_update_query);
    
    $_SESSION['user_edit'] = "User Updated Successfully";
    header('location:view_user.php');
} else {
    $_SESSION['edit_id'] = $_POST['edit_user_id'];
    $_SESSION['password_edit_error'] = "Password Is Required";
    header('location: edit_user.php');
}

?>
