<?php
session_start();
$name = $_POST['name'];
$protik_name = $_POST['protik_name'];
$election_zila = $_POST['election_zila'];
$flag = false;

if ($name) {
    $_SESSION['old_name'] = $name;
} else {
    $_SESSION['name_error'] = "Name Is Required";
    $flag = true;
}

if ($protik_name) {
    $_SESSION['old_protik_name'] = $protik_name;
} else {
    $_SESSION['protik_name_error'] = "Marka Is Required";
    $flag = true;
}

if ($election_zila) {
    $_SESSION['old_election_zila'] = $election_zila;
} else {
    $_SESSION['election_zila_error'] = "Election Zila Is Required";
    $flag = true;
}

if (!$_FILES['protik_photo']['name']) {
    $_SESSION['protik_photo_error'] = "Protik Photo Is Required";
    $flag = true;
}

if ($flag == true) {
    header('location: prarthi_register.php');
} else {
    $db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
    $prarthi_insert_query = "INSERT INTO prarthis (name, protik_name, election_zila, gotten_vote) VALUES ('$name','$protik_name', '$election_zila', '0')";
    $prarthi_insert_final = mysqli_query($db_connect, $prarthi_insert_query);

    $protik_photo_id = mysqli_insert_id($db_connect);
    $photo_name = $_FILES['protik_photo']['name'];
    $after_explode = explode('.', $photo_name);
    $file_name_extension = end($after_explode);
    $new_name = $protik_name.".".$file_name_extension;
    $old_location = $_FILES['protik_photo']['tmp_name'];
    $new_location = "../asset/upload/protik_photos/".$new_name;
    move_uploaded_file($old_location, $new_location);
    
    $protik_photo_update_query = "UPDATE prarthis SET protik_photo='$new_name' WHERE prarthi_id=$protik_photo_id;";
    $prarthi_update_final = mysqli_query($db_connect, $protik_photo_update_query);
    $_SESSION['prarthi_register_success'] = "Prarthi Registered Successfully";
    header('location: prarthi_register.php');
}

?>
