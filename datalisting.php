</head>

<body>
    <h2>USER'S DATA</h2>
    <table>
        <tr>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>ID</th>
        </tr>
        <tr>
           <?php
            foreach($_SESSION['User'] as $key=>$values)
            {
                echo "<tr>";
               if($_SESSION['User'])
               {
            ?>
               <td><?php echo $_SESSION['User'][$key]['fname'] ?></td>
               <td><?php echo $_SESSION['User'][$key]['lname'] ?></td>
               <td><?php echo $_SESSION['User'][$key]['email'] ?></td>
               <td><?php echo $_SESSION['User'][$key]['id'] ?></td>
               
            <?php              
            }
            }
            ?>
        </tr>
    </table>
    <br><br>
    <a href="loginpage.php">back to login page</a>
</body>
</html>
