<?php

include_once('../config/connection.php');

$cat = $_POST['nova'];
$stmt = $conectar->prepare("INSERT INTO category (name_cat) VALUES(:nova)");


$stmt->bindParam(":nova", $cat);
$stmt->execute();

/*redireciona o arquivo */
header("Location: cat_add.php");


?>