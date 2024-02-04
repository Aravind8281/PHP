<?php
$fruits=array();
$fruits=["apple","banana","pineapple"];
print_r($fruits);
$fruits[]="mango";
print_r($fruits);
$fruits[0]="Guava";
print_r($fruits);
$len=count($fruits);
echo $len;
$mergearray=array("Watermelon","tomato");
$combine=array_merge($fruits,$mergearray);
print_r($combine);

foreach($fruits as $fruit){
    echo $fruit."  ";
}

$index=array_search("mango",$fruits);
echo $index;
