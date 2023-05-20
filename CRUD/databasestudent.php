<?php
$dsn = "mysql:host=localhost;dbname=students";
$username = "root";
$password = "";
try{
    $db = new PDO($dsn, $username, $password);
}catch(PDOException $e){
    echo "error connecting" . $e->getMessage();
}
 ?>