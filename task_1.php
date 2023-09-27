<?php

$text = "The quick brown fox jumps over the lazy dog.";

function convert($txt){
    $oldstring = strtolower($txt);

    $newstring = str_replace('brown','red',$oldstring);
    return $newstring;
}


echo convert($text);