<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height: 100px;
        }
    </style>
</head>
<body>
    <?php
    include_once 'database.php';
    $id = $_GET['id'];
    $sql = 'SELECT * FROM utilisateur WHERE id=?';
    $res = $cone->prepare($sql);
    $res->execute(array($id));
    while($row = $res->fetch()){
        echo "
        <form action=''>
        <label>nom</label>
        <input type='text' value='$row[nom]'><br>
        <label>prix</label>
        <input type='number' value='$row[prix]'><br>
        <input type='file'>
        <img src='uploads/$row[image]'>
        <input type='submit' value='modifier'>
        </form>
        ";
    }
    ?>

</body>
</html>