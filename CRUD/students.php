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
    <div class="container">
        <div class="search">
            <input type="text" placeholder="seach...">
            <button>search</button>
        </div>
    </div>
    <div class="container">
        <div class="ajouter">
            <h1>Students Information</h1>
            <button><a href="./addStudent.php">Add</a></button>
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
            include_once "database.php";
            $sql = "SELECT * FROM student";
            $res = $dbcone->prepare($sql);
            $res->execute();
            while($row = $res->fetch()){
                echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[gender]</td>
                    <td>edit</td>
                </tr>
                ";
            }
    ?>
                <tr>
                    <td>1</td>
                    <td>Bilal</td>
                    <td>btrgouti@gmail.com</td>
                    <td>Male</td>
                    <td>bbb</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>