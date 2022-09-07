<?php
if(isset($_GET['id'])) {
global $id;
$id=$_GET['id'];
session_start();
foreach($_SESSION['User'] as $key=>$values) {
            
    if($values['id']==$id)
    {
       unset($_SESSION['User'][$key]);
       header('location:todolist.php');
    }
}
}
?>
