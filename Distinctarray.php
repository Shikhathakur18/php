<?php
$num=array(1,6,10,57,23,10,45,57,16,23,88);
function distinct($num)
{
    for($x=0; $x<count($num); $x++)
    {
        for($y=0; $y<$x; $y++)
        {
            if($num[$x]==$num[$y]){
                break;
            }
        }
            
        if($x==$y){
            echo $num[$x].""."<br>";
        }
    }
}
distinct($num);
?>
