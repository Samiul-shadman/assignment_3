<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

$filtered =[];
function filter($num){
    foreach($num as $num){
        if($num % 2 != 0){
            $filtered[]=$num;
        }
    }

    return $filtered;
}


$filtered =  filter($numbers);

print_r($filtered);

