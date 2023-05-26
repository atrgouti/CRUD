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
        <label for="">cin</label>
        <input type="text" name="cin"><br>
        <label for="">nom</label>
        <input type="text" name="nom"><br>
        <label for="">prenom</label>
        <input type="text" name="prenom"><br>
        <label for="">email</label>
        <input type="text" name="email"><br>
        <label for="">password</label>
        <input type="text" name="password"><br>
        <input type="submit" value="ajouter" name="ajouter">
    </form>
    <?php
        if(isset($_POST['ajouter'])){
            $dsn = "mysql:host=localhost;dbname=ocation";
            $username = "root";
            $password = "";
            $cone = new PDO($dsn, $username, $password);
            $sql = 'INSERT INTO client(cin, nom, prenom, email, password) VALUE(?, ?, ?, ?, ?)';
            $res = $cone->prepare($sql);
            $res->execute(array($_POST["cin"], $_POST["nom"], $_POST['prenom'], $_POST['email'], $_POST['password']));
            if($res){
                header("location: listerC.php");
            }else{
                echo "didn't add client";
            }
        }
    ?>
</body>
</html>