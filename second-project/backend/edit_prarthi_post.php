<?php
session_start();
$edit_id = $_POST['edit_id'];
$name = $_POST['name'];
$protik_name = $_POST['protik_name'];
$election_zila = $_POST['election_zila'];
$edit_protik_photo = $_SESSION['edit_protik_photo'];

$db_connect = mysqli_connect('localhost', 'root', '', 'second_project');

$prarthi_update_query = "UPDATE prarthis SET name='$name', protik_name='$protik_name', election_zila='$election_zila' WHERE prarthi_id='$edit_id';";
mysqli_query($db_connect, $prarthi_update_query);
if ($_FILES['protik_photo']['name']) {
    unlink("../asset/upload/protik_photos/".$edit_protik_photo);
    $protik_photo_id = $_POST['edit_id'];
    $photo_name = $_FILES['protik_photo']['name'];
    $after_explode = explode('.', $photo_name);
    $file_name_extension = end($after_explode);
    $new_name = $protik_photo_id.".".$file_name_extension;
    $old_location = $_FILES['protik_photo']['tmp_name'];
    $new_location = "../asset/upload/protik_photos/".$new_name;
    move_uploaded_file($old_location, $new_location);
    
    $protik_photo_update_query = "UPDATE prarthis SET protik_photo='$new_name' WHERE prarthi_id=$protik_photo_id;";
    mysqli_query($db_connect, $protik_photo_update_query);
}
$_SESSION['prarthi_edit_success'] = "Prarthi Updated Successfully";
header('location: view_prarthi.php');

?>
