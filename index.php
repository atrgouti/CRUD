<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/projectSmail/bootstrap.css">
    <script defer src="/projectSmail/bootstrap.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>List of clients</h2>
        <a href="./create.php" class="btn btn-primary" role="button">New client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Adress</td>
                    <td>Created at</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "myshop";
                // create connection
                $connection = new mysqli($servername, $username, $password, $database);

                //check connection
                if($connection->connect_error){
                    die("connection failed" .  $connection->connect_error);
                };

                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if(!$result){
                    die("invalid query" .  $connection->connect_error);
                };

                //read data of each row
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[adress]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a href='/myshop/edit.php?id=$row[id]' class='btn btn-primary btn-sm'>Edit</a>
                        <a href='/myshop/delete.php?id=$row[id]' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr> 
                    ";
                }

                ?>
                <tr>
                    <td>10</td>
                    <td>Bill Gates</td>
                    <td>billo.gates@mucrosoft.com</td>
                    <td>+121837183</td>
                    <td>New York, USA</td>
                    <td>18/05/2002</td>
                    <td>
                        <a href="/myshop/edit.php" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/myshop/delete.php" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>