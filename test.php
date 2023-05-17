<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=''>
        <thead>
            <tr>
                <td>name</td>
                <td>prenom</td>
                <td>age</td>
                <td>year of birth</td>
            </tr>
        </thead>
        <tbody>
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "test";

            // create a connection
            $conecting = new mysqli($servername, $username, $password, $database);
            if($conecting->connect_error){
                die("conectaing faild" .  $conecting->connect_error);
            }

            $sql = "SELECT * FROM personal";
            $result = $conecting->query($sql);

            if(!$result){
                die("the query faild" . $conecting->$connect_result);
            }

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[name]</td>
                <td>$row[prenom]</td>
                <td>$row[age]</td>
                <td>$row[birth]</td>
            </tr>
                ";
            }
            
            
            ?>
            <tr>
                <td>Atrgouti</td>
                <td>Bilal</td>
                <td>21</td>
                <td>15/5/2002</td>
            </tr>
        </tbody>
    </table>
</body>
</html>