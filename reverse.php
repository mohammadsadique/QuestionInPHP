<?php

$data = "abcd";
$trimData = trim($data);
$array = str_split($trimData);
$len = strlen($trimData);
$i = 1;
while($len >= $i){
    $indexVal = $len - $i;
    echo $array[$indexVal];
    $i++;
}