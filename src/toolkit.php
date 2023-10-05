<?php
echo "PAGE appelés";
function dd(...$param){
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
    return;
}
function debugMode ($active){
    if($active){
        ini_set('display_errors', 1);
        ini_set('display_errors', 1);
        ini_set('display_errors', 1);

    }
}