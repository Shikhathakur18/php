<?php
$a="php stands for hypertext preprocessor";
$count=1;
for($i=0; $i<strlen($a) ;$i++)
{
    if($a[$i]==" ")
    {
        $count++;
    }
}
echo "total words in sentence:"."$count";
?>

