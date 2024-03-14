<?php
session_start();
$user_id = $_SESSION['user_id'];
$db_connect = mysqli_connect('localhost', 'root','','first_project');
$user_details_query = "SELECT * FROM users WHERE user_id='$user_id'";
$after_details_query = mysqli_query($db_connect, $user_details_query);
$after_details_assoc = mysqli_fetch_assoc($after_details_query);
require_once('header.php');
?>
<div class="col-lg-12">
    <h1>Welcome</h1>
    <h2>Your Name: <?= $after_details_assoc['user_name'] ?></h2>
    <h2>Your Email: <?= $after_details_assoc['email'] ?></h2>
    <h2>Your Role: <?= $after_details_assoc['role'] ?></h2>
    <a href="logout.php" class="btn btn-info">Logout</a>
</div>
<?php
require_once('footer.php');
?>
