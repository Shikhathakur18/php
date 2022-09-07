<?php
session_start();
global $id;
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $val=array();

    foreach($_SESSION['User'] as $key=>$values) {
            
    if($id==$values['id'])
    {
        $val=$_SESSION['User'][$key];
        break;
    }
    else {
        header('location:todolist.php');
    }
    }
} 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
</head>
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
<body>
<h2>View</h2>
<form action="" method="post" >
        <label for=title>TITLE :</label>
        <input type="text"  name="title" value= <?php echo $val['title'] ?? null; ?> > <br><br>
        
        <label for=description>DESC :</label>
        <textarea name="description" placeholder="description" rows="6"><?php echo $values['description'] ?? null; ?></textarea><br><br>
</form>
</body>
</html>
