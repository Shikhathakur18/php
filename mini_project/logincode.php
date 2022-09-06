<?php
include "validate.php";
if (isset($_POST['submit'])) {
session_start();
$error=array();
$email=array();
$username=$_POST['email'];
$password=$_POST['pass'];

echo email_validation($_POST['email']);
echo password_validation($_POST['pass']);

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
