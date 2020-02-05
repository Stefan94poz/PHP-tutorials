<?php 



    
$array = array(1, 2, 3, 4);
$length = count($array);
for ($i=0; $i < $length ; $i++) { 
    for ($j= $length; $j > $length ; $j--) { 
        $array[$i] = $array[$j];
    }
}
print_r($array);


