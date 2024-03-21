<?php
session_start();
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$zila = $_POST['zila'];
$upzila = $_POST['upzila'];
$gender = $_POST['gender'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
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

if ($upzila) {
    $_SESSION['old_upzila'] = $upzila;
} else {
    $_SESSION['upzila_error'] = "Upzila Is Required";
    $flag = true;
}

if ($gender) {
    $_SESSION['old_gender'] = $gender;
} else {
    $_SESSION['gender_error'] = "Gender Is Required";
    $flag = true;
}

if ($phone_number) {
    $_SESSION['old_phone_number'] = $phone_number;
} else {
    $_SESSION['phone_number_error'] = "Phone Number Is Required";
    $flag = true;
}

if ($email) {
    $_SESSION['old_email'] = $email;
} else {
    $_SESSION['email_error'] = "email Is Required";
    $flag = true;
}

if (!$_FILES['voter_photo']['name']) {
    $_SESSION['voter_photo_error'] = "Voter Photo Is Required";
    $flag = true;
}

if ($flag == true) {
    header('location: voter_register.php');
} else {
    $db_connect = mysqli_connect('localhost', 'root', '', 'second_project');
    $phone_confirm_query = "SELECT COUNT(*) AS result FROM voters WHERE phone_number='$phone_number'";
    $after_phone_query = mysqli_query($db_connect, $phone_confirm_query);
    $after_phone_assoc = mysqli_fetch_assoc($after_phone_query);
    if ($after_phone_assoc['result'] == 1) {
        $_SESSION['phone_match_error'] = "This Phone Number Has Already Been Taken. Please Use Another One";
        header('location: voter_register.php');
    } else {
        # code...
        $voter_insert_query = "INSERT INTO voters (name, father_name, mother_name, date_of_birth, address, zila, upzila, gender, phone_number, email, given_vote, delete_status) VALUES ('$name','$father_name','$mother_name','$date_of_birth','$address','$zila','$upzila','$gender','$phone_number','$email','no','0')";
        $voter_insert_final = mysqli_query($db_connect, $voter_insert_query);
    
        $voter_photo_id = mysqli_insert_id($db_connect);
        $photo_name = $_FILES['voter_photo']['name'];
        $after_explode = explode('.', $photo_name);
        $file_name_extension = end($after_explode);
        $new_name = $voter_photo_id.".".$file_name_extension;
        $old_location = $_FILES['voter_photo']['tmp_name'];
        $new_location = "asset/upload/voter_photos/".$new_name;
        move_uploaded_file($old_location, $new_location);
        
        $voter_photo_update_query = "UPDATE voters SET voter_photo='$new_name' WHERE voter_id=$voter_photo_id;";
        $voter_update_final = mysqli_query($db_connect, $voter_photo_update_query);
        $_SESSION['voter_register_success'] = "$name Registered Successfully";
        $_SESSION['voter_register_name'] = $name;
        $_SESSION['voter_register_phone_number'] = $phone_number;
        header('location: voter_login.php');
    }
}

?>
