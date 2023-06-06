
<?php
    $myArray = array(1,2,1,3,3,1,2,1,5,1);
    $higNumber = 0;
    $numeros = [];
    foreach($myArray as $numero){
        if(isset($numeros[$numero])){
            $numeros[$numero] .= "*";
        }else{
            $numeros[$numero] = "*";
        }
        
        if($numero > $higNumber){
            $higNumber = $numero;
        }
    }
    for($i = 1; $i <= $higNumber; $i++){
        if(isset($numeros[$i])){
            echo($i.": ".$numeros[$i]."\n");
        }else{
            echo($i.": "."\n");
        }
    }