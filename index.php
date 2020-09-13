<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Authorization, Content-Type, X-Requested-With, Accept");
header("Access-Control-Allow-Credentials: false");
header("Access-Control-Max-Age: -1");


if (isset($_GET['api'])) {

    $is_signup = False;

    if (isset($_GET['signup'])) {

        include_once 'signup.php';

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