<?php
$myArray = array(1,2,2,4,5,6,7,8,8,8);
$higNumber = 0;
$hig_key = 0;
$numeros = [];
foreach($myArray as $numero){
    if(isset($numeros[$numero])){
        $numeros[$numero] += 1;
    }else{
        $numeros[$numero] = 1;
    }
}
foreach($numeros as $key => $value){
    if($value > $higNumber){
        $higNumber = $value;
        $hig_key = $key;
    }
}
echo("Longest:".$numeros[$key]."\n");
echo("Number:".$key);