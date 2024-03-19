<?php
session_start();
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$zila = $_POST['zila'];
$flag = false;

if ($name) {
    $_SESSION['old_name'] = $name;
} else {
    $_SESSION['name_error'] = "Name Is Required";
    $flag = true;
}

if ($father_name) {
    $_SESSION['old_father_name'] = $father_name;
} else {
    $_SESSION['father_name_error'] = "Father's Name Is Required";
    $flag = true;
}

if ($mother_name) {
    $_SESSION['old_mother_name'] = $mother_name;
} else {
    $_SESSION['mother_name_error'] = "Mother's Name Is Required";
    $flag = true;
}

if ($date_of_birth) {
    $_SESSION['old_date_of_birth'] = $date_of_birth;
} else {
    $_SESSION['date_of_birth_error'] = "Date Of Birth Is Required";
    $flag = true;
}

if ($address) {
    $_SESSION['old_address'] = $address;
} else {
    $_SESSION['address_error'] = "address Is Required";
    $flag = true;
}

if ($zila) {
    $_SESSION['old_zila'] = $zila;
} else {
    $_SESSION['zila_error'] = "Zila Is Required";
    $flag = true;
}

if (!$_FILES['protik_photo']['name']) {
    $_SESSION['protik_photo_error'] = "Protik Photo Is Required";
    $flag = true;
}

if ($flag == true) {
    header('location: voter_register.php');
} else {
    $db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
    $voter_insert_query = "INSERT INTO voters (name, father_name, mother_name, date_of_birth, zila, delete_status) VALUES ('$name','$father_name','$mother_name','$date_of_birth','$zila', '0')";
    $prarthi_insert_final = mysqli_query($db_connect, $voter_insert_query);

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
