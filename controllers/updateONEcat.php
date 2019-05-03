<?php
$pdo = new PDO('mysql:host=localhost; dbname=cats', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('UPDATE cats SET name_cat = :name_cat, name_proprio = :name_proprio, cat_age = :cat_age, eyes = :eyes WHERE id = :id');
$stmt->bindParam(':name_cat', $_POST['name_cat']);
$stmt->bindParam(':name_proprio', $_POST['name_proprio']);
$stmt->bindParam(':cat_age', $_POST['cat_age']);
$stmt->bindParam(':eyes', $_POST['eyes']);
$stmt->bindParam(':id',$_POST['id']);
$stmt->execute();
header('Location: /list.php');
?>