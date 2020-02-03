<?php 

$myArray = array(
    array( 1, 2, 3 ),
    array( 4, 3, 5 ),
    array( 1, 2, 2 )
  );

$length = count($myArray);
$i = 0;
for ($i=0; $i < $length - 1 ; $i++) { 
    for ($j=0; $j < $myArray[i]; $j++) { 
        echo $myArray[i][j];
    }
}

