<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ecome.css">
</head>
<body>
    <nav>
        <div class="logo">
        <h1>Moro Store</h1>
        </div>
        <ul>
            <li><a href="">Kids</a></li>
            <li><a href="">Boys</a></li>
            <li><a href="">Girls</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
        <P><a href="login.php">Login</a></P>
    </nav>
    <!-- <div class="container">
        <form action="">
            <label for="">title</label>
            <input type="text"><br>
            <label for="">subtitle</label>
            <input type="text"><br>
            <label for="">prix</label>
            <input type="text"><br>
        </form>
    </div> -->
    <div class="container">
        <?php
        include_once "database.php";
        $sql = 'SELECT * FROM utilisateur';
        $res = $cone->prepare($sql);
        $res->execute();
        while($row = $res->fetch()){
            echo "
            <div class='card'>
            <div class='image'>
                    <img src='uploads/$row[image]'>
            </div>
            <div class='content'>
                    <p>id: $row[id]</p>
                    <p>$row[nom]</p>
                    <p>$row[prix]</p>
                    <p><a href=''>Acheter</a></p>
            </div>
            </div>
            ";
        }

        ?>
    </div>
</body>
</html>