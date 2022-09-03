<?php

function view($path ,  $data = []){
    extract($data);
    return require_once "../src/views/".$path.".php";
}

function redirect($url){
    header('location: '.url($url));    
}

function url($url){
    return 'http://'.$_SERVER['SERVER_NAME']."/".$url;
}

function home(){
    return 'http://'.$_SERVER['SERVER_NAME'];
}

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}

?>