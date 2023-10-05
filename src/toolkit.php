<?php

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

function getLayout($name){
    if(file_exists("./templates/includes/layouts" . $name . ".inc.php")){
        include "./templates/includes/layouts" . $name . ".inc.php";
    } else{
        echo "cette page n'existe pas";
    }

}




?>