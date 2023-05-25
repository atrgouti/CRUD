<?php
$dsn = "mysql:host=localhost;dbname=ocation";
$username = "root";
$password = "";
$cone = new PDO($dsn, $username, $password);
$id = $_GET["id"];
echo $id;
$sqldel = "DELETE FROM client WHERE id_client=:id";
$res = $cone->prepare($sqldel);
$res->execute([':id' => $id]);
if($res){
    header("location: listerC.php");
}
?>