<?php
session_start();
if (!isset($_SESSION['commissioner_login_name'])) {
    header('location:error.php');
} else {
    $_SESSION['commissioner_dashboard_confirm'] = "Yes";
}
require_once('header.php');
?>
<h1>Welcome <?= $_SESSION['commissioner_login_name']?></h1>					
<?php
require_once('footer.php');
?>
