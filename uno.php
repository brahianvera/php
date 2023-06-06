<?php 
    $myArray = array(13,40,35,35,50);
    $higher_num = 0;
    foreach($myArray as $value) {
        if($value > $higher_num){
            $higher_num = $value;
        }
    }
    echo($higher_num);