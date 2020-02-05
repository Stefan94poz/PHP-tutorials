<?php 



    
$array = array(1, 2, 3, 4, 5);
$length = count($array);
$back = $length - 1;

$n = 1;
for ($i = 0; $i < count($array); $i++) {   
    print($array[$i] . " ");   
}  

for ($i = 0; $i < $n; $i++){  
    //Stores the first element of the array  
    $first = $array[0];  
      
    for($j = 0; $j < count($array)-1; $j++){  
        //Shift element of array by one  
        $array[$j] = $array[$j+1];  
    }  
    //First element of array will be added to the end  
    $array[$j] = $first;  
}
print("<br>");  
   
//Displays resulting array after rotation  
print("Array after left rotation: <br>");  
for ($i = 0; $i < count($array); $i++) {   
    print($array[$i] . " ");   
}        



