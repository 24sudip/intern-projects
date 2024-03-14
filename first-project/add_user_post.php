<?php
session_start();
// print_r($_POST);
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$en_password = md5($password);
$role = 'user';
$delete_status = '0';
$login_try = '1';
$flag = false;

if ($user_name) {
    $_SESSION['old_name'] = $user_name;
} else {
    $_SESSION['name_error'] = "Name Is Required";
    $flag = true;
}

if ($email) {
    $_SESSION['old_email'] = $email;
} else {
    $_SESSION['email_error'] = "Email Is Required";
    $flag = true;
}

if ($password) {
    $_SESSION['old_password'] = $password;
} else {
    $_SESSION['password_error'] = "Password Is Required";
    $flag = true;
}

if ($flag) {
    header('location: add_user.php');
} else {
    $db_connect = mysqli_connect('localhost', 'root','','first_project');
    $user_insert_query = "INSERT INTO users (user_name, email, password, role, delete_status, login_try) VALUES ('$user_name','$email','$en_password','$role','$delete_status','$login_try')";
    mysqli_query($db_connect, $user_insert_query);
    $_SESSION['register_success'] = "$user_name Has Registered Successfully";
    header('location: view_user.php');
}

?>
