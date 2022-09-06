<?php
include "validate.php";
if(!empty($_POST['submit']))
{
session_start();
$error=array();
$email=$_POST['email'];
$password=($_POST['pass']);

echo email_validation($_POST['email']);
echo password_validation($_POST['pass']);
echo fname_validation($_POST['fname']);
echo lname_validation($_POST['lname']);

if(!empty($error)) {

    $_SESSION['error'] = $error;
    header('location:register.php');
}
else {

    if (!empty($_SESSION['error'])) {
        unset($_SESSION['error']);
    }

    $user_count = isset($_SESSION['User'])? count($_SESSION['User']): 0;
    $_POST['id'] = $user_count+1;
    $_SESSION['User'][] = $_POST;
    print "<pre>";
    print_r($_SESSION['User']);
    print "</pre>";
    echo "User created sucessfully";
    header('location:loginpage.php');
}
}
?>
