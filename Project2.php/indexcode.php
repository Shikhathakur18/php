<?php
include "validation.php";
global $id;
if(isset($_POST['submit'])) {
session_start();
$error=array();
$title=$error['title'];
$description=$error['description'];

echo title_validation($_POST['title']);
echo desc_validation($_POST['description']);

foreach($_SESSION['User'] as $key=>$values) {
            
    if($title == $_SESSION['title'] && $description == $_SESSION['description'])
        {
            header('location:todolist.php');
         }
        else
        {
            header('location:index.php');
        }
    }

if(!empty($error)) {
    $_SESSION['error']=$error;
    header("location:index.php");
} 

else {
    if(!empty($_SESSION['error'])) {
        unset($_SESSION['error']);
       
    }

    $user_count = isset($_SESSION['User'])? count($_SESSION['User']): 0;
    $_POST['id'] = $user_count+1;
    $_SESSION['User'][] = $_POST;
    print "<pre>";
    print_r($_SESSION['User']);
    print "</pre>";
    header('location:todolist.php');
}
}
?>
