<?php
session_start();
if($_SESSION['username']){
    echo "Welcome adamin";
}else{
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
        }
        td{
            padding: 10px

        }
        td img{
            height: 100px;
        }
    </style>
</head>
<body>
    <h2>Ajouter</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="">nom</label>
        <input type="text" name="nom"><br>
        <label for="">prix</label>
        <input type="text" name="prix"><br>
        <input type="file" name="my_photo">
        <input type="submit" name="submit" value="upload">
    </form>
    <table border='' style="border-collapse: collapse">
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>image</td>
            <td>prix</td>
            <td>action</td>
        </tr>
        <tbody>
            <?php
            include_once "database.php";
            $sql = 'SELECT * FROM utilisateur';
            $res = $cone->prepare($sql);
            $res->execute();
            while($row = $res->fetch()){
                echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[nom]</td>
                    <td><img src='uploads/$row[image]'></td>
                    <td>$row[prix]</td>
                    <td><a href='modifier.php?id=$row[id]'>modifier</a></td>
                    <td><a href='suprime.php?id=$row[id]'>suprime</a></td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
    <a href="logout.php">logout</a>
</body>
</html>