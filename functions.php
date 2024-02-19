<?php
// to use a variable outside a function you have to use the global keyword
$y = 10;
function registerUsers($username){
    global $y;
    echo "registering users $username";
    echo $y;
};
registerUsers('james');
function sum ($n1, $n2){
    return $n1 + $n2;
};
echo sum(4, 18);

//anonymous functions
$greet = function($name){
    echo "hello $name";
};
echo $greet('james');

//arrow functions
$greet = fn($name) => "hello $name";
echo $greet('james');
?>