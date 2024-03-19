<?php

$delete_prarthi_id = $_GET['delete_prarthi_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
$prarthi_details_query = "SELECT * FROM prarthis WHERE prarthi_id = $delete_prarthi_id;";
$after_prarthis_query = mysqli_query($db_connect, $prarthi_details_query);
$after_prarthis_assoc = mysqli_fetch_assoc($after_prarthis_query);

unlink("../asset/upload/protik_photos/".$after_prarthis_assoc['protik_photo']);
$prarthi_delete_query = "DELETE FROM prarthis WHERE prarthi_id = $delete_prarthi_id;";
$prarthi_delete_final = mysqli_query($db_connect, $prarthi_delete_query);
header('location:view_prarthi.php');

?>
