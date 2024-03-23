<?php
session_start();
$edit_id = $_POST['edit_id'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$zila = $_POST['zila'];
$upzila = $_POST['upzila'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$edit_voter_photo = $_SESSION['edit_voter_photo'];

$db_connect = mysqli_connect('localhost', 'root', '', 'second_project');

if (!$gender) {
    $_SESSION['gender_error'] = "Gender Is Required";
    $_SESSION['again_edit_id'] = $_POST['edit_id'];
    header('location: edit_voter.php');
} else {
    $voter_update_query = "UPDATE voters SET name='$name', father_name='$father_name', mother_name='$mother_name', date_of_birth='$date_of_birth', address='$address', zila='$zila', upzila='$upzila', gender='$gender', email='$email' WHERE voter_id='$edit_id';";
    mysqli_query($db_connect, $voter_update_query);
    if ($_FILES['voter_photo']['name']) {
        unlink("../asset/upload/voter_photos/".$edit_voter_photo);
        $voter_photo_id = $_POST['edit_id'];
        $photo_name = $_FILES['voter_photo']['name'];
        $after_explode = explode('.', $photo_name);
        $file_name_extension = end($after_explode);
        $new_name = $voter_photo_id.".".$file_name_extension;
        $old_location = $_FILES['voter_photo']['tmp_name'];
        $new_location = "../asset/upload/voter_photos/".$new_name;
        move_uploaded_file($old_location, $new_location);
        
        $voter_photo_update_query = "UPDATE voters SET voter_photo='$new_name' WHERE voter_id=$voter_photo_id;";
        mysqli_query($db_connect, $voter_photo_update_query);
    }
    $_SESSION['voter_edit_success'] = "Voter Updated Successfully";
    header('location: view_voter.php');
}

?>
