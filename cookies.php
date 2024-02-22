<?php




setcookie("name", "Joseph", time() + 86400 + 30);

if(isset($_COOKIE['name'])){
    $Name = $_COOKIE['name'];
    echo $Name;
}

//to delete cookie 
setcookie('name', '', time() - 86400);
?>