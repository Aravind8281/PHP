<?php
$arr=array(1,2,3,4,5);
$max=$arr[0];
for($i=0;$i<count($arr);$i++){
    if($arr[$i]>$max){
        $max=$arr[$i];
    }
}
echo $max;
