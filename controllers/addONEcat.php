<?php
$pdo = new PDO('mysql:host=localhost; dbname=cats', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('INSERT INTO cats (name_cat, name_proprio, cat_age, eyes) VALUES (:name_cat, :name_proprio, :cat_age, :eyes)');
$stmt->bindParam(':name_cat', $_POST['name_cat']);
$stmt->bindParam(':name_proprio', $_POST['name_proprio']);
$stmt->bindParam(':cat_age', $_POST['cat_age']);
$stmt->bindParam(':eyes', $_POST['eyes']);
$stmt->execute();
header('Location: /list.php');
