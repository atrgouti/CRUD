<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hey</h1>
    <?php
    include_once "databasestudent.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id=:id";
    $res = $db->prepare($sql);
    $res->execute([':id' => $id]);
    while($data = $res->fetch()){

    }
    ?>
    <form action="" method="post">
        <label for="">name</label>
        <input type="text" name="nom" value="<?php echo $data["name"]?>"><br>
        <label for="">Email</label>
        <input type="text" name="prenom" value="<?php echo $data["email"]?>"><br>
        <label for="">Gender</label>
        <input type="text" name="nom" value="<?php echo $data["gender"]?>"><br>
        <input type="submit">
    </form>
</body>
</html>