<?php
session_start();

require('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$depertment = $_POST['depertment'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$hash_password = password_hash($password, PASSWORD_DEFAULT);
date_default_timezone_set('Asia/Dhaka');
$date = date('y-m-d h:i:sa');

if (empty($name)) {
    $_SESSION['name'] = 'Name fild is required';
    header('location:registation.php');
} else if (empty($email)) {
    $_SESSION['email'] = 'EmaIL fild is required';
    header('location:registation.php');
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email'] = 'Email Format invalid';
    header('location:registation.php');
} else if (empty($phone)) {
    $_SESSION['phone'] = 'Phone fild is required';
    header('location:registation.php');
} else if (empty($depertment)) {
    $_SESSION['depertment'] = 'Depertment fild is required';
    header('location:registation.php');
} else if (empty($gender)) {
    $_SESSION['gender'] = 'Gender fild is required';
    header('location:registation.php');
} else if (empty($password)) {
    $_SESSION['password'] = 'Password fild is required';
    header('location:registation.php');
} else {


    //select query
    $select_email = "SELECT COUNT(*) as email_exist FROM user WHERE email='$email'";
    $select_relust = mysqli_query($db_connect, $select_email);
    $singel_email = mysqli_fetch_assoc($select_relust);

    if ($singel_email['email_exist'] == 1) {
        $_SESSION['email'] = 'Email Already Exists!';
        header('location:registation.php');
    } else {
        $insert_data = "INSERT INTO user (name,email,phone,depertment,gender,password,created_at)VALUES('$name','$email','$phone','$depertment','$gender','$hash_password','$date')";
        $isert_result = mysqli_query($db_connect, $insert_data);
        $_SESSION['success'] = 'Data Insert Successfully';
        header('location:registation.php');
    }
}
