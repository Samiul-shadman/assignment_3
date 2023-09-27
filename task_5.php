<?php


function generatePassword($length){
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    
    $charLength = strlen($chars);
    
    for ($i=0 ; $i<$length ; $i++){
        $randomKey = mt_rand(0, $charLength-1);
        $password .= $chars[$randomKey];
    }
    return $password;
}

$password = generatePassword(12);

echo "Password : ".$password;




