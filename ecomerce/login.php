<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>login to the dashboard</h1>
    <form action="" method="post">
        <label for="">email</label>
        <input name="email" type="text"><br>
        <label for="">password</label>
        <input name="password" type="password"><br>
        <button name="submit" type='submit'>submit</button>
    </form>
    </div>
    <?php
    if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
        include_once 'database.php';
        $sql = 'SELECT * FROM admin WHERE email=? AND password=?';
        $res = $cone->prepare($sql);
        $res->execute(array($_POST['email'], $_POST['password']));
        if($res->rowCount() > 0){
            header("location: index.php");
            session_start();
            $_SESSION['username'] = $_POST['email'];
        }else{
            echo "emaill or password are uncorrect";
        }
    }
    ?>
</body>
</html>