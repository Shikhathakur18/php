<?php
session_start();
include "logincode.php";
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial scale="1.0">
    <title>Login form</title>
    <link rel="icon" type="image/x-icon" href="stu.jpg">
<style>
        body {
            background-repeat: no-repeat;
            background-color: lightgreen;
            background-size: cover;
            margin:60px;
            text-align: center;
            font-size:larger;
        }
        h2 {
            background-color: green;
        }
    </style>
</head>
<body>
    <h2>LOGIN FORM</h2>
    <form action="logincode.php " method="post" >
        <label for=username>USERNAME:</label>
        <input type="text" placeholder="@gmail.com" name="email"/><br><br>
        <?php
            if (!empty($_SESSION['error']['email'])) {
                echo $_SESSION['error']['email'];
            } 
         ?>
        <label for=Password>PASSWORD:</label>
        <input type="Password" placeholder="password" name="pass"/><br><br>
        <?php
            if (!empty($_SESSION['error']['pass'])) {
                echo $_SESSION['error']['pass'];
            } 
        ?>
        <input type="checkbox" name="remember me">Remember me</input><br><br>
        <input type="submit" name="submit" value="login"/><br><br>
        <a href="#">forgot password?</a><br>
    </form>
</body>
</html>
