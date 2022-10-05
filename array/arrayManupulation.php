<!-- 

array_shift(); // Remove data from the first of on array. 

array_unshift();// Add data in the first of on array.

array_pop();  // Remove data from the last of on array.

array_push(); // Add data in the last of on array.


*** Array is not immutable | Array is mutable(Modifiable) ***
-->

<?php

$students = [
    "rahim",
    "karim",
    "rony",
    "monir"
];



// Add data in the first of on array.
$newarray = array_unshift($students, "mamun");

// Add data in the last of on array.
$newarray2 = array_push($students, "rashid"); 

// Remove data from the first of on array. 
$newarray3 = array_shift($students); 


// Remove data from the last of on array.
$newarray3 =  array_pop($students);  


for($i = 0; $i < count($students); $i++ ){
    echo $students[$i] . "\n";
}




