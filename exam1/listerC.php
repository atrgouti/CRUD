<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="ajouter.php">Ajouter</a>
    <table border=''>
        <thead>
            <tr>
                <td>id_client</td>
                <td>cin</td>
                <td>nom</td>
                <td>prenon</td>
                <td>email</td>
                <td>password</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $dsn = "mysql:host=localhost;dbname=ocation";
            $username = "root";
            $password = "";
            $cone = new PDO($dsn, $username, $password);
            $sql = 'SELECT * FROM client';
            $req = $cone->prepare($sql);
            $req->execute();
            while($donne = $req->fetch()){
                ?>
                <tr>
                    <td><?php echo $donne["id_client"] ?></td>
                    <td><?php echo $donne["cin"] ?></td>
                    <td><?php echo $donne["nom"] ?></td>
                    <td><?php echo $donne["prenom"] ?></td>
                    <td><?php echo $donne["email"] ?></td>
                    <td><?php echo $donne["password"] ?></td>
                    <td><a href='suprimeclient.php?id=<?php echo $donne["id_client"]?>'  onclick="return confirm('Êtes-vous sûr de vouloir Modifier cetenregistrement?')">SUPRIME</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>