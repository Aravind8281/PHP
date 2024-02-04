<?php
$fruit=" Apple ";
echo strtolower($fruit);
echo strtoupper($fruit);
echo trim($fruit);
echo strcmp($fruit,"Apple");
$array="hello how are you";
$split=str_split($array);
foreach($split as $a){
    echo $a." ";
}
