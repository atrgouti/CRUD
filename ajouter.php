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
        <label for="">Name</label>
        <input type="text" name="name"><br>
        <label for="">prenom</label>
        <input type="text" name="prenom"><br>
        <label for="">email</label>
        <input type="text" name="email"><br>
        <label for="">product</label>
        <input type="text" name="product"><br>
        <input type="submit" name="ajouter" value="ajouter">
    </form>
    <?php
    if(isset($_POST["ajouter"])){
        include_once "database.php";
        $sql = "INSERT INTO customer(name, prenom, email, product) VALUE(?, ?, ?, ?)";
        $res = $db->prepare($sql);
        $res->execute(array($_POST["name"], $_POST["prenom"], $_POST["email"], $_POST["product"]));
        if($res){
            echo "added succefully";
        }else{
            echo "error";
        }
        }
    ?>
</body>
</html>