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
            background-image:url('register.jpg');
            background-size: cover;
            margin:70px;
            text-align: center;
            font-size:x-large;
            font-family:Arial, sans-serif;
        }

        h2 {
            background-color:lightpink;
        }

        input#submit {
            background-color:lightpink;
            color:black;
            padding:10px 40px;
            border: 60% solid #111;
            font-size:large;
        }

       input#submit:hover {
           background-color:skyblue;
           color:black;
           border: 60% solid #111;
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
        <label for=password>PASSWORD:</label>
        <input type="password" placeholder="password" name="pass"/><br><br>
        <?php
            if (!empty($_SESSION['error']['pass'])) {
                echo $_SESSION['error']['pass'];
            } 
        ?>
        <input type="checkbox" name="remember me">Remember me</input><br><br>
        <input type="submit" id="submit" name="submit" value="login"/><br><br>
        <p>Don't have an account? <a href="register.php">signup</a></p>
    </form>
</body>
</html>
