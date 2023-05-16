<?php

$name = "";
$email = "";
$phone = "";
$adress = "";

$errorMessage = '';
$successMessage = '';
if($_SERVER['REQUEST_METHOD'] == POST){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];

    do {
        if( empty($name) || empty($email) || empty($phone) || empty($adress)){
            $errorMessage = "All the fields are required";
            break;
        };

        //add new client to database
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $adress = $_POST["adress"];

        $successMessage = "client added suceffuly";

    }while(false);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="/projectSmail/bootstrap.css">
    <script defer src="/projectSmail/bootstrap.js"></script>
</head>
<body>
    <div class="container my-5" >
        <h2>New clint</h2>

        <php
        if(!empty($errorMessage)){
            echo "
            <div class='aslert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strgong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Adress</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="">
                </div>
            </div>
        </form>
    </div>
</body>
</html>