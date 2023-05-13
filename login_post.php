<?php
session_start();

require('db.php');




$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email)) {
    $_SESSION['login_error'] = 'username or email fild is required!';
    header('location:login.php');
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['login_error'] = 'Email Format Invalid!';
    header('location:login.php');
}
if (empty($password)) {
    $_SESSION['pass_error'] = 'passoword fild is required!';
    header('location:login.php');
} else {

    $select_email = "SELECT COUNT(*) as email_exists FROM user WHERE email='$email'";
    $select_result = mysqli_query($db_connect, $select_email);
    $singe_email = mysqli_fetch_assoc($select_result);

    if ($singe_email['email_exists']) {
        $select_email2 = "SELECT * FROM user WHERE email='$email'";
        $select_result2 = mysqli_query($db_connect, $select_email2);
        $singe_email2 = mysqli_fetch_assoc($select_result2);

        if (password_verify($password,  $singe_email2['password'])) {
            $_SESSION['success'] = "success";
            header('location:dashboard.php');
        } else {
            $_SESSION['pass_error'] = 'Invalid Password';
            header('location:login.php');
        }
    } else {
        $_SESSION['login_error'] = 'Email Not Registerd!';
        header('location:login.php');
    }
}
