<?php
            $dsn = "mysql:host=localhost; dbname=product";
            $username = "root";
            $password = "";

            try{
                $db = new PDO($dsn, $username, $password);
                echo "connecting succefull";
            }catch (PDOException $e){
                die("connecting error". $e->getMessage()); 
            }

?>