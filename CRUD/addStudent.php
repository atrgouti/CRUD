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
    <div class="container">
        <a href="./students.php" class="return" style="padding: 20px; text-decoration: none; color: red;">Return</a>
        <h1>Add a student</h1>
        <table>
        <form action="" mathod="post">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td><input type="text" name="gender"></td>
            </tr>
            <tr>
                <td><input type="submit" name="ajouter" value="add student" class="submit"></td>
            </tr>
        </form>
        </table>
        <?php
        if(isset($_POST["ajouter"])){
            include_once "database.php";
            $sql = "INSERT INTO students(name, email, gender) Value(?, ?, ?)";
            $res = $dbcone->prepare($sql);
            $res->execute(array($_POST["name"],$_POST["email"],$_POST["gender"]));
            if($res){
                echo "<P>student added succefully</p>";
            }else{
                echo "<P>did not add</p>";
            };
        }
        
        ?>
    </div>
</body>
</html>