<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>LIST</title>
<style>
body {
background-color:#rgb(8,8,8);
    }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:lightpink;
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
    padding:0px;
    width:90%;
    border:0px solid;
    background-color:black;
    margin-left:auto;
    margin-right:auto;
    }
        
td,th
    {
    height:40px;
    width:30px;
    border:0px solid;
    text-align:center;
    background-color:lightyellow;
    font-size:large;
    }

    td:nth-child(2) {
      background-color:yellow;
    }
    td:nth-child(3) {
        background-color:green;
    }

    td:nth-child(4) {
      background-color:red;
    }

    h2
    {
    text-align:center;
    background-color:grey;
    padding:10px;
    }
    footer {
        text-align:center;
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
<h2>LIST</h2>
  <table>
    <tr>
      <th>Title</th>
      <th>VIEW</th>
      <th>EDIT</th>
      <th>DELETE</th>
    </tr>
    <tr>
      <?php
      global $id;
    foreach($_SESSION['User'] as $key=>$values) {
        echo "<tr>";
        if($_SESSION['User']) {
      ?>
          <td><?php echo $_SESSION['User'][$key]['title'] ?></td>
          <td><?php echo"<a href=\"view.php?id=".$values['id']."\">View</a>"?></td>
          <td><?php echo"<a href=\"edit.php?id=".$values['id']."\">Edit</a>"?></td>
          <td><?php echo"<a href=\"delete.php?id=".$values['id']."\">Delete</a>"?></td>
        <?php              
        }
        print_r($_SESSION['User']);die;
      }
        ?>
    </tr>
  </table>
    <br><br>
    <a href="index.php">Add</a>
    
    <footer>
        <a href="#">About Us</a>|
        <a href="#">Home</a>|
        <a href="#">Contact Us</a>
        <p>shikhain1998@gmail.com, Some rights reserved</p>
    </footer>
     
</body>
</html>
