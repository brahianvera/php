<?php 
$n = 20;
$x_shape = [];
for($row = 0; $row <= $n; $row++){
    $str_row = "";
    for($colum = 0; $colum <= $n; $colum++){
        if($row ===  $colum){
            $str_row .= "X";
            continue;
        }
        if(($row+$colum) == $n){
            $str_row .= "X";
            continue;
        }
        $str_row .= "_";
    }
    array_push($x_shape,$str_row);
}
echo join("\n",$x_shape);
?>