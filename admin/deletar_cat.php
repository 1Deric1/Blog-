<?php
include_once('../config/connection.php');
$stmt = $conectar->prepare("DELETE FROM category WHERE id_cat = :ID");
$id = $_GET['id'];
$stmt->bindParam(":ID", $id);
$stmt->execute();

header("Location: cat_add.php");
?>