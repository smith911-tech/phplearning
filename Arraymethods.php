<?php
$fruits = ['mango', 'orange', 'apple'];

//get length 
echo count($fruits);

//search array 
var_dump(in_array('apple', $fruits));

//add to an array 
$fruits[] = "mango";
//another way
array_push($fruits, 'pear');

//add to the beginning 
array_unshift($fruits, 'blueberry');

// remove array from the back 
// array_pop($fruits);

//remove from the beginning
// array_shift($fruits);

//to remove a particular array
// unset($fruits[2]);

//to chuck an array, on the example i'll make it 2 by 2 note must be inside variable 
$chunked = array_chunk($fruits, 2);

print_r($chunked);
print_r($fruits);

$number = ['1','2','3','4','5'];

$food = ['beans', 'rice'];

//joining arrays
$added = array_merge($fruits, $number);
print_r($added);
// another way 
$added2 = [...$fruits, ...$food];
print_r($added2);

//this is for making the first array key then the value  note they must be same length
$a = ['a','b','c','d','e'];
$b = [1,2,3,4,5];
$combined = array_combine($a, $b);
print_r($combined);

//to put the above keys inside an array and make them a value 
 $keys = array_keys($combined);
 print_r($keys);

 //to make what was the keys values and what was the values keys
 $flipped = array_flip($combined);
 print_r($flipped);

 //range of numbers 
 $num = range(1, 10);
 print_r($num);
 
//  map method 
 $map = array_map(function($num) {
    return "Number $num";
 }, $num);
 print_r($map);

 //filter method 
 $filter = array_filter($num, fn($number) => $number <= 5 );
 print_r($filter);

 //reduce method 
 $sum = array_reduce($num, fn($carry, $num) =>  $carry + $num);
 var_dump($sum)
?>