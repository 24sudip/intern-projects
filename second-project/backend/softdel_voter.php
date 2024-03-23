<?php

$softdel_voter_id = $_GET['softdel_voter_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
$voter_soft_delete_query = "UPDATE voters SET delete_status='1' WHERE voter_id = $softdel_voter_id;";
mysqli_query($db_connect, $voter_soft_delete_query);
header('location:view_voter.php');

?>
