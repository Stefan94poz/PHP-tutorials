<?php 


$array = array( 1, 2, 3, 2, 3, 8, 8 );
$length_1 = count($array);
function getPairs($array, $length_1){
    $pairs = 0;
    for ($i=0; $i < $length_1; $i++) {  
        for ($j=$i + 1; $j < $length_1 ; $j++) { 
            if ($array[$i] == $array[$j] ) {
                $pairs += 1;  
            }
        }      
    }
    return  $pairs;
}

 $is= getPairs($array, $length_1);
 echo ' Number of pairs are: '. $is;