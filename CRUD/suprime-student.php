<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "databasestudent.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM student WHERE id=:id";
    $res = $db->prepare($sql);
    $res->execute([':id' => $id]);
    if($res){
        header("location: students.php");
    }else{
        echo "probleme deleting student";
    }
    ?>
    <h1>hello</h1>
</body>
</html>