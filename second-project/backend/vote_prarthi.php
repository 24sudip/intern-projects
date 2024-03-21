<?php
session_start();
$vote_prarthi_id = $_GET['vote_prarthi_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
$prarthi_details_query = "SELECT * FROM prarthis WHERE prarthi_id = $vote_prarthi_id;";
$after_prarthis_query = mysqli_query($db_connect, $prarthi_details_query);
$after_prarthis_assoc = mysqli_fetch_assoc($after_prarthis_query);
$value = $after_prarthis_assoc['gotten_vote'];
$value++;

$prarthi_update_query = "UPDATE prarthis SET gotten_vote='$value' WHERE prarthi_id='$vote_prarthi_id';";
mysqli_query($db_connect, $prarthi_update_query);

$voter_id = $_SESSION['voter_login_id'];
$voter_update_query = "UPDATE voters SET given_vote='yes' WHERE voter_id='$voter_id';";
mysqli_query($db_connect, $voter_update_query);

header('location:voter_dashboard.php');

?>
