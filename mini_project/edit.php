<?php
session_start();
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
}
} 

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit php</title>
</head>
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
<body>
<h2>Edit</h2>
    <form action="" method="post" >
        <label for=FirstName>FIRST NAME:</label>
        <input type="text"  name="fname" value= <?php echo $val['fname'] ?? null; ?> > <br><br>
        
        <label for=LastName>LAST NAME:</label>
        <input type="text"  name="lname" value= <?php echo $val['lname'] ?? null; ?> > <br><br>
        
        <label for=Email>E- MAIL ID  :</label>
        <input type="text" name="email" value= <?php echo $val['email'] ?? null; ?> ><br><br>
        
        <label for=password>PASSWORD:</label>
        <input type="password" name="pass" value =<?php echo $val['pass'] ?? null; ?> ><br><br>
        <input type="submit" id="submit" name="submit" value="submit"/>
        <?php
       if(isset($_POST['submit']))
       {
          foreach($_SESSION['User'] as $key=>$values) 
          {
            if($_SESSION['User'][$key]['id']==$id)
            {
                $_SESSION['User'][$key]=$_POST;
                $_SESSION['User'][$key]['id']==$val;
                 header('location:datalisting.php');
            }
          }
        }
       ?>
    </form>
</body>
</html>
