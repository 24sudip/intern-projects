<?php

$softdel_prarthi_id = $_GET['softdel_prarthi_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
$prarthi_soft_delete_query = "UPDATE prarthis SET delete_status='1' WHERE prarthi_id = $softdel_prarthi_id;";
mysqli_query($db_connect, $prarthi_soft_delete_query);
header('location:view_prarthi.php');

?>
