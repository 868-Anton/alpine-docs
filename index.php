<?php

require('functions.php');
// require('router.php');

// Connect to database and execute a query

$dsn = "mysql:host=localhost;port=3306;dbname=sitrep;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from battalions");

$statement ->execute();

$camps = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($camps as $camp){
  echo "<li>{$camp['battalionName']}</li>";
}