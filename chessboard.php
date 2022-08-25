<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial scale="1.0">
    <title>Chess Board</title>
    <link rel="icon" type="image/x-icon" href="stu.jpg">

</head>

<body>
<h2>CHESS BOARD</h2>
    <table width="400px" cellspacing="0px" cellpadding="px" border="1px" solid >
        <?php
            for($x=1 ;$x<=8 ;$x++){
                echo"<tr>";
                    for($y=1 ;$y<=8 ;$y++){
                    $a=$x+$y;
                    if($a%2==0){
                        echo"<td height=40px width=30px bgcolor=black></td>";
                        
                    }else{
                        echo"<td height=40px width=30px bgcolor=white></td>";
                    }
                }   
            }    echo"</tr>";
        ?>

    </table>
</body>
</html>
