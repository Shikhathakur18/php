<?php
$str1="Shikha";
$str2="Kaishh";
//put values of str1 and str2 into $a and $b
$a=$str1;
$b=$str2;
// check the length of the two strings
if(strlen($a)!=strlen($b))
{
    echo"not anagrams";
}
else{
    //converting the strings in the variable into lowercase
    $a=strtolower($a);
    $b=strtolower($b);
    //converting strings in the variable into array
    $a1=str_split($a); 
    $b1=str_split($b);
    //sorting the array
    sort($a1);
    sort($b1);
    //convert array into string
    $a=implode("",$a1);
    $b=implode("",$b1);
    // compare if return true echo anagram
    if(strcmp($a,$b)==0) 
    {
        echo"anagrams";
    }
    else{
        echo"not anagrams";
    }
}
?>
