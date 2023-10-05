<?php

function dd(...$param){
    echo "<pre>";
    var_dump($param);
    echo "</pre>";

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

?>