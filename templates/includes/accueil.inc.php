<h1>Bienvenue sur mon site web !</h1>
<?php
$statement = $connection->query(queryBuilder("r", "contacts"));
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

