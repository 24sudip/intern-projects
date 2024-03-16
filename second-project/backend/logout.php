<?php
session_start();
session_unset();
header('location: ../commissioner_login.php');
?>
