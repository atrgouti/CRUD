<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">search</label>
        <input type="text" name="ide">
        <input type="submit" value="recherche" name="recherche">
    </form>

    <?php
    if(isset($_POST["recherche"])){
        include_once "database.php";
        $sql = "SELECT * FROM customer WHERE name=?";
        $req = $db->prepare($sql);
        $req->execute(array($_POST["ide"]));
        echo "br";
        echo "<table border = '2'> <th>Id</th> <th>Nom</th> <th>Email</th>";
        while($row = $req->fetch()){
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["prenom"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

    }
    
    ?>
</body>
</html>