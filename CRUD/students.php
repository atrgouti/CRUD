<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./students.css">
</head>
<body>
    <form action="" method='post'>
    <div class="container">
        <div class="search">
            
            <input type="text" name="inpoti" placeholder="seach...">
            <input type="submit" name="chercher" class="button">
    </form>
        </div>
    </div>
    <div class="container">
        <div class="ajouter">
            <h1>Students Information</h1>
            <a href="./addStudent.php" style="text-decoration: none; color: white;"><button>Add</button></a>
        </div>
    </div>
    <div class="container">
        <table border="" >
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            <?php
            include_once "databasestudent.php";
            $sql = "SELECT * FROM student";
            $res = $db->prepare($sql);
            $res->execute();
            
            // if(isset($_POST['chercher'])){
            //     echo "it's working";
            // }else{
            while($row = $res->fetch()){
                echo "
                <tr class='tr'>
                    <td>$row[id]</td>
                    <td>$row[nom]</td>
                    <td>$row[email]</td>
                    <td>$row[gender]</td>
                    <td><a href='modifier-student.php?id=$row[id]'>Modifier</a>
                        <a style='background-color: black; color: white; padding: 5px;' href='suprime-student.php?id=$row[id]' onclick=return confirm('Êtes-vous sûr de vouloir Modifier cetenregistrement?')>suprime</a>
                        <a style='background-color: brown; color: white; padding: 5px;' href='viewStudent.php?id=$row[id]'>view</a>
                    </td>
                </tr>
                ";}

            // }
    ?>
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
</body>
</html>