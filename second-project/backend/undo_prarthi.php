<?php

$undo_prarthi_id = $_GET['undo_prarthi_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
$prarthi_undo_query = "UPDATE prarthis SET delete_status='0' WHERE prarthi_id = $undo_prarthi_id;";
mysqli_query($db_connect, $prarthi_undo_query);
header('location:view_prarthi.php');

?>
