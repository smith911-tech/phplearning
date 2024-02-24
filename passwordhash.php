<?php
var_dump($_SERVER["REQUEST_URI"]);
$pass = "123456";
$email = "wj11@gmail.com";
$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "<br>";
if(password_verify("james", $hash) || $email === "wj11@gmail.com"){
    echo "true";
}else{
    echo "false";
}
