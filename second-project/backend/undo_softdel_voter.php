<?php

$undo_softdel_voter_id = $_GET['undo_softdel_voter_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
$voter_undo_query = "UPDATE voters SET delete_status='0' WHERE voter_id = $undo_softdel_voter_id;";
mysqli_query($db_connect, $voter_undo_query);
header('location:softdel_voter_list.php');

?>
