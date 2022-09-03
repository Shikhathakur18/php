<?php
if (isset($_POST['submit'])) {
session_start();
$error=array();
$email=array();
$username=$_POST['email'];
$password=$_POST['pass'];

if (isset($_POST['email']) && empty($_POST['email'])) {
    $error['email']="username required.";
}
else {
    $email = ($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error['email'] = "Invalid username";
    }
}

if(isset($_POST['pass']) && empty($_POST['pass'])) {
    $error['pass']="password required.";
}

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password)<8) {
    $error['pass']="Enter 1 Uppercase,lowercase,numbers,special chars";
}


foreach($_SESSION['User'] as $key=>$values) {
            
    if($username == $_SESSION['User'][$key]['email'] && $password == $_SESSION['User'][$key]['pass'])
        {
            header('location:datalisting.php');
         }
        else
        {
            header('location:loginpage.php');
        }
       
    }

if(!empty($error)) {
    $_SESSION['error']=$error;
   
    header("location:loginpage.php");
} 

else {
    if(!empty($_SESSION['error'])) {
        unset($_SESSION['error']);
    }
}
}
?>
