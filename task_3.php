<?php

$grades = [85,92,78,88,95];

 

function reverse(&$grades){
    rsort($grades);
}
reverse($grades);

print_r($grades);