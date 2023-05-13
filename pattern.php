<?php


$i = 1;
$j = 6;
$pattern = '';
while($j > $i){
    $k = 0;
    while($i > $k){
        $pattern .= "*";
        $k++;
    }
    $pattern .= ' <br>';
    $i++;

}

echo $pattern;

?>