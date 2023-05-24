<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 50%;
            margin: 0px auto;
        }
        h1{
            text-align: center;
            color: brown;
        }
        p{
            background-color: brown;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    $id = $_GET["id"];
    include_once "databasestudent.php"; 
    $sql = 'SELECT * FROM studentinfo  WHERE id=:id';
    $res = $db->prepare($sql);
    $res->execute([':id' => $id]);
    while($row = $res->fetch()){
        echo"
        <h1>students infos</h1>
        <a href='./students.php' class='return' style='padding: 20px; text-decoration: none; color: red; text-align: center;'>Return</a>
        <div class='container'>
        <p>Id: $id</p>
        <p>Nom: $row[nom]</p>
        <p>Prenom: $row[prenom]</p>
        <p>Age: $row[age]</p>
        <p>Adress: $row[adress]</p>
        </div>
        ";
    }

    ?>
</body>
</html>