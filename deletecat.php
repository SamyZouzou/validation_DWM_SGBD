<?php
$pdo = new PDO('mysql:host=localhost; dbname=cats', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('DELETE FROM cats WHERE id = :id');
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();
header('Location: ./list.php');