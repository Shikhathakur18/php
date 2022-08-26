<?php
$units=170;
$cost1=3.50;
$cost2=4.00;
$cost3=5.20;
$cost4=6.50;

if($units<=50)
{
    $bill=$units*$cost1;
}
elseif($units>50 && $units<=150)
{
    $units_left=$units-50;
    $bill=($units_left*$cost2)+(50*$cost1);
    echo $bill;
}
elseif($units>150 && $units<=250)
{
    $units_left=$units-150;
    $bill=($units_left*$cost3)+(100*$cost2)+(50*$cost1);
    echo $bill;
}
elseif($units>250)
{
    $units_left=$units-250;
    $bill=($units_left*$cost4)+(100*$cost3)+(100*$cost2)+(50*$cost1);
    echo $bill;
}
else{
    echo "No Bills";
}
?>
