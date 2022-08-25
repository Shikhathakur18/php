<?php
function grades($marks){
    switch($marks){
        case $marks>=60:
            echo "First Division";
            break;
       case $marks>45 && $marks<59:
            echo"Second Division";
            break;
        case $marks>33 && $marks<44:
            echo"Third Division";
            break; 
        default:
        echo"fail";
    }
}
grades(50);
?>
