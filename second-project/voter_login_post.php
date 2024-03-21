<?php
// print_r($_POST);
session_start();
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$db_connect = mysqli_connect('localhost', 'root','','second_project');
$name_confirm_query = "SELECT COUNT(*) AS result FROM voters WHERE name='$name' AND phone_number='$phone_number'";
$after_name_query = mysqli_query($db_connect, $name_confirm_query);
$after_name_assoc = mysqli_fetch_assoc($after_name_query);

if ($after_name_assoc['result'] == 0) {
    $_SESSION['voter_login_error'] = "Your Credentials Don't Match";
    header('location: voter_login.php');

} else {
    // echo "Login";
    $id_confirm_query = "SELECT * FROM voters WHERE name='$name' AND phone_number='$phone_number'";
    $after_id_query = mysqli_query($db_connect, $id_confirm_query);
    $after_id_assoc = mysqli_fetch_assoc($after_id_query);
    $_SESSION['voter_login_id'] = $after_id_assoc['voter_id'];
    $_SESSION['voter_login_name'] = $after_id_assoc['name'];
    $_SESSION['voter_login_photo'] = $after_id_assoc['voter_photo'];
    header('location: backend/voter_dashboard.php');
}

?>
