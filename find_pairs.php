<?php
function getPairs($array, $length_1){
    $pairs = 0; 
    $counter = 1;
    for ($i=0; $i < $length_1; $i++) {  
        for ($j=$i + 1; $j < $length_1 ; $j++) { 
            if ($array[$i] == $array[$j]) {
                $counter += 1;
                if ($j <= $length_1) {
                   $pairs = $counter / 4 ;
                } 
            }                
        }   
    }
    return  round( $pairs, 0, PHP_ROUND_HALF_UP);
}

$array = array(10 ,20 ,20 ,10, 10 ,30 ,50 ,10 ,20);
$length_1 = count($array);

 $is= getPairs($array, $length_1);
 echo ' Number of pairs are: '. $is;



 
// $array = array(10 ,20 ,20 ,10, 10 ,30 ,50 ,10 ,20);
//$array = array(1, 1, 3, 1, 2, 1, 3, 3, 3, 3);