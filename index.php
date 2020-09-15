<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Authorization, Content-Type, X-Requested-With, Accept");
header("Access-Control-Allow-Credentials: false");
header("Access-Control-Max-Age: -1");

include_once 'database.php';
try {
    $pdo = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}


if (isset($_GET['api'])) {

    $is_signup = False;

    if (isset($_GET['signup'])) {

        include_once 'signup.php';

    }
    elseif(insset($_GET['login'])){
        include_once 'login.php';
    }
    else {

        header('HTTP/1.0 404 Not Found');
    }
}

else {

    header('HTTP/1.0 404 Not Found');
}


exit;
function api_response($array){
    header("Content-type: application/json; charset = utf-8");
    echo json_encode($array);
    exit;
}