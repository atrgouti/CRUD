<?php
try{
    $dsn = 'mysql:host=localhost;dbname=ecomerce';
    $username = "root";
    $password = "";
    $cone = new PDO($dsn, $username, $password);
}catch(PDOExecption $e){
    echo"something went wrong" . $e.getmessage();
}

?>