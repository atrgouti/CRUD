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
    $sql = "SELECT * FROM student where id=:id";
    $result = $db->prepare($sql);
    $result->execute([':id' => $id]);
    while($donnees=$result->fetch()){
    ?>
    <form action="" method="post">
        <label for="">name</label>
        <input type="text" name="nom" value="<?php echo ($donnees['nom'])?>""><br>
        <label for="">Email</label>
        <input type="text" name="email" value="<?php echo ($donnees['email'])?>"><br>
        <label for="">Gender</label>
        <input type="text" name="gender" value="<?php echo ($donnees['gender'])?>"><br>
        <input name="modifier" value="modifier" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir Modifier cetenregistrement?')">
    </form>
    <?php } ?>
    <?php
    if(isset($_POST["modifier"])){
        if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['gender'])){
            $sql = "UPDATE student SET nom=:nom, email=:email, gender=:gender WHERE id=:id";
            $res = $db->prepare($sql);
            $res->execute([":nom" => $_POST["nom"], ":email" => $_POST["email"], ":gender" => $_POST["gender"], ":id" => $id]);
            if($res){
                header("location: students.php");
            }else{
                echo "student not modified";
            }
        }else{
            echo "fill all the feilds please";
        }
    }
    ?>

</body>
</html>