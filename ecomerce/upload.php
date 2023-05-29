<?php
if (isset($_POST['submit']) && isset($_FILES["my_photo"])){
    print_r($_FILES['my_photo']);
    $img_name = $_FILES['my_photo']['name'];
    $img_type = $_FILES['my_photo']['type'];
    $img_tmp = $_FILES['my_photo']['tmp_name'];
    $img_size = $_FILES['my_photo']['size'];
    $error = $_FILES['my_photo']['error'];

    if($error == 0){
        if($img_size > 2000000){
            $em = 'sorry your file is too large';
            header("location: index.php?error=$em");
        }else{
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
                $sql = "insert into utilisateur(nom, image, prix) value(?, ?, ?)";
                $res = $cone->prepare($sql);
                $res->execute(array($_POST["nom"],$new_image_name, $_POST["prix"], ));
                if($res){
                    echo "image added succefully";
                }
                
            }else{
                $em = "you can't upload files of this type";
                header("location: index.php?error=$em");
            }

        }
    }else{
        $em = "known error accured";
        header("location: index.php?error=$em");
    }
}else{
    header("location: index.php");
}
?>