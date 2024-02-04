<?php
$str="HolleH";
$lower=strtolower($str);
$ch=str_split($str);
$i=0;
$j=strlen($str)-1;
$flag=true;
while($i<$j){
    if($ch[$i]!=$ch[$j]){
        $flag=false;
    }
    $i++;
    $j--;
}
echo $flag?"Palindrome " : "Not Palindrome";
