<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 50%;
            margin: 0 auto;
            background-color:  rgb(235, 235, 235);
        }
        .container input{
            padding: 7px;
        }
        table td{
            padding: 20px;
        }
        .submit{
            width: 100%;
            background-color: black;
            color: white;
            cursor: pointer;
            padding: 0px 20px
        }
    </style>
</head>
<body>
    <?php
    include_once "databasestudent.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM student where id=:id";
    $result = $db->prepare($sql);
    $result->execute([':id' => $id]);
    while($donnees=$result->fetch()){
    ?>
    <!-- <form action="" method="post">
        <label for="">name</label>
        <input type="text" name="nom" value="""><br>
        <label for="">Email</label>
        <input type="text" name="email" value=""><br>
        <label for="">Gender</label>
        <input type="text" name="gender" value=""><br>
        <input name="modifier" value="modifier" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir Modifier cetenregistrement?')">
    </form> -->
    <div class="container">
        <a href="./students.php" class="return" style="padding: 20px; text-decoration: none; color: red;">Return</a>
        <h1>Modifier Student</h1>
        <form action="" method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="nom" value="<?php echo ($donnees['nom'])?>"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" value="<?php echo ($donnees['email'])?>"></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td><input type="text" name="gender" value="<?php echo ($donnees['gender'])?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="modifier" value="Modifier" class="submit" onclick="return confirm('Êtes-vous sûr de vouloir Modifier cetenregistrement?')"></td>
            </tr>
        </table>
        </form>
    </div>
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