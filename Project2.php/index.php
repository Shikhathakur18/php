<?php
session_start();
include "indexcode.php";
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial scale="1.0">
    <title>todo list</title>
<style>
        body {
            background-repeat: no-repeat;
            background-color:lightyellow;
            background-size: cover;
            margin: 50px;
            font-size:x-large;
            text-align:center;
        }
        h2 {
            background-color:green;
        }

        input#submit {
            color:black;
            padding:5px 15px;
            border: 40% solid #111;
            font-size:large;
        }

       input#submit:hover {
           background-color:blue;
           color:black;
           border: 0.5% solid #111;
        }
    </style>
</head>
<body>
    <h2>TO-DO LIST</h2>
    
    <form action="indexcode.php " method="post" >
        <label for=title>TITLE  :</label>
        <input type="text" placeholder="title" name="title"/><br><br>
        <?php
            if (!empty($_SESSION['error']['title'])) {
                echo $_SESSION['error']['title'];
            } 
         ?>
        
        <label for=description>DESC :</label>
        <textarea name="description" placeholder="description" rows="6"></textarea><br><br>
        <?php
            if (!empty($_SESSION['error']['description'])) {
                echo $_SESSION['error']['description'];
            } 
         ?>
       
        <input type="submit" id="submit" name="submit" value="submit"/><br>
    </form>
</body>
</html>
