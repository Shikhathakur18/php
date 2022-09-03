<?php
if(!empty($_POST['submit']))
{
session_start();
$error=array();
$email=array();
$password=($_POST['pass']);

if(isset($_POST['fname']) && empty($_POST['fname'])) {
       
    $error['fname'] = "This field is required.";
}
 
if(isset($_POST['lname']) && empty($_POST['lname'])) {

        $error['lname'] = "This field is required.";
}

if(isset($_POST['email']) && empty($_POST['email'])) {

        $error['email']="This field is required.";
}
else {
    $email = ($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error['email'] = "Invalid email format";
    }
}

if(isset($_POST['pass']) && empty($_POST['pass'])) {

    $error['pass']="This field is required.";
}

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password)<8) {
    $error['pass']="Enter password again";
}

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
    echo "User  created sucessfully";
    header('location:loginpage.php');
}
}
?>
