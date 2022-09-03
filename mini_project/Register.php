<?php
session_start();
include "registercode.php";
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial scale="1.0">
    <title>Register form</title>
    <link rel="icon" type="image/x-icon" href="stu.jpg">
<style>
        body {
            background-image: url('register.jpg');
            background-repeat: no-repeat;
            background-color: black;
            background-size: cover;
            margin: 70px;
            font-size:x-large;
            text-align:center;
        }
        h2 {
            background-color:violet;
        }
        input[type=radio] {
            accent-color: green;
        }
        
        input#submit {
            background-color:violet;
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
    <h2>SIGN UP FORM</h2>
    
    <form action="registercode.php " method="post" >
        <label for=FirstName>FIRST NAME:</label>
        <input type="text" placeholder="fname" name="fname"/><br><br>
        <?php
            
            if (!empty($_SESSION['error']['fname'])) {
                echo $_SESSION['error']['fname'];
            } 
         ?>

        <label for=LastName>LAST NAME:</label>
        <input type="text"  placeholder="lname" name="lname"/><br><br>
        <?php
            if (!empty($_SESSION['error']['lname'])) {
                echo $_SESSION['error']['lname'];
            } 
         ?>
         
        <label for=Email>E- MAIL ID   :</label>
        <input type="text" placeholder="gmail.com" name="email"/><br><br>
        <?php
            if (!empty($_SESSION['error']['email'])) {
                echo $_SESSION['error']['email'];
            } 
         ?>
        
        <label for=Password>PASSWORD:</label>
        <input type="password" placeholder="password" name="pass"/><br><br>
        <?php
            if (!empty($_SESSION['error']['pass'])) {
                echo $_SESSION['error']['pass'];
            } 
         ?>
        
        <input type="submit" id="submit" name="submit" value="submit"/><br>
        <p>already have an account? <a href="loginpage.php">login</a></p>
    </form>
</body>
</html>
