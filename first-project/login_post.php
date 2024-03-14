<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$en_password = md5($password);
$db_connect = mysqli_connect('localhost', 'root','','first_project');
$user_confirm_query = "SELECT COUNT(*) AS result FROM users WHERE email='$email' AND login_try='1'";
$after_confirm_query = mysqli_query($db_connect, $user_confirm_query);
$after_confirm_assoc = mysqli_fetch_assoc($after_confirm_query);

if ($after_confirm_assoc['result'] == 1) {
    $password_confirm_query = "SELECT COUNT(*) AS result FROM users WHERE email='$email' AND password='$en_password'";
    $after_password_query = mysqli_query($db_connect, $password_confirm_query);
    $after_password_assoc = mysqli_fetch_assoc($after_password_query);
    if ($after_password_assoc['result'] == 1) {
        $_SESSION['login_email'] = "$email";
        header('location: dashboard.php');
    } else {
        $_SESSION['match_error'] = "Your Password Doesn't Match";
        header('location: login.php');
    }
    // echo "<h1>login success</h1>";
} else {
    // echo "<h1>login Unsuccess</h1>";
    $_SESSION['login_error'] = "Your Email Doesn't Match";
    header('location: login.php');
}

?>
