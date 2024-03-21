<?php
session_start();
session_unset();
header('location: ../voter_login.php');
?>
