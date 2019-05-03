<?php
$pdo = new PDO('mysql:host=localhost; dbname=cats', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('SELECT * FROM cats');
$stmt->execute();
$cats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>