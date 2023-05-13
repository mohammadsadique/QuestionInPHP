<?php


$data = [10,5,3,55,6,7,88,1];

$count = count($data);
$i = 0;
$finalData = '';
while($count > $i){

    $a = $data[0];
    $b = $data[$i];
    if($a >= $b){
        $finalData .= $b.','; 
    }
    //    $j = 0;   
    //    while($count > $j){
    //     echo $data[$i].'-'.$j.'<br>';



    //     $j++;
    //    }


    $i++;
}