<?php
include_once 'database.php';
$id = $_GET['id'];
$sql = 'DELETE FROM utilisateur WHERE id=?';
$res = $cone->prepare($sql);
$res->execute(array($id));
if($res){
    header('location: index.php');
}

?>