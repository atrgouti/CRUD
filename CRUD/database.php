<?php
$dsn = "mysql:host=localhost;dbname=students";
$username = "root";
$password = "";
try{
    $dbcone = new PDO($dsn, $username, $password);
    echo "connected succefully";
}catch(PDOException $e){
    echo "error connecting" . $e->getMessage();
}
 ?>