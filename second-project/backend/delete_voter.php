<?php

$delete_voter_id = $_GET['delete_voter_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
$voter_details_query = "SELECT * FROM voters WHERE voter_id = $delete_voter_id;";
$after_voter_query = mysqli_query($db_connect, $voter_details_query);
$after_voter_assoc = mysqli_fetch_assoc($after_voter_query);

unlink("../asset/upload/voter_photos/".$after_voter_assoc['voter_photo']);
$voter_delete_query = "DELETE FROM voters WHERE voter_id = $delete_voter_id;";
mysqli_query($db_connect, $voter_delete_query);
header('location:view_voter.php');

?>
