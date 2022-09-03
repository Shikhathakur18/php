<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>User Data</title>
<style>
body {
background-color:#rgb(8,8,8);
    }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:green;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 17px 30px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color:black;
}

table 
    {
    padding:0.5px;
    width:100%;
    border:1px solid;
    background-color:black;
    }
        
td,th
    {
    height:40px;
    width:30px;
    border:0.5px solid;
    text-align:center;
    background-color:#D6EEEE;
    font-size:large;
    }

    h2
    {
    text-align:center;
    background-color:lightgreen;
    padding:10px;
    }
    footer {
        text-align:center;
        background-color:lightgreen;

    }
    
</style>    
</head>

<body>
<ul>
  <li><a href="#Home">Home</a></li>
  <li><a href="#About Us">About Us</a></li>
  <li><a href="#Contact">Contact</a></li>
  <li style="float:right"><a class="active" href="#about">LOGOUT</a></li>
</ul>
<h2>USER'S DATA</h2>
  <table>
    <tr>
      <th>FIRST NAME</th>
      <th>LAST NAME</th>
      <th>EMAIL</th>
      <th>PASSWORD</th>
      <th>ID</th>
      <th>EDIT</th>
      <th>DELETE</th>
    </tr>
    <tr>
      <?php
        foreach($_SESSION['User'] as $key=>$values) {
          echo "<tr>";
          if($_SESSION['User']) {
      ?>
          <td><?php echo $_SESSION['User'][$key]['fname'] ?></td>
          <td><?php echo $_SESSION['User'][$key]['lname'] ?></td>
          <td><?php echo $_SESSION['User'][$key]['email'] ?></td>
          <td><?php echo $_SESSION['User'][$key]['pass'] ?></td>
          <td><?php echo $_SESSION['User'][$key]['id'] ?></td>
          <td><?php echo"<a href=\"edit.php?id=".$_SESSION['User'][$key]['id']."\">Edit</a>"?></td>
          <td><?php echo"<a href=\"delete.php?id=".$_SESSION['User'][$key]['id']."\">Delete</a>"?></td>
          
          <?php              
          }
        }
          ?>
    </tr>
  </table>
    <br><br>
    <footer>
        <a href="#">About Us</a>|
        <a href="#">Home</a>|
        <a href="#">Contact Us</a>
        <p>@shikhain1998@gmail.com, Some rights reserved</p>
    </footer>
    <a href="loginpage.php">back to login page</a>
</body>
</html>
