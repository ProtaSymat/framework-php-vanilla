<?php
require_once "./src/dbConnect.php";

function dd(...$params){
    foreach($params as $key => $params){
        echo "<pre>";
        var_dump($params);
        echo "</pre>";
    }
    return;


}

function ddd(...$param){
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
    die();
}


function debugMode ($active){
    if($active){
        ini_set('display_errors', 1);
        ini_set('display_stratup_errors', 1);
        error_reporting(E_ALL);
    }return;
}

function fromInc($name){
    if(file_exists("./templates/includes/" . $name . ".inc.php")){
        include "./templates/includes/" . $name . ".inc.php";
    } else{
        echo "cette page n'existe pas";
    }

}

// function getLayout($name){
//     if(file_exists("./templates/includes/layouts" . $name . ".inc.php")){
//         include "./templates/includes/layouts" . $name . ".inc.php";
//     } else{
//         echo "cette page n'existe pas";
//     }

// }

function getAllContacts($connection) {
    global $connection;
    $statement = $connection->query("SELECT * FROM contacts");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getContactById($connection, $id) {
    global $connection;
    $statement = $connection->prepare("SELECT * FROM contacts WHERE id = ?");
    $statement->bindParam(1, $id);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function createContact($connection, $name, $surname) {
    global $connection;
    $statement = $connection->prepare("INSERT INTO contacts (name, surname, status) VALUES (?, ?, 'online')");
    $statement->bindParam(1, $name);
    $statement->bindParam(2, $surname);
    return $statement->execute();
}

function deleteContactById($connection, $id) {
    global $connection;
    $statement = $connection->prepare("DELETE FROM contacts WHERE id = ?");
    $statement->bindParam(1, $id);
    return $statement->execute();
}

function updateContactStatusById($connection, $id, $newStatus) {
    global $connection;
    $statement = $connection->prepare("UPDATE contacts SET status = ? WHERE id = ?");
    $statement->bindParam(1, $newStatus);
    $statement->bindParam(2, $id);
    return $statement->execute();
}


$allContacts = getAllContacts($connection);
$contact = getContactById($connection, 1);
createContact($connection, "Nouveau", "Contact");
deleteContactById($connection, 3);
updateContactStatusById($connection, 2, "offline");

?>