<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height: 100px;
        }
    </style>
</head>
<body>
    <?php
    include_once 'database.php';
    $id = $_GET['id'];
    $sql = 'SELECT * FROM utilisateur WHERE id=?';
    $res = $cone->prepare($sql);
    $res->execute(array($id));
    while($row = $res->fetch()){
        echo "
        <form method='post' enctype='multipart/form-data'>
        <label>nom</label>
        <input name='nom' type='text' value='$row[nom]'><br>
        <label>prix</label>
        <input name='prix' type='number' value='$row[prix]'><br>
        <input type='file' name='my_photo'>
        <img src='uploads/$row[image]'>
        <input name='submit' type='submit' value='modifier'>
        </form>
        ";
    }
    if(isset($_POST['submit']) && !empty($_POST['nom']) && !empty($_POST['prix'])){
        $img_name = $_FILES['my_photo']['name'];
        $img_tmp = $_FILES['my_photo']['tmp_name'];
        //this pathinfo function gives you the exact type of image so is its bilal.jif the output will be jif
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        //this function is used to transform string to lower case
        $img_ex_lc = strtolower($img_ex);

        $allowed_ex = ["jpg", "jpeg", "png", 'jfif'];
        //check if the type of array is in the allowed array
        if(in_array($img_ex_lc, $allowed_ex)){
            $new_image_name = uniqid("IMG-", true).".".$img_ex_lc;
            $img_upload_path = "uploads/".$new_image_name;              
            move_uploaded_file($img_tmp, $img_upload_path);
            //connect to database
            include_once "database.php";
            $sql = 'UPDATE utilisateur SET nom=?, image=?, prix=? WHERE id=?';
            $res = $cone->prepare($sql);
            $res->execute(array($_POST['nom'], $new_image_name, $_POST['prix'], $_GET['id']));
            if($res){
                header("location: index.php");
            }
        }else{
            $em = "you can't upload files of this type";
        }
    }else{
        echo 'all feilds are required';
    }
    ?>

</body>
</html>