<?php
$age = 18;
if ($age >= 19){
    echo "you're 19";
}elseif($age == 18){
    echo "you're 18";
}else {
    echo "you're not 19";
};
// $time = date('F j, Y, g:i a');
$time = date(' F j, Y, g:ia ');
echo $time;

$post = ['james'];
if (!empty($post)){
    echo "post is empty";
}else {
    echo "post is not empty";
}

//ternary operator
$age = ['19'];
echo !empty($age) ? " age is not empty" : " age is empty";
// if you dont have an else 
echo !empty($age) ?? " age is not empty";

// switch statement
$color = 'orange';
switch($color){
    case 'red':
        echo "color is red";
        break;
    case 'blue':
        echo "color is blue";
        break;
    default:
        echo "color is not red or blue";
}
?>