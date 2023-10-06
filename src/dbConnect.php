<?php

$connection = new PDO('mysql:host=' . $globalConfigs["database"]["host"] . ';port=' . $globalConfigs["database"]["port"] . ";dbname=" . $globalConfigs["database"]["db_name"] . "", $globalConfigs["database"]["db_user"], $globalConfigs["database"]["password"]);
$statement = $connection->prepare("INSERT INTO contacts (name, surname, status) VALUES ('girault', 'mathys', 'online') ");
// $statement = $connection->prepare("SELECT * FROM contacts WHERE 1 ");
global $connection;
$statement->execute();
?>