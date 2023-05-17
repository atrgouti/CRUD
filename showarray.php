<?php

include_once "database.php";

$sql = 'SELECT * FROM customer ';
$res = $db->prepare($sql);
$res->execute();

$donne = $res->fetchAll();

echo "<pre>";
print_r($donne);
echo "</pre>";


?>