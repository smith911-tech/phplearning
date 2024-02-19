<?php
//for loop 

//for (initialization; condition; increment/decrement)
// {
    //code to be executed
// }
for ($i = 0; $i < 10; $i++){
    echo $i;
};
echo "<br>";
//while loop
// while (condition){
    //code to be executed   
// }    
$x = 0;
while ($x < 5){
    echo $x;
    $x++;
};

echo "<br>";
// do while loop
// do {
 //   code to be executed
// } while (condition)
 
$y = 0;
do {
    echo $y;
    $y++;
} while ($y < 5);

echo "<br>";
//foreach loop
// foreach ($array as $value){
    //code to be executed
// }
$fruits = ['apple', 'banana', 'orange', 'mango', 'grapes'];
foreach ($fruits as $fruit){
    echo "$fruit <br>";
};
?>

