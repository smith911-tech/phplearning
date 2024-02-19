<?php
//first way of creating an array 
$numbers = [1,2,3,4,5];
//second way of creating an array
$fruits = array('apple', 'banana', 'orange', 'mango', 'grapes');
echo implode(', ', $fruits);

// to print one content from the array 
echo $numbers[3];
echo $fruits[2];

// Associative arrays
$colors = [
    1 => "red",
    2 => 4,
    3 => "blue", 
    //we can use string as keys
    "four" => "green"   
];

echo $colors["four"], $colors[3];

//multidimensional arrays
$students = [
    [
    'first_name' => "james", 
    'age' => 19,
   ], 
    [
    'first_name' => "jane",
    'age' => 20,
]
    ];
    echo $students[0]['first_name'];
    // we have the json encode and decode when outputting the arrays
?>