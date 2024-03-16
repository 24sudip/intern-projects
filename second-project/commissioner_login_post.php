<?php
// print_r($_POST);
session_start();
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$db_connect = mysqli_connect('localhost', 'root','','second_project');
$name_confirm_query = "SELECT COUNT(*) AS result FROM commissioners WHERE name='$name' AND phone_number='$phone_number'";
$after_name_query = mysqli_query($db_connect, $name_confirm_query);
$after_name_assoc = mysqli_fetch_assoc($after_name_query);

if ($after_name_assoc['result'] == 0) {
    $_SESSION['commissioner_login_error'] = "Your Credentials Don't Match";
    header('location: commissioner_login.php');

} else {
    // echo "Login";
    $_SESSION['commissioner_login_name'] = $name;
    header('location: backend/commissioner_dashboard.php');
}

?>
