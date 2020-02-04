<?php 

$myArray = array(
    array( 1, 2, 3, 8 ),
    array( 4, 3, 5, 7 ),
    array( 1, 2, 2, 6 )
  );

$length = count($myArray);

for ($i=0; $i < $length; $i++) { 
    for ($j=0; $j < count($myArray[$i]); $j++) { 
        echo $myArray[$i][$j] . " " ;
    }
    echo '<br><br>';
}

