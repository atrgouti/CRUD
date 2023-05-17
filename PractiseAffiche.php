<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/projectSmail/bootstrap.css">
    <script defer src="/projectSmail/bootstrap.js"></script>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <td>Name</td>
                <td>Prenom</td>
                <td>Email</td>
                <td>Product</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once "database.php";

            $sql = "SELECT * FROM customer";
            $res = $db->prepare($sql);
            $res->execute();

            while($row = $res->fetch()){
                echo"
                <tr>
                <td>$row[name]</td>
                <td>$row[prenom]</td>
                <td>$row[email]</td>
                <td>$row[product]</td>
                </tr>
                ";
            }

            
            ?>
            <tr>
                <td>Atrgouti</td>
                <td>Bilal</td>
                <td>Btrgouti@gmail.com</td>
                <td>Macbook</td>
            </tr>
        </tbody>
    </table>
</body>
</html>